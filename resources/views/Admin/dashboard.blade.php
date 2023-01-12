
    {{-- new contents --}}
    {{-- <div class="tab-pane fade show" id="tab_block_2">
        <div class="row ">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                <span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
                <div class="dash-widget-info">
                    <h3>112</h3>
                    <span>New Orders</span>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                <span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
                <div class="dash-widget-info">
                    <h3>44</h3>
                    <span>Monthly Revenue</span>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                <span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
                <div class="dash-widget-info">
                    <h3>37</h3>
                    <span>Return Request</span>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                <div class="dash-widget-info">
                    <h3>218</h3>
                    <span>Vendors</span>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 text-center">
                <div class="card">
                    <div class="card-body">
                    <h3 class="card-title">Total Revenue</h3>
                    <div id="bar-charts"></div>
                    </div>
                </div>
                </div>
                <div class="col-md-6 text-center">
                <div class="card">
                    <div class="card-body">
                    <h3 class="card-title">Sales Overview</h3>
                    <div id="line-charts"></div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
            <div class="card-group m-b-30">
                <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                    <div>
                        <span class="d-block">New Vendors</span>
                    </div>
                    <div>
                        <span class="text-success">+10%</span>
                    </div>
                    </div>
                    <h3 class="mb-3">10</h3>
                    <div class="progress mb-2" style="height: 5px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0">Overall Vendors 218</p>
                </div>
                </div>

                <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                    <div>
                        <span class="d-block">Earnings</span>
                    </div>
                    <div>
                        <span class="text-success">+12.5%</span>
                    </div>
                    </div>
                    <h3 class="mb-3">$1,42,300</h3>
                    <div class="progress mb-2" style="height: 5px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0">Previous Month <span class="text-muted">$1,15,852</span></p>
                </div>
                </div>

                <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                    <div>
                        <span class="d-block">Expenses</span>
                    </div>
                    <div>
                        <span class="text-danger">-2.8%</span>
                    </div>
                    </div>
                    <h3 class="mb-3">$8,500</h3>
                    <div class="progress mb-2" style="height: 5px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0">Previous Month <span class="text-muted">$7,500</span></p>
                </div>
                </div>

                <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                    <div>
                        <span class="d-block">Profit</span>
                    </div>
                    <div>
                        <span class="text-danger">-75%</span>
                    </div>
                    </div>
                    <h3 class="mb-3">$1,12,000</h3>
                    <div class="progress mb-2" style="height: 5px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0">Previous Month <span class="text-muted">$1,42,000</span></p>
                </div>
                </div>
            </div>
            </div>
        </div>

    </div> --}}




<!-- Main Content -->
<div class="hk-pg-wrapper">
    <div class="container-xxl">
        <!-- Page Header -->
        <div class="hk-pg-header pg-header-wth-tab pt-7">
            <div class="d-flex">
                <div class="d-flex flex-wrap justify-content-between flex-1">
                    <div class="mb-lg-0 mb-2 me-8">
                        <h1 class="pg-title">Welcome back {{Auth::user()->name}}</h1>
                    </div>
                    <div class="pg-header-action-wrap">
                        <div class="input-group w-300p">

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Page Header -->

        <!-- Page Body -->
        <div class="hk-pg-body">
            <div class="row">
                <div class="col-xxl-9 col-lg-8 col-md-7 mb-md-4 mb-3">
                    <div class="card card-border mb-0 h-100">
                        <div class="card-header card-header-action">
                            <h6>Revenue Overview</h6>
                            {{-- <div class="card-action-wrap">
                                <div class="btn-group d-lg-flex d-none" role="group" aria-label="Basic outlined example">
                                    <button type="button" class="btn btn-outline-light active">All</button>
                                    <button type="button" class="btn btn-outline-light">Sessions</button>
                                    <button type="button" class="btn btn-outline-light">Source</button>
                                    <button type="button" class="btn btn-outline-light">Referrals</button>
                                </div>
                                <select class="form-select d-lg-none d-flex">
                                    <option  selected="" value="1">All</option>
                                    <option value="2">Sessions</option>
                                    <option value="3">Source</option>
                                    <option value="4">Referrals</option>
                                </select>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <div class="d-inline-block">
                                    <span class="badge-status">
                                        <span class="badge bg-primary badge-indicator badge-indicator-nobdr"></span>
                                        <span class="badge-label">Direct</span>
                                    </span>
                                </div>
                                <div class="d-inline-block ms-3">
                                    <span class="badge-status">
                                        <span class="badge bg-primary-light-2 badge-indicator badge-indicator-nobdr"></span>
                                        <span class="badge-label">Organic search</span>
                                    </span>
                                </div>
                                <div class="d-inline-block ms-3">
                                    <span class="badge-status">
                                        <span class="badge bg-primary-light-4 badge-indicator badge-indicator-nobdr"></span>
                                        <span class="badge-label">Referral</span>
                                    </span>
                                </div>
                            </div>
                            <div id="column_chart_2"></div>
                            <div class="separator-full mt-5"></div>
                            <div class="flex-grow-1 ms-lg-3">
                                <div class="row">
                                    <div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3">
                                        <span class="d-block fw-medium fs-7">Users</span>
                                        <div class="d-flex align-items-center">
                                            <span class="d-block fs-4 fw-medium text-dark mb-0">8.8k</span>
                                            <span class="badge badge-sm badge-soft-success ms-1">
                                                <i class="bi bi-arrow-up"></i> 7.5%
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3">
                                        <span class="d-block fw-medium fs-7">Sessions</span>
                                        <div class="d-flex align-items-center">
                                            <span class="d-block fs-4 fw-medium text-dark mb-0">18.2k</span>
                                            <span class="badge badge-sm badge-soft-success ms-1">
                                                <i class="bi bi-arrow-up"></i> 7.2%
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3">
                                        <span class="d-block fw-medium fs-7">Bounce rate</span>
                                        <div class="d-flex align-items-center">
                                            <span class="d-block fs-4 fw-medium text-dark mb-0">46.2%</span>
                                            <span class="badge badge-sm badge-soft-danger ms-1">
                                                <i class="bi bi-arrow-down"></i> 0.2%
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-sm-6">
                                        <span class="d-block fw-medium fs-7">Session duration</span>
                                        <div class="d-flex align-items-center">
                                            <span class="d-block fs-4 fw-medium text-dark mb-0">4m 24s</span>
                                            <span class="badge badge-sm badge-soft-success ms-1">
                                                <i class="bi bi-arrow-up"></i> 10.8%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-5 mb-md-4 mb-3">
                    <div class="card card-border mb-0  h-100">
                        <div class="card-header card-header-action">
                            <h6>Total Revenue</h6>
                            {{-- <div class="card-action-wrap">
                                <a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div> --}}
                        </div>
                        <div class="card-body text-center">
                            <div id="radial_chart_2"></div>
                            <div class="d-inline-block mt-4">
                                <div class="mb-4">
                                    <span class="d-block badge-status lh-1">
                                        <span class="badge bg-primary badge-indicator badge-indicator-nobdr d-inline-block"></span>
                                        <span class="badge-label d-inline-block">From Salesmen</span>
                                    </span>
                                    <span class="d-block text-dark fs-5 fw-medium mb-0 mt-1">$243.50</span>
                                </div>
                                <div>
                                    <span class="badge-status lh-1">
                                        <span class="badge bg-primary-light-2 badge-indicator badge-indicator-nobdr"></span>
                                        <span class="badge-label">From Direct</span>
                                    </span>
                                    <span class="d-block text-dark fs-5 fw-medium mb-0 mt-1">$1469</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-md-4 mb-3">
                    <div class="card card-border mb-0 h-100">
                        <div class="card-header card-header-action">
                            <h6>Active users</h6>
                            {{-- <div class="card-action-wrap">
                                <button type="button" class="btn btn-outline-light">Real time chart</button>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div id="anim_map_2" class="h-300p"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="media align-items-center mb-3">
                                        <div class="media-head me-3">
                                            <div class="avatar avatar-xxs avatar-rounded">
                                                <img src="dist/fonts/flags/4x3/us.svg" alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="progress-lb-wrap">
                                                <label class="progress-label mb-0">United States</label>
                                                <div class="d-flex align-items-center">
                                                    <div class="progress progress-bar-rounded progress-bar-xs flex-1">
                                                        <div class="progress-bar bg-blue-dark-3 w-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="fs-8 mnw-30p ms-3">80%</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="media align-items-center mb-3">
                                        <div class="media-head me-3">
                                            <div class="avatar avatar-xxs avatar-rounded">
                                                <img src="dist/fonts/flags/4x3/in.svg" alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="progress-lb-wrap">
                                                <label class="progress-label mb-0">India</label>
                                                <div class="d-flex align-items-center">
                                                    <div class="progress progress-bar-rounded progress-bar-xs flex-1">
                                                        <div class="progress-bar bg-blue w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="fs-8 mnw-30p ms-3">50%</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="media align-items-center mb-3">
                                        <div class="media-head me-3">
                                            <div class="avatar avatar-xxs avatar-rounded">
                                                <img src="dist/fonts/flags/4x3/gb.svg" alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="progress-lb-wrap">
                                                <label class="progress-label mb-0">United Kingdom</label>
                                                <div class="d-flex align-items-center">
                                                    <div class="progress progress-bar-rounded progress-bar-xs flex-1">
                                                        <div class="progress-bar bg-primary w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="fs-8 mnw-30p ms-3">30%</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="media align-items-center mb-3">
                                        <div class="media-head me-3">
                                            <div class="avatar avatar-xxs avatar-rounded">
                                                <img src="dist/fonts/flags/4x3/au.svg" alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="progress-lb-wrap">
                                                <label class="progress-label mb-0">Australia</label>
                                                <div class="d-flex align-items-center">
                                                    <div class="progress progress-bar-rounded progress-bar-xs flex-1">
                                                        <div class="progress-bar bg-grey-dark-2 w-15" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="fs-8 mnw-30p ms-3">15%</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="media align-items-center">
                                        <div class="media-head me-3">
                                            <div class="avatar avatar-xxs avatar-rounded">
                                                <img src="dist/fonts/flags/4x3/ca.svg" alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="progress-lb-wrap">
                                                <label class="progress-label mb-0">Canada</label>
                                                <div class="d-flex align-items-center">
                                                    <div class="progress progress-bar-rounded progress-bar-xs flex-1">
                                                        <div class="progress-bar bg-grey w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="fs-8 mnw-30p ms-3">10%</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-md-4 mb-3">
                    <div class="card card-border mb-0 h-100">
                        <div class="card-header card-header-action">
                            <h6>New Vendors
                                <span class="badge badge-sm badge-light ms-1">{{count($users)}}</span>
                            </h6>
                            <div class="card-action-wrap">
                                {{-- <button class="btn btn-sm btn-outline-light"><span><span class="icon"><span class="feather-icon"><i data-feather="upload"></i></span></span><span class="btn-text">import</span></span></button> --}}
                                <button class="btn btn-sm btn-primary ms-3"><span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span><span class="btn-text">Add new</span></span></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="contact-list-view">
                                <table class="table display wrap w-100 mb-5" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th><span class="form-check fs-6 mb-0">
                                                <input type="checkbox" class="form-check-input check-select-all" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1"></label>
                                            </span></th>
                                            <th>Name</th>
                                            <th class="w-25">Usage</th>
                                            <th>Last Update</th>
                                            <th>Role</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="media-head me-2">
                                                            <div class="avatar avatar-xs avatar-rounded">
                                                                <img src="dist/img/user.png" alt="user" class="avatar-img">
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="text-high-em">{{$user->vendor->Company_Name ?? 'No Names'}}</div>
                                                            <div class="fs-7"><a href="#" class="table-link-text link-medium-em">UserName : {{$user->name}}</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress-lb-wrap">
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress-bar-rounded progress-bar-xs flex-1">
                                                                <div class="progress-bar bg-blue-dark-3 w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="fs-8 ms-3">70%</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{$user->created_at}}</td>
                                                <td>
                                                    <span class="badge badge-soft-secondary  my-1  me-2">{{$user->role}}</span>
                                                    {{-- <span class="badge badge-soft-secondary my-1  me-2">Finance</span> --}}
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="#"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>
                                                        {{-- <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="icon"><span class="feather-icon"><i data-feather="trash"></i></span></span></a> --}}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Body -->
    </div>

    <!-- Page Footer -->
    <div class="hk-footer">
        <footer class="container-xxl footer">
            <div class="row">
                <div class="col-xl-8">
                    <p class="footer-text"><span class="copy-text">Websales © 2022 All rights reserved.</span> <a href="#" class="" target="_blank">Privacy Policy</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">T&C</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">System Status</a></p>
                </div>
                <div class="col-xl-4">
                    <a href="#" class="footer-extr-link link-default"><span class="feather-icon"><i data-feather="external-link"></i></span><u>Design By Addicode</u></a>
                </div>
            </div>
        </footer>
    </div>
    <!-- / Page Footer -->

</div>
<!-- /Main Content -->
