
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Data Berita</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center><h3><h3></center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
								<?php echo form_open_multipart('http://localhost/CI/home/update');?>
                                        <input type="hidden" class="form-control" id="id" placeholder="id" name="id" value="<?php echo $data->id;?>" readonly>
    
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="title" value="<?php echo $data->title;?>">
                                        </div>
										<div class="form-group">
                                            <label>Content</label>
                                            <textarea class="form-control" name="content"><?php echo $data->content;?></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Category</label>
                                            <input class="form-control" name="category" value="<?php echo $data->category;?>" disabled ><br>
											
                                                <select class="form-control" name="id_ca"><?php
												echo "<option value='".$data->id_ca."' selected> Edit Kategory </option>";
												foreach($kategori as $r){echo "
												<option value=".$r->id_ca.">
												".$r->category."</option>";}?>
											  </select>
                                            
                                        </div>
										<div class="form-group">
                                            <label>Image</label>
											<a class="form-control" href='<?php echo base_url()?>uploads/<?php echo $data->image;?>' target='_blank'>lihat di sini</a>
											<br><input type="file" name="berkas" />
                                        </div>
										<button type="submit" class="btn btn-primary">Edit Berita</button>
                                        
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
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

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>asset/dist/js/sb-admin-2.js"></script>

</body>

</html>
