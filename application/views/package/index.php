<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                            <div class="col-md-2">
                                <strong class="card-title ">Package</strong>
                            </div>    
                            <div class="col-md-10">
                                <a href="<?php echo site_url('Package/Add') ?>"><button type="button" class="btn btn-outline-success pull-right"><i class="fa fa-plus"></i>&nbsp; Add</button></a>
                                
                            </div>
                            <div class="col-md-12">
                                <br>
                                 <table class="table-striped" id="adminUserTable">
                                    <thead>

                                      <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($data['package'] as $item){ ?>
                                      <tr>
                                        <td><?php echo $item->name; ?></td>
                                        <td><?php echo $item->price; ?></td>
                                        <td><?php echo $item->start_time; ?></td>
                                        <td><?php echo $item->end_time; ?></td>
                                        <td>
                                            <a href="<?php echo site_url('Package/delete?id='.$item->id); ?>"><span><i class="fa fa-trash"></i></span></a></td>                          
                                      </tr>
                                        <?php } ?>
                                     
                                    </tbody>
                                  </table>                                
                            </div>

                        </div>
                       
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    
$(document).ready(function() {
    $('#adminUserTable').DataTable();
} );

</script>        