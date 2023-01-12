
<x-app-layout>
    <slot >
        <!-- Main Content -->
		<div class="hk-pg-wrapper pb-0">
			<!-- Page Body -->
			<div class="hk-pg-body py-0">
				<div class="contactapp-wrap">
					@include('includes.innerpagesidebar')

                    {{-- side nav bar nav --}}

                    {{-- <nav class="contactapp-sidebar">
						<div data-simplebar class="nicescroll-bar">
							<div class="menu-content-wrap">
								<button type="button" class="btn btn-primary btn-rounded btn-block mb-4" data-bs-toggle="modal" data-bs-target="#add_new_contact">
									Add new contact
								</button>
								<div class="menu-group">
									<ul class="nav nav-light navbar-nav flex-column">
										<li class="nav-item active">
											<a class="nav-link" href="javascript:void(0);">
												<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="inbox"></i></span></span>
												<span class="nav-link-text">All Contacts</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">
												<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="star"></i></span></span>
												<span class="nav-link-text">Important</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">
												<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="archive"></i></span></span>
												<span class="nav-link-text">Archive</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">
												<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="edit"></i></span></span>
												<span class="nav-link-text">Pending</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">
												<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="trash-2"></i></span></span>
												<span class="nav-link-text">Deleted</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="separator separator-light"></div>
								<div class="menu-group">
									<ul class="nav nav-light navbar-nav flex-column">
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">
												<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="upload"></i></span></span>
												<span class="nav-link-text">Export</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">
												<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="download"></i></span></span>
												<span class="nav-link-text">Import</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">
												<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="printer"></i></span></span>
												<span class="nav-link-text">Print</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="separator separator-light"></div>
								<div class="d-flex align-items-center justify-content-between mb-2">
									<div class="title-sm text-primary text-primary mb-0">Labels</div>
									<a href="#" class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="modal" data-bs-target="#add_new_label"><span class="icon" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Add Label"><span class="feather-icon"><i data-feather="plus"></i></span></span></a>
								</div>
								<div class="menu-group">
									<ul class="nav nav-light navbar-nav flex-column">
										<li class="nav-item">
											<a class="nav-link link-badge-right" href="#">
												<span class="nav-link-text">Design</span>
												<span class="badge badge-pill badge-sm badge-soft-primary ms-auto">136</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link link-badge-right" href="#">
												<span class="nav-link-text">Development</span>
												<span class="badge badge-pill badge-sm badge-soft-primary ms-auto">2</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link link-badge-right" href="#">
												<span class="nav-link-text">Inventory</span>
												<span class="badge badge-pill badge-sm badge-soft-primary ms-auto">86</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link link-badge-right" href="#">
												<span class="nav-link-text">Human Resource</span>
												<span class="badge badge-pill badge-sm badge-soft-primary ms-auto">34</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="separator separator-light"></div>
								<div class="d-flex align-items-center justify-content-between mb-4">
									<div class="title-sm text-primary text-primary mb-0">Tags</div>
									<a href="#" class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="modal" data-bs-target="#add_new_tag"><span class="icon" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Add Tag"><span class="feather-icon"><i data-feather="plus"></i></span></span></a>
								</div>
								<div class="tag-cloud">
									<a href="#" class="badge badge-outline badge-light">Collaboration</a>
									<a href="#" class="badge badge-outline badge-light">React Developer</a>
									<a href="#" class="badge badge-outline badge-light">Angular Developer</a>
									<a href="#" class="badge badge-outline badge-light">promotion</a>
									<a href="#" class="badge badge-outline badge-light">Advertisement</a>
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
					</nav> --}}
                    {{-- End Side NavBar  --}}

					<div class="contactapp-content">
						<div class="contactapp-detail-wrap">
							<header class="contact-header">
								<div class="d-flex align-items-center">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb  mb-0">
											<li class="breadcrumb-item"><a href="{{route('vendor')}}">Vendors Profile</a></li>
											<li class="breadcrumb-item active" aria-current="page">{{$user->name}}</li>
										</ol>
									</nav>
								</div>
								<div class="contact-options-wrap">
									{{-- <div class="d-flex fs-7 align-items-center">1 of 30</div>
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover contactapp-info-toggle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Previous"><span class="icon"><span class="feather-icon"><i data-feather="chevron-left"></i></span></span></a>
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover contactapp-info-toggle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Next"><span class="icon"><span class="feather-icon"><i data-feather="chevron-right"></i></span></span></a> --}}
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Collapse">
										<span class="icon">
											<span class="feather-icon"><i data-feather="chevron-up"></i></span>
											<span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
										</span>
									</a>
								</div>
								<div class="hk-sidebar-togglable"></div>
							</header>
							<div class="contact-body contact-detail-body">
								<div data-simplebar class="nicescroll-bar">
									<div class="d-flex flex-xxl-nowrap flex-wrap">
										<div class="contact-info w-xxl-30 w-100">

											<div class="text-center mt-5">
												<div class="dropify-circle edit-img">
													<input type="file"  class="dropify-1" data-default-file={{asset("dist/img/avatar2.jpg")}} />
												</div>
												<div class="cp-name text-truncate mt-3">{{$user->name}}</div>

											</div>
											<div class="card">
												<div class="card-header">
													<a href="#">Profile Information</a>
													<button class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><span class="icon" data-bs-toggle="modal" data-bs-target="#editInfo"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></button>
												</div>
												<div class="card-body">
													<ul class="cp-info">
														<li>
															<span>Company Name</span>
															<span>{{$user->vendor->Company_Name}}</span>
														</li>
                                                        <li>
															<span>First Name</span>
															<span>{{$user->name}}</span>
														</li>

														<li>
															<span>Email</span>
															<span>{{$user->email}}</span>
														</li>
														<li>
															<span>Phone</span>
															<span>{{$user->profile->Phone ?? '-' }}</span>
														</li>
														<li>
															<span>Country</span>
															<span>{{$user->profile->Country ?? '-' }}</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="separator-full"></div>
											<div class="card">
												<div class="card-header">
													<a href="#">More Info</a>
													<button class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><span class="icon"  data-bs-toggle="modal" data-bs-target="#moreContact"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></button>
												</div>
												<div class="card-body">
													<ul class="cp-info">
														<li>
															<span>Designation</span>
															<span>{{$user->role}}</span>
														</li>
														<li>
															<span>Status</span>
															<span>{{$user->profile->Status ?? '-' }}</span>
														</li>

														<li>
															<span>Birthday</span>
															<span>{{$user->profile->DOB ?? '-' }}</span>
														</li>
														<li>
															<span>Address</span>
															<span>{{$user->profile->address ?? '-' }} {{$user->profile->City ?? '-'}} {{$user->profile->state ?? '-' }} </span>
														</li>
													</ul>
												</div>
											</div>
											<div class="separator-full"></div>
											<div class="card">
												<div class="card-header">
													<a href="#">Role</a>
													<button class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" ><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></button>
												</div>
												<div class="card-body">

													<span class="badge badge-soft-violet">{{$user->role}}</span>
													{{-- <span class="badge badge-soft-danger">Vendor</span> --}}
												</div>
											</div>
											<div class="separator-full"></div>

											<div class="card">
												<div class="card-header">
													<a href="#">Comment</a>
													<button class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><span class="icon" data-bs-toggle="modal" data-bs-target="#addBio"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></button>
												</div>
												<div class="card-body">
                                                    {{-- @if ($user->profile->Comment !== Null ) --}}
                                                    {{$user->profile->Comment ?? 'No Comment'}}
                                                    {{-- @else
                                                        <p>No Comment</p>
                                                    @endif --}}

												</div>
											</div>
											<div class="separator-full"></div>
											<div class="card">
												<div class="card-header">
													<a href="#">Settings</a>
												</div>
												<div class="card-body">
													<ul class="cp-action">

														<li>
															<a href="javascript:void(0);" class="link-danger">
																<span class="cp-icon-wrap"><span class="feather-icon"><i data-feather="trash"></i></span></span>
																Deactivate Profile
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="contact-more-info">
											<ul class="nav nav-tabs nav-line nav-icon nav-light">
												<li class="nav-item">
													<a class="nav-link active" data-bs-toggle="tab" href="#tab_summery">
														<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="zap"></i></span></span>
														<span class="nav-link-text">Notification</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#Vendors">
														<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="activity"></i></span></span>
														<span class="nav-link-text">Vendors</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#">
														<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="dollar-sign"></i></span></span>
														<span class="nav-link-text">Commition</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#">
														<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="shield"></i></span></span>
														<span class="nav-link-text">Sales</span>
													</a>
												</li>
											</ul>
											<div class="tab-content mt-7">
												<div class="tab-pane fade show active" id="tab_summery">
													<form>
														<div class="row">
															<div class="col-md-12 form-group">
																<div class="form-label-group">
																	<label>Write a Notification</label>
																	<small class="text-muted">1200</small>
																</div>
																<textarea class="form-control" rows="8" placeholder="Write an Notification"></textarea>
															</div>
														</div>
														<button class="btn btn-outline-light mt-2">Add Notification</button>
													</form>
                                                    <div class="clearfix"></div>
                                                    <div class="activity-wrap mt-7">
                                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                                            <div class="title-lg mb-0">Notifications</div>

                                                        </div>
                                                        <div class="title-sm text-primary mb-3">June 24</div>
                                                        <ul class="activity-thread">
                                                            <li>
                                                                <div class="media">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-icon avatar-sm avatar-primary avatar-rounded">
                                                                            <span class="initial-wrap"><span class="feather-icon"><i data-feather="mail"></i></span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div>
                                                                            <div class="activity-text">You sent <span class="text-dark text-capitalize">1 message</span> to the contact.</div>
                                                                            <div class="activity-time">10.00 pm</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="media">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-sm avatar-soft-danger avatar-rounded">
                                                                            <span class="initial-wrap">M</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div>
                                                                            <div class="activity-text"><span class="text-dark text-capitalize">Morgan Freeman</span> as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled.</div>
                                                                            <div class="activity-time">10.00 pm</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="media">
                                                                    <div class="media-head">
                                                                        <div class="avatar  avatar-icon avatar-sm avatar-info avatar-rounded">
                                                                            <span class="initial-wrap"><span class="feather-icon"><i data-feather="shield"></i></span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div>
                                                                            <div class="activity-text">Your deal value <span class="text-dark">$208.15</span> is paid through PayU Money online on <span class="text-dark">02.12.18</span> at <span class="text-dark">15:30, Monday</span></div>
                                                                            <div class="activity-time">10.00 pm</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="title-sm text-primary mt-5 mb-3">June 25</div>
                                                        <ul class="activity-thread">
                                                            <li>
                                                                <div class="media">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-sm avatar-soft-danger avatar-rounded">
                                                                            <span class="initial-wrap">M</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div>
                                                                            <div class="activity-text"><span class="text-dark">Morgan Freeman</span> responded to your appointment schedule question. </div>
                                                                            <div class="activity-time">10.00 pm</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
												</div>

                                                <div class="tab-pane fade " id="Vendors">
                                                    <div class="contact-list-view">
                                                        <table id="" class="table display nowrap w-100 mb-5">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Email Address</th>
                                                                    <th>Phone</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($Vendors as $vendor)
                                                                <tr>
                                                                    <td>
                                                                        <div class="media align-items-center">
                                                                            <div class="media-head me-2">
                                                                                <div class="avatar avatar-xs avatar-rounded">
                                                                                    <img src={{asset('dist/img/avatar1.jpg')}} alt="user" class="avatar-img">
                                                                                </div>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <span class="d-block text-high-em">{{$vendor->name}}</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-truncate">{{$vendor->email}}</td>
                                                                    <td>928888888</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="clearfix"></div>
												</div>
											</div>


										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Profile Information -->
						<div class="modal fade" id="editInfo" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h6 class="modal-title" >Profile Information</h6>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>
									<div class="modal-body">
										<form>
											<div class="row gx-3">
												<div class="col-sm-12">
													<div class="form-group">
														<label class="form-label">Name</label>
														<input class="form-control" type="text" value="{{$user->name}}" placeholder="First Name" name="name" />
													</div>
												</div>
												{{-- <div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Last Name</label>
														<input class="form-control" type="text" value="Shane" placeholder="Last Name" name="lastname" />
													</div>
												</div> --}}
											</div>
											<div class="row gx-3">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Email ID</label>
														<input class="form-control" type="email" value="{{$user->name}}" placeholder="Email Id" name="emailid" />
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Phone</label>
														<input class="form-control" type="text" value="{{$user->profile->Phone ?? '-'}}" placeholder="" name="phone" />
													</div>
												</div>
											</div>
											<div class="row gx-3">
												<div class="col-sm-12">
													<label class="form-label">Country</label>
													<div class="form-group">
														<input class="form-control" type="text" value="{{$user->profile->Country ?? '-'}}" placeholder="" name="add1" />
													</div>

												</div>
											</div>
										</form>
									</div>
									<div class="modal-footer align-items-center">
										<button type="button" class="btn btn-secondary">Discard</button>
										<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
									</div>
								</div>
							</div>
						</div>
						<!-- /Profile Information -->

						<!-- More Info -->
						<div class="modal fade" id="moreContact" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h6 class="modal-title">Profile Information</h6>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>
									<div class="modal-body">
										<form>
											<div class="row gx-3">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Birthday</label>
														<input class="form-control" type="date" value="{{$user->profile->DOB}}" placeholder="First Name" name="name1" />
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Address</label>
														<input class="form-control" type="text" value="{{$user->profile->address}}" placeholder="Last Name" name="lastname1" />
													</div>
												</div>
											</div>
											<div class="row gx-3">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">City</label>
														<input class="form-control" type="email" value="{{$user->profile->City}}" placeholder="Email Id" name="emailid1" />
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">State</label>
														<input class="form-control" type="text" value="{{$user->profile->state}}" placeholder="Phone No" name="birthday1"/>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="modal-footer align-items-center">
										<button type="button" class="btn btn-secondary">Discard</button>
										<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
									</div>
								</div>
							</div>
						</div>
						<!-- /More Info -->

						<!-- Add Tags -->
						<div class="modal fade" id="tagsInput" tabindex="-1" role="dialog" aria-hidden="true" >
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h6 class="modal-title">Tags</h6>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>
									<div class="modal-body">
										<form>
											<div class="row gx-3">
												<div class="col-sm-12">
													<div class="form-group">
														<select id="input_tags" class="form-control" multiple="multiple">
															<option selected="selected">Collaborator</option>
															<option>Designer</option>
															<option selected="selected">React Developer</option>
														</select>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="modal-footer align-items-center">
										<button type="button" class="btn btn-secondary">Discard</button>
										<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
									</div>
								</div>
							</div>
						</div>
						<!-- /Tags -->

						<!-- Add Bio -->
						<div class="modal fade" id="addBio" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h6 class="modal-title">Comments</h6>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>
									<div class="modal-body">
										<form>
											<div class="row gx-3">
												<div class="col-sm-12">
													<div class="form-group">
														<textarea class="form-control" rows="4" placeholder="Add Comments">
															{{$user->profile->Comment}}
														</textarea>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="modal-footer align-items-center">
										<button type="button" class="btn btn-secondary">Discard</button>
										<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
									</div>
								</div>
							</div>
						</div>
						<!-- /Add Bio -->

						<!-- Edit Info -->
						<div id="add_new_contact" class="modal fade add-new-contact" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-body">
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										<h5 class="mb-5">Edit {{$user->name}}</h5>
										<form>
											<div class="row gx-3">
												<div class="col-sm-2 form-group">
													<div class="dropify-square">
														<input type="file"  class="dropify-1"/>
													</div>
												</div>
												<div class="col-sm-10 form-group">
													<textarea class="form-control mnh-100p" rows="4" placeholder="Add Biography"></textarea>
												</div>
											</div>
											<div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Basic Info</span></div>
											<div class="row gx-3">
												<div class="col-sm-4">
													<div class="form-group">
														<label class="form-label">First Name</label>
														<input class="form-control" type="text"/>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label class="form-label">Middle Name</label>
														<input class="form-control" type="text"/>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label class="form-label">Last Name</label>
														<input class="form-control" type="text"/>
													</div>
												</div>
											</div>
											<div class="row gx-3">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Email ID</label>
														<input class="form-control" type="text"/>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Phone</label>
														<input class="form-control" type="text"/>
													</div>
												</div>
											</div>
											<div class="row gx-3">
												<div class="col-sm-4">
													<div class="form-group">
														<label class="form-label">City</label>
														<select class="form-select">
															<option selected="">--</option>
															<option value="1">One</option>
															<option value="2">Two</option>
															<option value="3">Three</option>
														</select>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label class="form-label">State</label>
														<select class="form-select">
															<option selected="">--</option>
															<option value="1">One</option>
															<option value="2">Two</option>
															<option value="3">Three</option>
														</select>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label class="form-label">Country</label>
														<select class="form-select">
															<option selected="">--</option>
															<option value="1">One</option>
															<option value="2">Two</option>
															<option value="3">Three</option>
														</select>
													</div>
												</div>
											</div>
											<div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Company Info</span></div>
											<div class="row gx-3">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Company Name</label>
														<input class="form-control" type="text"/>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Designation</label>
														<input class="form-control" type="text"/>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Website</label>
														<input class="form-control" type="text"/>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Work Phone</label>
														<input class="form-control" type="text"/>
													</div>
												</div>
											</div>
											<div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Additional Info</span></div>
											<div class="row gx-3">
												<div class="col-sm-12">
													<div class="form-group">
														<label class="form-label">Tags</label>
														<select id="input_tags_2" class="form-control" multiple="multiple">
														</select>
														<small class="form-text text-muted">
														   You can add upto 4 tags per contact
														</small>
													</div>
												</div>
											</div>
											<div class="row gx-3">
												<div class="col-sm-6">
													<div class="form-group">
														<input class="form-control" type="text" placeholder="Facebook"/>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<input class="form-control" type="text" placeholder="Twitter"/>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<input class="form-control" type="text" placeholder="LinkedIn"/>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<input class="form-control" type="text" placeholder="Gmail"/>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="modal-footer align-items-center">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
										<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Create Contact</button>
									</div>
								</div>
							</div>
						</div>
						<!-- /Edit Info -->

						<!-- Add Label -->
						<div id="add_new_label" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-body">
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										<h6 class="text-uppercase fw-bold mb-3">Add Label</h6>
										<form>
											<div class="row gx-3">
												<div class="col-sm-12">
													<div class="form-group">
														<input class="form-control" type="text" placeholder="Label Name"/>
													</div>
												</div>
											</div>
											<button type="button" class="btn btn-primary float-end" data-bs-dismiss="modal">Add</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- Add Label -->

						<!-- Add Tag -->
						<div id="add_new_tag" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 99">
							<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-body">
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										<h6 class="text-uppercase fw-bold mb-3">Add Tag</h6>
										<form>
											<div class="row gx-3">
												<div class="col-sm-12">
													<div class="form-group">
														<select id="input_tags_3" class="form-control" multiple="multiple">
															<option selected="selected">Collaborator</option>
															<option selected="selected">Designer</option>
															<option selected="selected">React Developer</option>
															<option selected="selected">Promotion</option>
															<option selected="selected">Advertisement</option>
														</select>
													</div>
												</div>
											</div>
											<button type="button" class="btn btn-primary float-end" data-bs-dismiss="modal">Add</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- Add Tag -->
					</div>
				</div>
			</div>
			<!-- /Page Body -->
		</div>
		<!-- /Main Content -->
    </slot>

</x-app-layout>


