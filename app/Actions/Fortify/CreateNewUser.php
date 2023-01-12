<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Models\Profile;
use App\Models\Vendor;
class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
        $uesr = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        $profile = new Profile();
        $profile->Phone = '';
        $profile->City = '';
        $profile->address = '';
        $profile->state = '';
        $profile->Country = '';
        $profile->Comment = '';
        $profile->Status = 'Active';
        $profile->User_id  = $uesr->id;
        $profile->Profileimg = 'Vendor.jpg';
        $profile->save();

        $ven = new Vendor();
        $ven->status = 'Active';
        $ven->Company_Name= $input['Company'];
        $ven->User_id = $uesr->id;
        $ven->save();

        return $uesr;
        // dd($uesr);
    }
}
