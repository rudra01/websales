
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
                        <div class="col-xl-5 col-lg-6 col-md-7 position-relative mx-auto">
                            <div class="auth-content flex-column pt-8 pb-md-8 pb-13">
                                <div class="text-center mb-7">
                                    <a class="navbar-brand me-0 fs-2 fw-2" href="/">
                                        {{-- <img class="brand-img d-inline-block" src="dist/img/logo-light.png" alt="brand"> --}}
                                        websales
                                    </a>
                                </div>

                                @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}" class="w-100">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-7 col-sm-10 mx-auto">
                                            <div class="text-center mb-4">
                                                <h4>Sign in to your account</h4>
                                            <p>Go Sign in into the portal And Know All</p>
                                            </div>
                                            <div class="row gx-3">
                                                <div class="form-group col-lg-12">
                                                    <x-jet-validation-errors class="mb-4" />

                                                    <div class="form-label-group">
                                                        <x-jet-label for="email" value="{{ __('Email') }}" />
                                                    </div>
                                                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <div class="form-label-group">
                                                        <x-jet-label for="password" value="{{ __('Password') }}" />
                                                        {{-- <a href="#" class="fs-7 fw-medium">Forgot Password ?</a> --}}
                                                        @if (Route::has('password.request'))
                                                                <a class="fs-7 fw-medium" href="{{ route('password.request') }}">
                                                                    {{ __('Forgot your password?') }}
                                                                </a>
                                                            @endif
                                                    </div>
                                                    <div class="input-group password-check">
                                                        <span class="input-affix-wrapper affix-wth-text">
                                                            <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                                            <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                                                                <span>Show</span>
                                                                <span class="d-none">Hide</span>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div class="form-check form-check-sm mb-3">
                                                    <input type="checkbox" class="form-check-input" id="logged_in" checked>
                                                    <label class="form-check-label text-muted fs-7" for="logged_in">Keep me logged in</label>
                                                </div>
                                            </div>
                                            <button href="#" class="btn btn-primary btn-uppercase btn-block"> {{ __('Log in') }}</button>
                                            <p class="p-xs mt-2 text-center">New to Websales ?  @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="">Create new account</a>
                        @endif</p>
                                            </div>
                                    </div>
                                </form>
                            </div>
                            <x-jet-validation-errors />

                            <!-- Page Footer -->
                            <div class="hk-footer border-0">
                                <footer class="container-xxl footer">
                                    <div class="row">
                                        <div class="col-xl-8 text-center">
                                            <p class="footer-text pb-0"><span class="copy-text">Websales © 2022-23 All rights reserved.</span> <a href="/" class="" target="_blank">Privacy Policy</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">T&C</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">System Status</a></p>
                                        </div>
                                    </div>
                                </footer>
                            </div>
                            <!-- / Page Footer -->
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-5 col-sm-10 d-md-block d-none position-relative bg-primary-light-5">
                            <div class="auth-content flex-column text-center py-8">
                                <div class="row">
                                    <div class="col-xxl-7 col-xl-8 col-lg-11 mx-auto">
                                        <h2 class="mb-4 ">Meet all new Heighs  </h2>
                                         <p>One Portal To Solve Everything. This is the Registation for the vendors only. Vendors Can Registar themself Here And Can Order and Use other benefits </p>
                                        <button class="btn  btn-flush-primary btn-uppercase mt-2">Take Tour</button>
                                    </div>
                                </div>
                                <img src="dist/img/macaroni-logged-out.png"  class="img-fluid w-sm-50 mt-7" alt="login"/>
                            </div>
                            {{-- <p class="p-xs credit-text opacity-55">All illustration are powered by <a href="https://icons8.com/ouch/" target="_blank" class="text-light"><u>Icons8</u></a></p> --}}
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

