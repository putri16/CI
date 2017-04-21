<style>
		   h3{
			  text-align:center; }
		   table { 
			  border-collapse:collapse;
			  border-spacing:0;     
			  font-family:Arial, sans-serif;
			  font-size:16px;
			  padding-left:300px;
			  margin:auto; }
		   table th {
			  font-weight:bold;
			  padding:10px;
			  color:#fff;
			  background-color:#2A72BA;
			  border-top:1px black solid;
			  border-bottom:1px black solid;}
		   table td {
			  padding:10px;
			  border-top:1px black solid;
			  border-bottom:1px black solid;
			  text-align:center; }         
		   tr:nth-child(even) {
			 background-color: #DFEBF8; }
			 #logout {
		 float:right;
		 padding:5px;
		 border:dashed 1px gray
		}
		</style><br><br>
		<CENTER><h1>LIST BERITA</h1></CENTER>
		<br><table data-toggle="table" data-url= 
				<table border=1 cellpadding=5>
								<tr>
									<td>Nomor</td>
									<td>Title</td>
									<td>Content</td>
									<td>Category</td>
									<td>Image</td>
									<td colspan="2 ">Aksi</td>
								</tr>
							
								<?php
									$no=0;
					foreach($show as $rowshow){
						$id =$rowshow['id'];
										$no++;
										echo "
											<tr>
												<td>$no</td>
												<td>".$rowshow['title']."</td>
												<td>".$rowshow['content']."</td>
												<td>".$rowshow['category']."</td>
												<td>".$rowshow['image']."</td>
												<td>
													<a href='http://localhost/CI/index.php/Home/edit_m/$id'><div class='btn btn-primary btn-md' type='submit'>Edit</div></a></td>
													<td><a href='http://localhost/CI/index.php/Home/hapus/$id'><div class='btn btn-primary btn-md' type='submit'>Hapus</div></a>
												</td>
											</tr>
										";
									}
								?>
							</tbody>
						</table><br><br>

						<center><a href="<?php echo base_url()?>home/tambah"><div class="btn btn-primary btn-md" type="submit" name="proses" >Tambah</div></a></center>
