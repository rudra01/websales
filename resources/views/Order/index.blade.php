
<x-app-layout>
    <slot >
        <!-- Main Content -->
		<div class="hk-pg-wrapper pb-0">
			<!-- Page Body -->
			<div class="hk-pg-body py-0">
				<div class="contactapp-wrap">
					@include('includes.innerpagesidebar-order')
					<div class="contactapp-content">
						<div class="contactapp-detail-wrap">
							<header class="contact-header">
								<div class="d-flex align-items-center">
									<div class="dropdown">
										<a class="contactapp-title  link-dark" href="#"  >
											<h1>Orders</h1>
										</a>
									</div>
									<div class="dropdown ms-3">
										<button class="btn btn-sm btn-outline-secondary flex-shrink-0  d-lg-inline-block d-none" data-bs-toggle="modal" data-bs-target="#create_new_Order" >Create New</button>
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
													<th>Order From(Company Name)</th>
													<th>Product Name</th>
													<th>Quantity</th>
													<th>Actual Amount</th>
													<th>Tax</th>
													<th>Total Amount</th>
													<th>Date Created</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
                                                @foreach ($Orders as $order)
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
																<span class="d-block text-high-em">{{$order->venderuser->name?? 'No Vender'}}</span>
															</div>
														</div>
													</td>
													<td class="text-truncate">{{$order->product->name}}</td>
													<td class="text-truncate">{{$order->quantity}}</td>
													<td class="text-truncate">{{$order->actualAmount}}</td>
													<td>

                                                        <span class="badge badge-soft-violet my-1  me-2">{{$order->taxAmount }}</span>

                                                    </td>
													<td>{{$z->total_amount }}</td>

													<td>{{$order->created_at->format('m/d/Y')}}</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="d-flex">
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="/Order/{{$order->id}}"><span class="icon"><span class="feather-icon"><i data-feather="edit"></i></span></span></a>
															</div>

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
						<!-- Model Body -->
                        @include('includes.innermodel')

                        <!-- Create New Order -->
                        <div id="create_new_Order" class="modal fade add-new-contact" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <h5 class="mb-5">Create New Order</h5>
                                        <form id="createorderform" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row gx-3">

                                                <div class="col-sm-12 form-group">
                                                    <label class="form-label">Company Name(Order From)</label>
                                                        {{-- <input class="form-control" type="text" name="Cname" required /> --}}
                                                    <select class="form-control" name='company'>
                                                        <option selected="">---</option>
                                                        @if (count($vendors))
                                                            @foreach ($vendors as $vendor)
                                                                <option value="{{$vendor->id}}" >{{$vendor->Company_Name}}</option>
                                                            @endforeach
                                                        @else
                                                        <option >No Venders Found!!</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="col-sm-12 form-group">
                                                    <label class="form-label">Product Name</label>
                                                        <select class="form-control" name='product' id="product">
                                                            <option selected="" >---</option>
                                                            @if (count($products))
                                                                @foreach ($products as $product)
                                                                    <option value="{{$product->id}}" >{{$product->name}}</option>
                                                                @endforeach
                                                            @else
                                                            <option >No Product Found!!</option>
                                                            @endif
                                                        </select>
                                                </div>
                                                <div class="col-sm-12 form-group">
                                                    <label class="form-label">Quantity</label>
                                                    <input class="form-control" type="number" name="Quantity" required />
                                                </div>
                                                <div class="col-sm-12 form-group">
                                                    <label class="form-label">Sales Discount</label>
                                                    <input class="form-control" type="number" name="salediscount" value="0" />
                                                </div>
                                            </div>
                                            <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Tax</span></div>
                                            <div class="row gx-3">
                                                <div class="col-sm-6 form-group">
                                                    <label class="form-label">TAX</label>
                                                    <select class="form-control" name="tax" id="tax">
                                                        <option selected="">---</option>
                                                        <option value="1">Zero-rated(0%)</option>
                                                        <option value="2">GST(5%)</option>
                                                        <option value="3">Exempt(0%)</option>
                                                        <option value="4">Out of Scope(0%)</option>
                                                        <option value="5">HST(13%)</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Tax Amount</label>
                                                        <input class="form-control" type="number" name="tex_amount" disabled />
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Total Amount</label>
                                                        <input class="form-control" type="number" name="total_amount"  disabled />
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer align-items-center">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                                        <button type="submit"  value="Submit" class="btn btn-primary" >Order Now</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- / New Order -->





                        <!-- end -->
					</div>
				</div>
			</div>
			<!-- /Page Body -->
		</div>
		<!-- /Main Content -->
    </slot>

</x-app-layout>


