
<x-app-layout>
    <slot >
        <!-- Main Content -->
		<div class="hk-pg-wrapper pb-0">
			<!-- Page Body -->
			<div class="hk-pg-body py-0">
				<div class="contactapp-wrap">
					@include('includes.innerpagesidebar')
					<div class="contactapp-content">
						<div class="contactapp-detail-wrap">
							<header class="contact-header">
								<div class="d-flex align-items-center">
									<div class="dropdown">
										<a class="contactapp-title  link-dark" href="#"  >
											<h1>Archive Warehouse</h1>
										</a>
									</div>
									<div class="dropdown ms-3">
									</div>
								</div>
								<div class="contact-options-wrap">

									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none Refresh" href="#" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i data-feather="refresh-cw"></i></span></span></a>
									<div class="v-separator d-lg-block d-none"></div>
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none" href="#" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Collapse">
										<span class="icon">
											<span class="feather-icon"><i data-feather="chevron-up"></i></span>
											<span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
										</span>
									</a>
								</div>
								<div class="hk-sidebar-togglable"></div>
							</header>
							<div class="contact-body">
								<div data-simplebar class="nicescroll-bar">
									<div class="collapse" id="collapseQuick">
										<div class="quick-access-form-wrap">
											<form class="quick-access-form border">
												<div class="row gx-3">
													<div class="col-xxl-10">
														<div class="position-relative">
															<div class="dropify-square">
																<input type="file"  class="dropify-1"/>
															</div>
															<div class="col-md-12">
																<div class="row gx-3">
																	<div class="col-lg-4">
																		<div class="form-group">
																			<input class="form-control" placeholder="Name*" type="text">
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<div class="form-group">
																			<input class="form-control" placeholder="Email Id*" value="" type="text">
																		</div>
																		<div class="form-group">
																			<input class="form-control" placeholder="Phone" value="" type="text">
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<div class="form-group">
																			<input class="form-control"  placeholder="Department" value="" type="text">
																		</div>
																		<div class="form-group">
																			<select id="input_tags" class="form-control" multiple="multiple">
																				<option selected="selected">Collaborator</option>
																				<option>Designer</option>
																				<option selected="selected">Developer</option>
																			</select>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xxl-2">
														<div class="form-group">
															<button data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"  class="btn btn-block btn-primary ">Create New
															</button>
														</div>
														<div class="form-group">
															<button data-bs-toggle="collapse" disabled  data-bs-target="#collapseExample" aria-expanded="false"  class="btn btn-block btn-secondary">Discard
															</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="contact-list-view">
										<table id="" class="table display nowrap w-100 mb-5">
											<thead>
												<tr>
													<th><span class="form-check mb-0">
														<input type="checkbox" class="form-check-input check-select-all" id="customCheck1">
														<label class="form-check-label" for="customCheck1"></label>
													</span></th>

													<th>Name</th>
													<th>Email Address</th>
													<th>Phone</th>
													<th>Status</th>
													{{-- <th>Labels</th> --}}
													<th>Date Created</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
                                                @foreach ($sales as $sale)
                                                    @if($sale->profile->Status == 'Deactive')
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="contact-star marked"><span class="feather-icon"><i data-feather="star"></i></span></span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="media align-items-center">
                                                                    <div class="media-head me-2">
                                                                        <div class="avatar avatar-xs avatar-rounded">
                                                                            <img src="dist/img/avatar1.jpg" alt="user" class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <span class="d-block text-high-em">{{$sale->name}}</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-truncate">{{$sale->email}}</td>
                                                            <td>{{$sale->profile->Phone ?? 'Phone no' }}</td>
                                                            <td>

                                                                <span class="badge badge-soft-violet my-1  me-2">{{$sale->profile->Status ?? 'No Status' }}</span>

                                                            </td>

                                                            <td>{{$sale->created_at->format('m/d/Y')}}</td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="d-flex">
                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="/Salesman/{{$sale->id}}"><span class="icon"><span class="feather-icon"><i data-feather="edit"></i></span></span></a>
                                                                    </div>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endif

                                                @endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- Model Body -->
                        @include('includes.innermodel')
                        <!-- end -->
					</div>
				</div>
			</div>
			<!-- /Page Body -->
		</div>
		<!-- /Main Content -->
    </slot>

</x-app-layout>


