<nav class="contactapp-sidebar">
    <div data-simplebar class="nicescroll-bar">
        <div class="menu-content-wrap">
            <button type="button" class="btn btn-primary btn-rounded btn-block mb-4" data-bs-toggle="modal" data-bs-target="#add_new_salesman">
                Add Sales Person
            </button>
            <div class="menu-group">
                <ul class="nav nav-light navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('salesmanagers')}}">
                            <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="inbox"></i></span></span>
                            <span class="nav-link-text">All Profiles</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{route('Activesalesprofile')}}">
                            <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="star"></i></span></span>
                            <span class="nav-link-text">Active Profiles </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('Archivesalesprofile')}}">
                            <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="archive"></i></span></span>
                            <span class="nav-link-text">Archive Profiles</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="separator separator-light"></div>

            <button type="button" class="btn btn-primary btn-rounded btn-block mb-4" data-bs-toggle="modal" data-bs-target="#add_new_Vendor">
                Add Vendor
            </button>
            <div class="menu-group">
                <ul class="nav nav-light navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('vendor')}}">
                            <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="inbox"></i></span></span>
                            <span class="nav-link-text">Vendor Profiles</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{route('Activevendorprofile')}}">
                            <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="star"></i></span></span>
                            <span class="nav-link-text"> Vendor Active Profiles </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('Archivevendorprofile')}}">
                            <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="archive"></i></span></span>
                            <span class="nav-link-text">Vendor Archive Profiles</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="separator separator-light"></div>
            <button type="button" class="btn btn-primary btn-rounded btn-block mb-4" data-bs-toggle="modal" data-bs-target="#add_new_wearhouse">
                Add Wearhouse
            </button>
            <div class="menu-group">
                <ul class="nav nav-light navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('wearhouse')}}">
                            <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="inbox"></i></span></span>
                            <span class="nav-link-text">Wearhouse Profiles</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{route('ActiveWearhouseprofile')}}">
                            <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="star"></i></span></span>
                            <span class="nav-link-text"> Wearhouse Active Profiles </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('ArchiveWearhouseprofile')}}">
                            <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="archive"></i></span></span>
                            <span class="nav-link-text">Wearhouse Archive Profiles</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--Sidebar Fixnav-->
    <div class="contactapp-fixednav">
        <div class="hk-toolbar">
            <ul class="nav nav-light">
                <li class="nav-item nav-link">
                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Settings" href="#"><span class="icon"><span class="feather-icon"><i data-feather="settings"></i></span></span></a>
                </li>
                <li class="nav-item nav-link">
                    <a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Archive"><span class="icon"><span class="feather-icon"><i data-feather="archive"></i></span></span></a>
                </li>
                <li class="nav-item nav-link">
                    <a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Help"><span class="icon"><span class="feather-icon"><i data-feather="book"></i></span></span></a>
                </li>
            </ul>
        </div>
    </div>
    <!--/ Sidebar Fixnav-->
</nav>
