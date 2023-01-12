<nav class="hk-navbar navbar navbar-expand-xl navbar-light fixed-top">
    <div class="container-fluid">
    <!-- Start Nav -->
    <div class="nav-start-wrap">
        <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span></button>
    </div>
    <!-- /Start Nav -->

    <!-- End Nav -->
    <div class="nav-end-wrap">
        <ul class="navbar-nav flex-row">
            {{-- <li class="nav-item">
                <a href="email.html" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover"><span class="icon"><span class=" position-relative"><span class="feather-icon"><i data-feather="inbox"></i></span><span class="badge badge-sm badge-soft-primary badge-sm badge-pill position-top-end-overflow-1">4</span></span></span></a>
            </li> --}}
            <li class="nav-item">
                <div class="dropdown dropdown-notifications">
                    <a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation role="button" aria-haspopup="true" aria-expanded="false"><span class="icon"><span class="position-relative"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge badge-success badge-indicator position-top-end-overflow-1"></span></span></span></a>
                    <div class="dropdown-menu dropdown-menu-end p-0">
                        <h6 class="dropdown-header px-4 fs-6">Notifications<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"><span class="icon"><span class="feather-icon"><i data-feather="settings"></i></span></span></a>
                        </h6>
                        <div data-simplebar class="dropdown-body  p-2">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-head">
                                        <div class="avatar avatar-rounded avatar-sm">
                                            <img src="{{ asset('dist/img/avatar2.jpg') }}" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Morgan Freeman accepted your invitation to join the team</div>
                                            <div class="notifications-info">
                                                <span class="badge badge-soft-success">Collaboration</span>
                                                <div class="notifications-time">Today, 10:14 PM</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-head">
                                        <div class="avatar  avatar-icon avatar-sm avatar-success avatar-rounded">
                                            <span class="initial-wrap">
                                                <span class="feather-icon"><i data-feather="inbox"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">New message received from Alan Rickman</div>
                                            <div class="notifications-info">
                                                <div class="notifications-time">Today, 7:51 AM</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-head">
                                        <div class="avatar  avatar-icon avatar-sm avatar-pink avatar-rounded">
                                            <span class="initial-wrap">
                                                <span class="feather-icon"><i data-feather="clock"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">You have a follow up with  Head on Friday, Dec 19 at 9:30 am</div>
                                            <div class="notifications-info">
                                                <div class="notifications-time">Yesterday, 9:25 PM</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-head">
                                        <div class="avatar avatar-sm avatar-rounded">
                                            <img src="{{ asset('dist/img/avatar3.jpg') }}" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Application of Sarah Williams is waiting for your approval</div>
                                            <div class="notifications-info">
                                                <div class="notifications-time">Today 10:14 PM</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-head">
                                        <div class="avatar avatar-sm avatar-rounded">
                                            <img src="{{ asset('dist/img/avatar10.jpg') }}" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Winston Churchil shared a document with you</div>
                                            <div class="notifications-info">
                                                <span class="badge badge-soft-violet">File Manager</span>
                                                <div class="notifications-time">2 Oct, 2021</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-head">
                                        <div class="avatar  avatar-icon avatar-sm avatar-danger avatar-rounded">
                                            <span class="initial-wrap">
                                                <span class="feather-icon"><i data-feather="calendar"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Last 2 days left for the project to be completed</div>
                                            <div class="notifications-info">
                                                <span class="badge badge-soft-orange">Updates</span>
                                                <div class="notifications-time">14 Sep, 2021</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer"><a href="#"><u>View all notifications</u></a></div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown ps-2">
                    <a class=" dropdown-toggle no-caret" href="#" role="button" data-bs-display="static" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside" aria-expanded="false">
                        <div class="avatar avatar-rounded avatar-xs">
                            <img src="{{ asset('dist/img/avatar12.jpg') }}" alt="user" class="avatar-img">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="p-2">
                            <div class="media">
                                <div class="media-head me-2">
                                    <div class="avatar avatar-primary avatar-sm avatar-rounded">
                                        <span class="initial-wrap">Hk</span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="dropdown">
                                        <a href="#" class="d-block dropdown-toggle link-dark fw-medium"  data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="inside">{{ Auth::user()->name }}</a>

                                    </div>
                                    <div class="fs-7">{{Auth::user()->email }}</div>


                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                            <input class="form-control border-0 text-start p-0 text-danger" type="submit" name="" id="" value="logout ">
                                        {{-- <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                               </x-jet-dropdown-link> --}}
                                    </form>



                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- /End Nav -->
    </div>
</nav>
