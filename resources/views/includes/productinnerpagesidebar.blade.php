<nav class="contactapp-sidebar">
    <div data-simplebar class="nicescroll-bar">
        <div class="menu-content-wrap">
            <button type="button" class="btn btn-primary btn-rounded btn-block mb-4" data-bs-toggle="modal" data-bs-target="#add_new_Product">
                Add Products
            </button>
            <div class="menu-group">
                <ul class="nav nav-light navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products')}}">
                            <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="inbox"></i></span></span>
                            <span class="nav-link-text">All Products</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{route('ActiveProducts')}}">
                            <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="star"></i></span></span>
                            <span class="nav-link-text">Active Products </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('ArchiveProducts')}}">
                            <span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="archive"></i></span></span>
                            <span class="nav-link-text">Archive Products</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="separator separator-light"></div>


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
