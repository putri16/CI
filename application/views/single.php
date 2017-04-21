<div class="single">
	<div class="container">
		<center><h3><?php echo $data->title;?> ( <?php echo $data->category;?> ) </h3><br></center>
		<div class="single-main">
			<div class="col-md-8 single-top">
				<div class="col-md-5 sing-slid-grid">		
			        <div class="flexslider">
			        	
					        <div class="thumb-image"> <img src="<?php echo base_url();?>uploads/<?php echo $data->image; ?>" data-imagezoom="true" class="img-responsive"> </div>
					   <br><br>
				 	  <?php echo $data->content;?> 
			      </div>
		        </div>	
	            <div class="col-md-7 information">
						
						 
				       
				</div>
			  <div class="clearfix"> </div>
			 </div>
			
		  <div class="clearfix"> </div>
		  
		</div>
	</div>
</div>
<!--single page end here-->