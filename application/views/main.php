<!--contant start here-->
<div class="contant">
	<div class="container">
		<div class="contant-main">
			  <div class="col-md-4 content-grid-1 bg-one">
			  	<div class="content-grid-text">
			  		<h3>Trendy Hotels</h3>
			  		<p> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic </p>
			  		 <div class=" ser-grid">	
		   				<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-home"> </a>
		   			  </div>
			  		<div class="contant-bwn">
			  			<a href="single.html" class="button push">View</a>
			  		</div>
			  	</div> 
			  </div>
			  <div class="col-md-4 content-grid-1 bg-two">
			  	<div class="content-grid-text">
			  		<h3>Flight Booking</h3>
			  		<p> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the  leap into electronic </p>
			  		<div class=" ser-grid">	
		   				<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-plane"> </a>
		   			  </div>
			  		<div class="contant-bwn">
			  			<a href="single.html" class="button push">View</a>
			  		</div>
			  	</div>
			  </div>
			  <div class="col-md-4 content-grid-3 bg-three">
			  	<div class="content-grid-text">
			  		<h3>Customer Support</h3>
			  		<p> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the  leap into electronic </p>
			  		<div class=" ser-grid">	
		   				<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-cutlery"> </a>
		   			  </div>
			  		<div class="contant-bwn">
			  			<a href="single.html" class="button push">View</a>
			  		</div>
			  	</div>	  	
			  </div>
			<div class="clearfix"> </div>
			</div>
		</div>
</div>
<!--contact end here-->
<script>
		$(document).ready(function () {
		    size_li = $("#myList li").size();
		    x=2;
		    $('#myList li:lt('+x+')').show();
		    $('#loadMore').click(function () {
		        x= (x+1 <= size_li) ? x+1 : size_li;
		        $('#myList li:lt('+x+')').show();
		    });
		    $('#showLess').click(function () {
		        x=(x-1<0) ? 1 : x-1;
		        $('#myList li').not(':lt('+x+')').hide();
		    });
		});
	</script>

<!--feature grid start here-->
<div class="feature-grid">
	<div class="container">
		<div class="feature-grid-main">
			<h5>Featured Packages</h5>
		      <div class="load_more">	
					 <ul id="myList">
					    <!-- These are our grid blocks -->
					<li>
					<div class="l_g">
					<?php
					foreach($show as $rowshow){
						/*$data = $rowshow['title'];
						$image = $rowshow['image'];
						$id = $rowshow['id'];*/
					?>
						<div class="col-md-3 fea-grid-1">
							<div class="fea-grid-top">
								<a href="<?php echo "http://localhost/CI/Home/detail/$rowshow->id"?>"><img src="<?php echo "http://localhost/CI/uploads/$rowshow->image"; ?>" alt="" class="img-responsive"></a>
							</div>
							<div class="fea-grid-bottom">
								<h3><a href="<?php echo "http://localhost/CI/Home/detail/$rowshow->id"?>"><?php echo "".$rowshow->title."";?></a></h3>
								<div class="clearfix"> </div>
							</div>
						  <div class="clearfix"> </div>
						</div>
						<?php
						}
						?>
						<!--div class="col-md-3 fea-grid-1">
							<div class="fea-grid-top">
								<a href="single.html"><img src="<?php echo base_url();?>source/images/f2.jpg" alt="" class="img-responsive"></a>
							</div>
							<div class="fea-grid-bottom">
								<h3><a href="single.html">Island Tour</a></h3>
								<div class="fea-grid-left">
									<p>Package:</p>
								</div>
								<div class="fea-grid-right">
									<p>$120.00</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						  <div class="clearfix"> </div>
						</div>
						<div class="col-md-3 fea-grid-1">
							<div class="fea-grid-top">
								<a href="single.html"><img src="<?php echo base_url();?>source/images/f3.jpg" alt="" class="img-responsive"></a>
							</div>
							<div class="fea-grid-bottom">
								<h3><a href="single.html">Newyork Tour</a></h3>
								<div class="fea-grid-left">
									<p>Package:</p>
								</div>
								<div class="fea-grid-right">
									<p>$120.00</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						  <div class="clearfix"> </div>
						</div>
						<div class="col-md-3 fea-grid-1">
							<div class="fea-grid-top">
								<a href="single.html"><img src="<?php echo base_url();?>source/images/f4.jpg" alt="" class="img-responsive"></a>
							</div>
							<div class="fea-grid-bottom">
								<h3><a href="single.html">Niagara Falls</a></h3>
								<div class="fea-grid-left">
									<p>Package:</p>
								</div>
								<div class="fea-grid-right">
									<p>$120.00</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						  <div class="clearfix"> </div>
						</div>
						 <div class="clearfix"> </div>
					 </div>
				    </li>
					<!--li>
					 <div class="l_g">
					  <div class="col-md-3 fea-grid-1">
							<div class="fea-grid-top">
								<a href="single.html"><img src="<?php echo base_url();?>source/images/f5.jpg" alt="" class="img-responsive"></a>
							</div>
							<div class="fea-grid-bottom">
								<h3><a href="single.html">Thailand Tour</a></h3>
								<div class="fea-grid-left">
									<p>Package:</p>
								</div>
								<div class="fea-grid-right">
									<p>$120.00</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						  <div class="clearfix"> </div>
						</div>
						<div class="col-md-3 fea-grid-1">
							<div class="fea-grid-top">
								<a href="single.html"><img src="<?php echo base_url();?>source/images/f6.jpg" alt="" class="img-responsive"></a>
							</div>
							<div class="fea-grid-bottom">
								<h3><a href="single.html">Santorini Tour</a></h3>
								<div class="fea-grid-left">
									<p>Package:</p>
								</div>
								<div class="fea-grid-right">
									<p>$120.00</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						  <div class="clearfix"> </div>
						</div>
						<div class="col-md-3 fea-grid-1">
							<div class="fea-grid-top">
								<a href="single.html"><img src="<?php echo base_url();?>source/images/f7.jpg" alt="" class="img-responsive"></a>
							</div>
							<div class="fea-grid-bottom">
								<h3><a href="single.html">Hongkong Tour</a></h3>
								<div class="fea-grid-left">
									<p>Package:</p>
								</div>
								<div class="fea-grid-right">
									<p>$120.00</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						  <div class="clearfix"> </div>
						</div>
						<div class="col-md-3 fea-grid-1">
							<div class="fea-grid-top">
								<a href="single.html"><img src="<?php echo base_url();?>source/images/f8.jpg" alt="" class="img-responsive"></a>
							</div>
							<div class="fea-grid-bottom">
								<h3><a href="single.html">London Tour</a></h3>
								<div class="fea-grid-left">
									<p>Package:</p>
								</div>
								<div class="fea-grid-right">
									<p>$120.00</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						  <div class="clearfix"> </div>
						</div>
						 <div class="clearfix"> </div>
					</div>
				</li>				
				<!---->
				<!--li>
					<div class="l_g">
						<div class="col-md-3 fea-grid-1">
							<div class="fea-grid-top">
								<a href="single.html"><img src="<?php echo base_url();?>source/images/f1.jpg" alt="" class="img-responsive"></a>
							</div>
							<div class="fea-grid-bottom">
								<h3><a href="single.html">Sydney Tour</a></h3>
								<div class="fea-grid-left">
									<p>Package:</p>
								</div>
								<div class="fea-grid-right">
									<p>$120.00</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						  <div class="clearfix"> </div>
						</div>
						<div class="col-md-3 fea-grid-1">
							<div class="fea-grid-top">
								<a href="single.html"><img src="<?php echo base_url();?>source/images/f2.jpg" alt="" class="img-responsive"></a>
							</div>
							<div class="fea-grid-bottom">
								<h3><a href="single.html">Island Tour</a></h3>
								<div class="fea-grid-left">
									<p>Package:</p>
								</div>
								<div class="fea-grid-right">
									<p>$120.00</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						  <div class="clearfix"> </div>
						</div>
						<div class="col-md-3 fea-grid-1">
							<div class="fea-grid-top">
								<a href="single.html"><img src="<?php echo base_url();?>source/images/f3.jpg" alt="" class="img-responsive"></a>
							</div>
							<div class="fea-grid-bottom">
								<h3><a href="single.html">Newyork Tour</a></h3>
								<div class="fea-grid-left">
									<p>Package:</p>
								</div>
								<div class="fea-grid-right">
									<p>$120.00</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						  <div class="clearfix"> </div>
						</div>
						<div class="col-md-3 fea-grid-1">
							<div class="fea-grid-top">
								<a href="single.html"><img src="<?php echo base_url();?>source/images/f4.jpg" alt="" class="img-responsive"></a>
							</div>
							<div class="fea-grid-bottom">
								<h3><a href="single.html">Niagara Falls</a></h3>
								<div class="fea-grid-left">
									<p>Package:</p>
								</div>
								<div class="fea-grid-right">
									<p>$120.00</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						  <div class="clearfix"> </div>
						</div>
					</div>
				</li>
				<li>
					<div class="l_g">
						<div class="col-md-3 fea-grid-1">
							<div class="fea-grid-top">
								<a href="single.html"><img src="<?php echo base_url();?>sourceimages/f5.jpg" alt="" class="img-responsive"></a>
							</div>
							<div class="fea-grid-bottom">
								<h3><a href="single.html">Thailand Tour</a></h3>
								<div class="fea-grid-left">
									<p>Package:</p>
								</div>
								<div class="fea-grid-right">
									<p>$120.00</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						  <div class="clearfix"> </div>
						</div>
						<div class="col-md-3 fea-grid-1">
							<div class="fea-grid-top">
								<a href="single.html"><img src="<?php echo base_url();?>source/images/f6.jpg" alt="" class="img-responsive"></a>
							</div>
							<div class="fea-grid-bottom">
								<h3><a href="single.html">Santorini Tour</a></h3>
								<div class="fea-grid-left">
									<p>Package:</p>
								</div>
								<div class="fea-grid-right">
									<p>$120.00</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						  <div class="clearfix"> </div>
						</div>
						<div class="col-md-3 fea-grid-1">
							<div class="fea-grid-top">
								<a href="single.html"><img src="<?php echo base_url();?>source/images/f7.jpg" alt="" class="img-responsive"></a>
							</div>
							<div class="fea-grid-bottom">
								<h3><a href="single.html">Hongkong Tour</a></h3>
								<div class="fea-grid-left">
									<p>Package:</p>
								</div>
								<div class="fea-grid-right">
									<p>$120.00</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						  <div class="clearfix"> </div>
						</div>
						<div class="col-md-3 fea-grid-1">
							<div class="fea-grid-top">
								<a href="single.html"><img src="<?php echo base_url();?>source/images/f8.jpg" alt="" class="img-responsive"></a>
							</div>
							<div class="fea-grid-bottom">
								<h3><a href="single.html">London Tour</a></h3>
								<div class="fea-grid-left">
									<p>Package:</p>
								</div>
								<div class="fea-grid-right">
									<p>$120.00</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						  <div class="clearfix"> </div>
						</div>
					</div>
				</li><!--->
				<div class="clearfix"> </div>
			</ul>
	<div id="loadMore">Load More</div>
	 <div id="showLess">Show less</div>
		</div>
	</div>
</div>
</div>
<!--feature grid end here-->