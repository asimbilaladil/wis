<div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Add</strong> <small>Admin</small>
                            </div>
                            <form enctype="multipart/form-data" action="<?php echo site_url('Package/save') ?>" method="post">
                                
                            
                                <div class="card-body card-block">
                                    <div class="form-group col-md-12">
                                        <label class=" form-control-label col-md-12">Name</label>
                                        <div class="input-group col-md-4">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input  required name="name" class="form-control" type="text">
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
                                        <label class=" form-control-label col-md-12">Price</label>
                                        <div class="input-group col-md-4">
                                            <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                            <input required name="price" class="form-control" type="text">
                                        </div>
                                       
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class=" form-control-label col-md-12">Start Time</label>
                                        <div class="input-group col-md-4">
                                            <div class="input-group-addon"><i class="fa fa-pin"></i></div>
                                            <input  required name="startTime" class="form-control" type="time">
                                        </div>
                                        
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class=" form-control-label col-md-12">End Time</label>
                                        <div class="input-group col-md-4">
                                            <div class="input-group-addon"><i class="fa fa-pin"></i></div>
                                            <input  required name="endTime" class="form-control" type="time">
                                        </div>
                                        
                                    </div>


                                    <div class="form-group col-md-12">
                                        <label class=" form-control-label col-md-12">Language</label>
                                        <div class="input-group col-md-4">
                                            <div class="input-group-addon"><i class="fa fa-pin"></i></div>
                                            <input  required name="language" class="form-control" type="text">
                                        </div>
                                        
                                    </div>
                                   
                                    <div class="form-group col-md-12">
                                        <label class=" form-control-label col-md-12">Stops</label>
                                        <div class="input-group col-md-4">
                                            <div class="input-group-addon"><i class="fa fa-pin"></i></div>
                                            <input  required name="stops" class="form-control" type="text">
                                        </div>
                                        
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class=" form-control-label col-md-12">Places</label>
                                        <div class="input-group col-md-4">
                                            <div class="input-group-addon"><i class="fa fa-pin"></i></div>
                                            <input  required name="places" class="form-control" type="text">
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