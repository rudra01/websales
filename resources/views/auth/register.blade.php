

<x-guest-layout>

<!-- Wrapper -->
<div class="hk-wrapper hk-pg-auth" data-footer="simple">
    <!-- Main Content -->
    <div class="hk-pg-wrapper py-0">
        <div class="hk-pg-body py-0">
            <!-- Container -->
            <div class="container-fluid">
                <!-- Row -->
                <div class="row auth-split">
                    <div class="col-xl-5 col-lg-6 col-md-5 d-md-block d-none bg-primary-dark-3 bg-opacity-85 position-relative">
                        <img class="bg-img" src="dist/img/signup-bg.jpg" alt="bg-img">
                        <div class="auth-content py-8">
                            <div class="row">
                                <div class="col-xxl-8 mx-auto">
                                    <div class="text-center">
                                        {{-- <h3 class="text-white mb-2">High quality Bootstrap template for your next web project.</h3> --}}
                                        {{-- <p class="text-white">Start your <u>14 Days FREE</u> trial.</p> --}}
                                    </div>
                                    <ul class="list-icon text-white mt-4">
                                        <li class="mb-1"><p><i class="ri-check-fill"></i><span>There are many variations of passages of Lorem Ipsum available, in some form, by injected humour</span></p></li>
                                        <li class="mb-1"><p><i class="ri-check-fill"></i><span>There are many variations of passages of Lorem Ipsum available, in some form, by injected humour</span></p></li>
                                    </ul>
                                    <div class="row gx-3 mt-7">
                                        <div class="col-lg-6">
                                            <div class="card card-shadow">
                                                <img class="card-img-top" src="{{ asset('dist/img/slide1.jpg') }}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title text-uppercase">Help Centre</h5>
                                                    <p class="card-text">This is a wider card with supporting text.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card card-shadow">
                                                <img class="card-img-top" src="{{ asset('dist/img/slide2.jpg') }}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title text-uppercase">Research Centre</h5>
                                                    <p class="card-text">This is a wider card with supporting text.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <p class="p-xs text-white credit-text opacity-55">All illustration are powered by <a href="https://icons8.com/ouch/" target="_blank" class="link-white"><u>OUCH</u></a></p> --}}
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-7 col-sm-10 position-relative mx-auto">
                        <div class="auth-content flex-column pt-8 pb-md-8 pb-13">
                            <div class="text-center mb-7">
                                <a class="navbar-brand fs-2 me-0" href="/">
                                    {{-- <img class="brand-img d-inline-block" src="dist/img/logo-light.png" alt="brand"> --}}
                                    Websales
                                </a>
                            </div>

                            <form method="POST" action="{{ route('register') }}" class="w-100">
                                @csrf
                                <div class="row">
                                    <div class="col-xxl-5 col-xl-7 col-lg-10 mx-auto">
                                        <h4 class="text-center mb-4">Sign Up</h4>

                                        <div class="row gx-3">
                                            <div class="form-group col-lg-12">
                                                <x-jet-label for="name" value="{{ __('Name') }}"  class="form-label"/>
                                                <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />

                                                {{-- <input class="form-control" placeholder="Enter your name" value="" type="text"> --}}
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <x-jet-label for="Company" value="{{ __('Company') }}"  class="form-label"/>
                                                <x-jet-input id="Company" class="form-control" type="text" name="Company" :value="old('Company')" required autofocus autocomplete="Company" />

                                                {{-- <input class="form-control" placeholder="Enter your name" value="" type="text"> --}}
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <x-jet-label for="email" value="{{ __('Email') }}"  class="fonm-label"/>
                                                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />

                                                {{-- <input class="form-control" placeholder="Enter username" value="" type="text"> --}}
                                            </div>
                                            {{-- <div class="form-group col-lg-12">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" placeholder="Enter your email id" value="" type="text">
                                            </div> --}}
                                            <div class="form-group col-lg-12">
                                                <x-jet-label for="password" value="{{ __('Password') }}" class="form-label" />
                                                <div class="input-group password-check">
                                                    <span class="input-affix-wrapper affix-wth-text">
                                                        {{-- <input class="form-control" placeholder="6+ characters" value="" type="password"> --}}
                                                        <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />

                                                        <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                                                            <span>Show</span>
                                                            <span class="d-none">Hide</span>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-12">
                                                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="form-label" />

                                                <div class="input-group password-check">
                                                    <span class="input-affix-wrapper affix-wth-text">
                                                        {{-- <input class="form-control" placeholder="6+ characters" value="" type="password"> --}}
                                                        <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />


                                                        {{-- <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                                                            <span>Show</span>
                                                            <span class="d-none">Hide</span>
                                                        </a> --}}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-check form-check-sm mb-3">
                                            <input type="checkbox" class="form-check-input" id="logged_in" checked>
                                            <label class="form-check-label text-muted fs-8" for="logged_in">By creating an account you specify that you have read and agree with our <a href="#">Tearms of use</a> and <a href="#">Privacy policy</a>. We may keep you inform about latest updates through our default <a href="#">notification settings</a></label>
                                        </div>
                                        <button href="{{ route('login') }}" class="btn btn-primary btn-rounded btn-uppercase btn-block"> {{ __('Register') }}</button>
                                        <p class="p-xs mt-2 text-center">Already a member ? <a href="{{ route('login') }}"><u>{{ __('Already registered?') }}</u></a></p>
                                    </div>
                                </div>
                            </form>
                            <x-jet-validation-errors />



                        </div>
                        <!-- Page Footer -->
                        <div class="hk-footer border-0">
                            <footer class="container-xxl footer">
                                <div class="row">
                                    <div class="col-xl-8 text-center">
                                        <p class="footer-text pb-0"><span class="copy-text">websales © 2022 All rights reserved.</span> <a href="#" class="" target="_blank">Privacy Policy</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">T&C</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">System Status</a></p>
                                    </div>
                                </div>
                            </footer>
                        </div>
                        <!-- / Page Footer -->
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->
        </div>
        <!-- /Page Body -->
    </div>
    <!-- /Main Content -->
</div>
<!-- /Wrapper -->


</x-guest-layout>
