<div class="hk-menu">
    <!-- Brand -->
    <div class="menu-header">
        <span>
            <a class="navbar-brand" href="/">
                <img class="brand-img img-fluid" src="{{ asset('dist/img/brand-sm.svg') }}" alt="brand" />
                <img class="brand-img img-fluid" src="{{ asset('dist/img/websales.svg') }}" alt="brand" width="100px" />
            </a>
            <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
                <span class="icon">
                    <span class="svg-icon fs-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="10" y1="12" x2="20" y2="12"></line>
                            <line x1="10" y1="12" x2="14" y2="16"></line>
                            <line x1="10" y1="12" x2="14" y2="8"></line>
                            <line x1="4" y1="4" x2="4" y2="20"></line>
                        </svg>
                    </span>
                </span>
            </button>
        </span>
    </div>
    <!-- /Brand -->

    <!-- Main Menu -->
    <div data-simplebar class="nicescroll-bar">
        <div class="menu-content-wrap">
            <div class="menu-group">
                <ul class="navbar-nav flex-column">
                    {{-- @if($currenturl == 'home') --}}
                        <li class="nav-item active">
                            {{-- @else
                        <li class="nav-item ">
                    @endif --}}


                        <a class="nav-link" href="/">
                            <span class="nav-icon-wrap">
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-template" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <rect x="4" y="4" width="16" height="4" rx="1" />
                                        <rect x="4" y="12" width="6" height="8" rx="1" />
                                        <line x1="14" y1="12" x2="20" y2="12" />
                                        <line x1="14" y1="16" x2="20" y2="16" />
                                        <line x1="14" y1="20" x2="20" y2="20" />
                                    </svg>
                                </span>
                            </span>
                            <span class="nav-link-text">Dashboard </span>
                            <span class="badge badge-sm badge-soft-pink ms-auto"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu-gap"></div>
            <div class="menu-group">
                <div class="nav-header">
                    <span>Apps</span>
                </div>
                <ul class="navbar-nav flex-column">
                    @auth

                    @if ( \Auth::user()->role == 'admin')


                    <li class="nav-item ">
                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_contact">
                            <span class="nav-icon-wrap">
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
                                        <line x1="13" y1="8" x2="15" y2="8" />
                                        <line x1="13" y1="12" x2="15" y2="12" />
                                    </svg>
                                </span>
                            </span>
                            <span class="nav-link-text">Sales Managers</span>
                        </a>
                        <ul id="dash_contact" class="nav flex-column collapse  nav-children">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('salesmanagers')}}"><span class="nav-link-text">Salesperson List</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('Activesalesprofile')}}"><span class="nav-link-text">Active </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('Archivesalesprofile')}}"><span class="nav-link-text">Archive</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Vendor">
                            <span class="nav-icon-wrap">
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
                                        <line x1="13" y1="8" x2="15" y2="8" />
                                        <line x1="13" y1="12" x2="15" y2="12" />
                                    </svg>
                                </span>
                            </span>
                            <span class="nav-link-text">Vendor</span>
                        </a>
                        <ul id="Vendor" class="nav flex-column collapse  nav-children">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{route('vendor')}}"><span class="nav-link-text">Vendor List</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('Activevendorprofile')}}"><span class="nav-link-text">Active </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('Archivevendorprofile')}}"><span class="nav-link-text">Archive</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Wearhouse">
                            <span class="nav-icon-wrap">
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
                                        <line x1="13" y1="8" x2="15" y2="8" />
                                        <line x1="13" y1="12" x2="15" y2="12" />
                                    </svg>
                                </span>
                            </span>
                            <span class="nav-link-text">Wearhouse</span>
                        </a>
                        <ul id="Wearhouse" class="nav flex-column collapse  nav-children">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{route('wearhouse')}}"><span class="nav-link-text">Wearhouse List</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('ActiveWearhouseprofile')}}"><span class="nav-link-text">Active </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('ArchiveWearhouseprofile')}}"><span class="nav-link-text">Archive</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>




                    @endif

                    @endauth

                    {{-- for warehouse --}}

                    @auth
                        @if (\Auth::user()->role == 'admin' || \Auth::user()->role == 'warehouse')


                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_chatpop">
                                <span class="nav-icon-wrap">
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" />
                                            <line x1="12" y1="12" x2="12" y2="12.01" />
                                            <line x1="8" y1="12" x2="8" y2="12.01" />
                                            <line x1="16" y1="12" x2="16" y2="12.01" />
                                        </svg>
                                    </span>
                                </span>
                                {{-- Products update and Delete --}}


                                <span class="nav-link-text">Products</span>

                            </a>
                            <ul id="dash_chatpop" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            {{-- <a class="nav-link" href="#"><span class="nav-link-text">Show Products</span></a> --}}
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('products')}}"><span class="nav-link-text">All Products</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('ActiveProducts')}}"><span class="nav-link-text">Active Products</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('ArchiveProducts')}}"><span class="nav-link-text">Archive Products</span></a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a class="nav-link" href="{{ route('category.create') }}"><span class="nav-link-text">Attribute Create</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('category.index') }}"><span class="nav-link-text">Attribute Update</span></a>
                                        </li> --}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    {{-- order shows nav --}}

                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_scrumboard3">
                            <span class="nav-icon-wrap position-relative">
                                {{-- <span class="badge badge-sm badge-primary badge-sm badge-pill position-top-end-overflow">3</span> --}}
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-digit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <rect x="9" y="12" width="3" height="5" rx="1" />
                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                        <path d="M15 12v5" />
                                    </svg>
                                </span>
                            </span>
                            <span class="nav-link-text">Order</span>
                        </a>
                        <ul id="dash_scrumboard3" class="nav flex-column collapse  nav-children">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('Orders')}}"><span class="nav-link-text">View Orders</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href=""><span class="nav-link-text">Return Orders</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Refund">
                            <span class="nav-icon-wrap position-relative">
                                {{-- <span class="badge badge-sm badge-primary badge-sm badge-pill position-top-end-overflow">3</span> --}}
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-kanban" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <line x1="4" y1="4" x2="10" y2="4" />
                                        <line x1="14" y1="4" x2="20" y2="4" />
                                        <rect x="4" y="8" width="6" height="12" rx="2" />
                                        <rect x="14" y="8" width="6" height="6" rx="2" />
                                    </svg>
                                </span>
                            </span>
                            <span class="nav-link-text">Refund</span>
                        </a>
                        <ul id="Refund" class="nav flex-column collapse  nav-children">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><span class="nav-link-text">View Refund</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><span class="nav-link-text">Complete Refunds</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @endauth
                    {{-- refund  --}}
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                <span class="nav-icon-wrap">
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <rect x="4" y="4" width="6" height="5" rx="2" />
                                            <rect x="4" y="13" width="6" height="7" rx="2" />
                                            <rect x="14" y="4" width="6" height="16" rx="2" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="nav-link-text">Notifications</span>
                            </a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Main Menu -->
</div>
{{-- <div id="hk_menu_backdrop" class="hk-menu-backdrop"></div> --}}
