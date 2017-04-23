

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">List Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="input-group custom-search-form">
							<center><h3><h3></center>
				
                            </div>
                        </div><br>
						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						
                            <table width="100%" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
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
										<td>".$rowshow->category."</td>
                                        <td>
											<a href='#modalConfirm' data-toggle='modal' role='button' onclick='changevalue(".$rowshow->id_ca.")'><div class='btn btn-primary btn-md' type='submit'>Hapus</div></a>
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
				<div id="modalConfirm"  class="modal fade" role="dialog" aria-hidden="true">
			<?php echo form_open("http://localhost/CI/home/hapus_ca", ["id" => "formConfirm" ,"class" => "form-horizontal", "role" => "form"]); ?>
			<input type="hidden" name="hapus" id="hapus">
			<div class="modal-dialog" style="width:600px;height:300px" >
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
						<h4 class="modal-title">Konfirmasi Hapus</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<div class="col-md-12">
								Apakah Anda yakin menghapus kategori berita ini?
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div class="form-group">
							<label class="col-md-6 control-label"></label>
							<button type="submit" class="btn blue">HAPUS</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">BATAL</button>
						</div>
					</div>
				</div>
			</div>
		<?php echo form_close(); ?>
	</div>	

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
	function changevalue(id){
	var form = document.getElementById("hapus");
	form.value = id;
	}
    </script>

</body>

</html>
