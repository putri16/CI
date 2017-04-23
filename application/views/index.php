

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">List Berita</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
						<form method="get" action="<?php echo base_url('home/cari'); ?>">
                            <div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Search Title..." name ="cari"><br>
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
				  </form>
                            </div>
                        </div><br>
						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						
                            <table width="100%" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th colspan="3">Aksi</th>
                                    </tr>
                                </thead>
								<?php
									$no=0;
										foreach($show as $rowshow){
											echo "
                                <tbody>
                                    <tr class='odd gradeX'>";
									
									
										$no++;
											echo "
										<td>$no</td>
										<td>".$rowshow->title."</td>
										<td>".$rowshow->category."</td>
                                        <td>
											<a href='http://localhost/CI/home/view/$rowshow->id'><input type='submit' class='btn btn-primary btn-md' value='Lihat'></a>
											<a href='http://localhost/CI/home/edit_m/$rowshow->id'><input type='submit' class='btn btn-primary btn-md' value='Edit'></a>
											</td>";
										echo "
                                        
                                    </tr>
                                    
                                </tbody>";
								}?>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	


    <!-- jQuery -->
    <script src="<?php echo base_url();?>asset/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>asset/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>asset/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>asset/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>asset/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>asset/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
	
    </script>

</body>

</html>
