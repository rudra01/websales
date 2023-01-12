
<x-app-layout>
    <slot >
        <!-- Main Content -->
		<div class="hk-pg-wrapper pb-0">
			<!-- Page Body -->
			<div class="hk-pg-body py-0">
				<div class="contactapp-wrap">
					@include('includes.productinnerpagesidebar')

					<div class="contactapp-content">
						<div class="contactapp-detail-wrap">
							<header class="contact-header">
								<div class="d-flex align-items-center">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb  mb-0">
											<li class="breadcrumb-item"><a href="{{route('products')}}">Products</a></li>
											<li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
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
									<div class="d-flex  flex-wrap justify-content-center">
										<div class="contact-info w-xxl-80 w-80" style="border-left:1px solid #eaeaea;">

											<div class="text-center mt-5">
												<div class="dropify-circle edit-img">
													<input type="file" id='saleprofileimg' name="profileimg" class="dropify-1" data-default-file={{url('/storage/Productimg/'.$product->Product_Image)}} />
												</div>
												<div class="cp-name text-truncate mt-3">{{$product->name}}</div>

											</div>
											<div class="card">
												<div class="card-header">
													<a href="#">Product Information</a>
													<button class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><span class="icon" data-bs-toggle="modal" data-bs-target="#editInfo"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></button>
												</div>
												<div class="card-body">
													<ul class="cp-info  product-ul">
														<li>
															<span>Product Name</span>
															<span>{{$product->name}}</span>
														</li>

														<li>
															<span>Product Code</span>
															<span>{{$product->Product_Code}}</span>
														</li>
														<li>
															<span>category</span>
															<span>{{$product->category}}</span>
														</li>

													</ul>
												</div>
											</div>
											<div class="separator-full"></div>
											<div class="card">
												<div class="card-header">
													<a href="#">Pricing Info</a>
													<button class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><span class="icon"  data-bs-toggle="modal" data-bs-target="#moreContact"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></button>
												</div>
												<div class="card-body">
													<ul class="cp-info product-ul">
														<li>
															<span>Purchasing_Price</span>
															<span>{{$product->Purchasing_Price}}</span>
														</li>
														<li>
															<span>Selling_Price</span>
															<span>{{$product->Selling_Price}}</span>
														</li>

														<li>
															<span>Sale_Commision</span>
															<span>{{$product->Sale_Commision}}%</span>
														</li>
                                                        <li>
															<span>Quantity</span>
															<span>{{$product->Quantity}}</span>
														</li>

													</ul>
												</div>
											</div>
											<div class="separator-full"></div>
											<div class="card">
												<div class="card-header">
													<a href="#">Status</a>
													<button class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" ><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></button>
												</div>
												<div class="card-body text-center">

													<span class="badge badge-soft-violet">
                                                        {{$product->status}}
                                                    </span>
													{{-- <span class="badge badge-soft-danger">Vendor</span> --}}
												</div>
											</div>
											<div class="separator-full"></div>

											<div class="card">
												<div class="card-header">
													<a href="#">Description</a>
													<button class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><span class="icon" data-bs-toggle="modal" data-bs-target="#addBio"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></button>
												</div>
												<div class="card-body text-center">
                                                    {{-- @if ($product->profile->Comment !== Null ) --}}

                                                    {{-- @else
                                                        <p>No Comment</p>
                                                    @endif --}}
                                                    {{$product->Des}}

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
																Deactivate Product
															</a>
														</li>
													</ul>
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
														<input class="form-control" type="text" value="" placeholder="First Name" name="name" />
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
														<input class="form-control" type="email" value="" placeholder="Email Id" name="emailid" />
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Phone</label>
														<input class="form-control" type="text" value="" placeholder="" name="phone" />
													</div>
												</div>
											</div>
											<div class="row gx-3">
												<div class="col-sm-12">
													<label class="form-label">Country</label>
													<div class="form-group">
														<input class="form-control" type="text" value="" placeholder="" name="add1" />
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
														<input class="form-control" type="date" value="" placeholder="First Name" name="name1" />
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Address</label>
														<input class="form-control" type="text" value="" placeholder="Last Name" name="lastname1" />
													</div>
												</div>
											</div>
											<div class="row gx-3">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">City</label>
														<input class="form-control" type="email" value="" placeholder="Email Id" name="emailid1" />
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">State</label>
														<input class="form-control" type="text" value="" placeholder="Phone No" name="birthday1"/>
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
										<h5 class="mb-5">Edit {{$product->name}}</h5>
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


