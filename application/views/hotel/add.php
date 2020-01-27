<div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Add</strong> <small>Admin</small>
                            </div>
                            <form enctype="multipart/form-data" action="<?php echo site_url('Hotel/save') ?>" method="post">
                                
                            
                                <div class="card-body card-block">
                                    <div class="form-group col-md-12">
                                        <label class=" form-control-label col-md-12">Name</label>
                                        <div class="input-group col-md-4">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input  required name="name" class="form-control" type="text">
                                        </div>
                                       
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class=" form-control-label col-md-12">Category</label>
                                        <div class="input-group col-md-4">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                              <select name ="category" class="form-control" id="sel1">
                                                <option>Cafe</option>
                                                <option>Bar</option>
                                                <option>Pub</option>
                                                <option>German Food</option>
                                                <option>Hostels</option>
                                                <option>Hotel</option>
                                                <option>Department Store</option>
                                                <option>Shopping Center</option>
                                              </select>
                                        </div>

                                       
                                    </div>                                    
                                    <div class="form-group col-md-12">
                                        <label class=" form-control-label col-md-12">Description</label>
                                        <div class="input-group col-md-4">
                                            <div class="input-group-addon"><i class="fa fa-mail"></i></div>
                                            <textarea required name="description" class="form-control"></textarea>
                                                
                                        </div>
                                        
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class=" form-control-label col-md-12">Contact</label>
                                        <div class="input-group col-md-4">
                                            <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                            <input required name="contact" class="form-control" type="text">
                                        </div>
                                       
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class=" form-control-label col-md-12">Email</label>
                                        <div class="input-group col-md-4">
                                            <div class="input-group-addon"><i class="fa fa-pin"></i></div>
                                            <input  required name="email" class="form-control" type="email">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class=" form-control-label col-md-12">Address</label>
                                        <div class="input-group col-md-4">
                                            <div class="input-group-addon"><i class="fa fa-pin"></i></div>
                                            <input  required name="address" class="form-control" type="text">
                                        </div>
                                        
                                    </div>
                                   
                                    <div class="form-group col-md-12">
                                        <label class=" form-control-label col-md-12">Image</label>
                                        <div class="input-group col-md-4">
                                            <div class="input-group-addon"><i class="fa fa-pin"></i></div>
                                            <input  required name="image" class="form-control" type="file">
                                        </div>
                                        
                                    </div>
                                                                                                                                    
                                   <div class="form-group col-md-4">
                                      <button type="submit" class="btn btn-outline-primary btn-lg pull-right">Save</button>
                                    </div>
                                
                                </div>
                            </form>
                        </div>
                    </div>

                </div>


            </div><!-- .animated -->
        </div>