<!--about start here-->
<div class="about">
	<div class="container">
		<div class="about-main">
			<h4><?php echo $data->category;?></h4>
			<div class="col-md-6 about-left">
				<img src="<?php echo base_url();?>uploads/<?php echo $data->image; ?>" alt="" class="img-responsive">
			</div>
			<div class="col-md-6 about-rigth">
				 <h3><?php echo $data->title;?></h3>
				 <p><?php echo $data->content;?> </p>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--about end here-->