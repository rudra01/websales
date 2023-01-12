

<!-- Edit Products -->
<div id="add_new_Product" class="modal fade add-new-contact" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5 class="mb-5">Create New Product</h5>
                <form id="createproductform" enctype="multipart/form-data">
                    @csrf
                    <div class="row gx-3">
                        <div class="col-sm-2 form-group">
                            <div class="dropify-square">
                                <input type="file"  class="dropify-1" name="Product_Image" />
                            </div>
                        </div>
                        <div class="col-sm-10 form-group">
                            <textarea class="form-control mnh-100p" rows="4" placeholder="Add Description" name="dec"></textarea>
                        </div>
                    </div>
                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Product Info</span></div>
                    <div class="row gx-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Product Name</label>
                                <input class="form-control" type="text" name="name" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Product Code</label>
                                <input class="form-control" type="text" name="Product_Code" required />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Category</label>
                                <input class="form-control" type="text" name="category"  required />
                            </div>
                        </div>

                    </div>
                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Pricing Info</span></div>

                    <div class="row gx-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Purchasing Price</label>
                                {{-- <label class="form-label error danger">Password Must Be Same</label> --}}
                                <input class="form-control " type="number" id="Purchasing_Price" name='Purchasing_Price'  />
                             </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Selling Price</label>
                                <input class="form-control " type="number" id="Selling_Price" name='Selling_Price'  />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Quantity</label>
                                <input class="form-control" type="number" name="Quantity"  />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Sale Commision</label>
                                <input class="form-control" type="number" name="Sale_Commision" />
                            </div>
                        </div>
                    </div>





            </div>
            <div class="modal-footer align-items-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                <button type="submit"  value="Submit" class="btn btn-primary" >Create Now</button>
            </div>
        </form>
        </div>
    </div>
</div>





<!-- Edit Info -->
<div id="add_new_salesman" class="modal fade add-new-contact" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5 class="mb-5">Create New Salesman</h5>
                <form id="createsalesform" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="row gx-3">
                        <div class="col-sm-2 form-group">
                            <div class="dropify-square">
                                <input type="file"  class="dropify-1" name="profileimg" />
                            </div>
                        </div>
                        <div class="col-sm-10 form-group">
                            <textarea class="form-control mnh-100p" rows="4" placeholder="Add Comment" name="comment"></textarea>
                        </div>
                    </div> --}}
                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Portal Signup Info</span></div>
                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" name="uname" required />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="email" name="email"  required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                {{-- <label class="form-label error danger">Password Must Be Same</label> --}}
                                <input class="form-control pswd" type="password" id="pswd" name='password'  />
                             </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Confirm Password</label>
                                <input class="form-control conf_pswd" type="password" id="conf_pswd" name='confirm_password'  />
                                <label class="form-label error text-danger text-xs  passwordmust ept">**Password Must Be Same**</label>

                            </div>
                        </div>
                    </div>
                    {{-- <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Basic Info</span></div> --}}

                    {{-- <div class="row gx-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Date Of Birth</label>
                                <input class="form-control" type="date" name="date_of_birth" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Phone</label>
                                <input class="form-control" type="number" name="phone" />
                            </div>
                        </div>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input class="form-control" type="text" name="address" />

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="form-label">City</label>
                                <input class="form-control" type="text" name="city" />

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="form-label">State</label>
                                <input class="form-control" type="text" name="state" />

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="form-label">Country</label>
                                <input class="form-control" type="text" name="country" />
                            </div>
                        </div>
                    </div> --}}




            </div>
            <div class="modal-footer align-items-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                <button type="submit"  value="Submit" class="btn btn-primary" >Create Now</button>
            </div>
        </form>
        </div>
    </div>
</div>


<!-- Edit Vendor Info -->
<div id="add_new_Vendor" class="modal fade add-new-contact" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5 class="mb-5">Create New Vendor</h5>
                <form id="createvendorform" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="row gx-3">
                        <div class="col-sm-2 form-group">
                            <div class="dropify-square">
                                <input type="file"  class="dropify-1" name="profileimg" />
                            </div>
                        </div>
                        <div class="col-sm-10 form-group">
                            <textarea class="form-control mnh-100p" rows="4" placeholder="Add Comment" name="comment"></textarea>
                        </div>
                    </div> --}}
                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Portal Signup Info</span></div>
                    <div class="row gx-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Company Name</label>
                                <input class="form-control" type="text" name="Cname" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Representative Name</label>
                                <input class="form-control" type="text" name="uname" required />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="email" name="email"  required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                {{-- <label class="form-label error danger">Password Must Be Same</label> --}}
                                <input class="form-control pswd" type="password" id="pswdvendor" name='password'  />
                             </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Confirm Password</label>
                                <input class="form-control conf_pswd" type="password" id="conf_pswdvendor" name='confirm_password'  />
                                <label class="form-label error text-danger text-xs  passwordmust ept">**Password Must Be Same**</label>

                            </div>
                        </div>
                    </div>
                    {{-- <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Basic Info</span></div> --}}

                    {{-- <div class="row gx-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Date Of Birth</label>
                                <input class="form-control" type="date" name="date_of_birth" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Phone</label>
                                <input class="form-control" type="number" name="phone" />
                            </div>
                        </div>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input class="form-control" type="text" name="address" />

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="form-label">City</label>
                                <input class="form-control" type="text" name="city" />

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="form-label">State</label>
                                <input class="form-control" type="text" name="state" />

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="form-label">Country</label>
                                <input class="form-control" type="text" name="country" />
                            </div>
                        </div>
                    </div> --}}




            </div>
            <div class="modal-footer align-items-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                <button type="submit"  value="Submit" class="btn btn-primary" >Create Now</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- /Edit Info -->

<!-- Edit Warehouse Info -->
<div id="add_new_wearhouse" class="modal fade add-new-contact" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5 class="mb-5">Create New Warehouse</h5>
                <form id="createwearhouseform" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="row gx-3">
                        <div class="col-sm-2 form-group">
                            <div class="dropify-square">
                                <input type="file"  class="dropify-1" name="profileimg" />
                            </div>
                        </div>
                        <div class="col-sm-10 form-group">
                            <textarea class="form-control mnh-100p" rows="4" placeholder="Add Comment" name="comment"></textarea>
                        </div>
                    </div> --}}
                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Portal Signup Info</span></div>
                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" name="uname" required />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="email" name="email"  required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                {{-- <label class="form-label error danger">Password Must Be Same</label> --}}
                                <input class="form-control pswd" type="password" id="pswdwearhouse" name='password'  />
                             </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Confirm Password</label>
                                <input class="form-control conf_pswd" type="password" id="conf_pswdwearhouse" name='confirm_password'  />
                                <label class="form-label error text-danger text-xs  passwordmust ept">**Password Must Be Same**</label>

                            </div>
                        </div>
                    </div>
                    {{-- <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Basic Info</span></div> --}}

                    {{-- <div class="row gx-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Date Of Birth</label>
                                <input class="form-control" type="date" name="date_of_birth" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Phone</label>
                                <input class="form-control" type="number" name="phone" />
                            </div>
                        </div>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input class="form-control" type="text" name="address" />

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="form-label">City</label>
                                <input class="form-control" type="text" name="city" />

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="form-label">State</label>
                                <input class="form-control" type="text" name="state" />

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="form-label">Country</label>
                                <input class="form-control" type="text" name="country" />
                            </div>
                        </div>
                    </div> --}}




            </div>
            <div class="modal-footer align-items-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                <button type="submit"  value="Submit" class="btn btn-primary" >Create Now</button>
            </div>
        </form>
        </div>
    </div>
</div>


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
<div id="add_new_tag" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
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


