
<?php include "header.php";  ?>
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->
			<!--notification menu start -->
				<div class="menu-right">
					<div class="profile_details">		
						  <div class="col-md-4 serch-part">
								<div id="sb-search" class="sb-search">
									<form>
										<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
										<input class="sb-search-submit" type="submit" value="">
										<span class="sb-icon-search"> </span>
									</form>
								</div>
							</div>
							  <!-- search-scripts -->
									<script src="js/classie.js"></script>
									<script src="js/uisearch.js"></script>
										<script>
											new UISearch( document.getElementById( 'sb-search' ) );
										</script>
									<!-- //search-scripts -->
											 <!---->
											  <div class="col-md-4 player">
													<div class="audio-player">
														<audio id="audio-player"  controls="controls">
														<source src="media/Blue Browne.ogg" type="audio/ogg"></source>
																<source src="media/Blue Browne.mp3" type="audio/mpeg"></source>
																<source src="media/Georgia.ogg" type="audio/ogg"></source>
																<source src="media/Georgia.mp3" type="audio/mpeg"></source></audio>
														</div>
												<!---->
												<script type="text/javascript">
													$(function(){
													  $('#audio-player').mediaelementplayer({
														alwaysShowControls: true,
														features: ['playpause','progress','volume'],
														audioVolume: 'horizontal',
														iPadUseNativeControls: true,
														iPhoneUseNativeControls: true,
														AndroidUseNativeControls: true
													});
												 });
												</script>
												<!--audio-->
													<link rel="stylesheet" type="text/css" media="all" href="css/audio.css">
													<script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
													<!---->
 	 <!-- /agileits -->

												<!--//-->
												<ul class="next-top">
													<li><a class="ar" href="#"> <img src="images/arrow.png" alt=""/></a></li>
													<li><a class="ar2" href="#"><img src="images/arrow2.png" alt=""/></i></a></li>
														
											 </ul>	
											</div>
											<div class="col-md-4 login-pop">
												<div id="loginpop"><a href="#" id="loginButton"><span>Login <i class="arrow glyphicon glyphicon-chevron-right"></i></span></a><a class="top-sign" href="#" data-toggle="modal" data-target="#myModal5"><i class="fa fa-sign-in"></i></a>
														<div id="loginBox">                
														<form action="#" method="post" id="loginForm">
																	<fieldset id="body">
																		<fieldset>
																			  <label for="email">Email Address</label>
																			  <input type="text" name="email" id="email">
																		</fieldset>
																		<fieldset>
																				<label for="password">Password</label>
																				<input type="password" name="password" id="password">
																		 </fieldset>
																		<input type="submit" id="login" value="Sign in">
																		<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
																	</fieldset>
																<span><a href="#">Forgot your password?</a></span>
														 </form>
													</div>
												</div>

											</div>
										<div class="clearfix"> </div>
								</div>
							<!-------->
						</div>
					<div class="clearfix"></div>
				</div>
			<!--notification menu end -->
			<!-- //header-ends -->
 	 <!-- /agileinfo -->
		<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="inner-content">
				      <div class="music-browse">
					<!--albums-->
					<!-- pop-up-box --> 
							<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
							<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
							 <script>
									$(document).ready(function() {
									$('.popup-with-zoom-anim').magnificPopup({
										type: 'inline',
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: 'auto',
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: 'my-mfp-zoom-in'
									});
									});
							</script>		
					<!--//pop-up-box -->
					
						<div class="browse">
								<div class="tittle-head two">
									<h3 class="tittle">New Releses <span class="new">New</span></h3>
									<a href="browse.html"><h4 class="tittle third">See all</h4></a>
									<div class="clearfix"> </div>
								</div>

								<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v11.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="sing" href="single.html">Lootera</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v22.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Jaremy Cam</a>
								</div>
							<div class="col-md-3 browse-grid">
								<a  href="single.html"><img src="images/v33.jpg" title="allbum-name"></a>
								 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Selah</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v44.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Jim Brickman</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v1.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Adele21</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v55.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Party Night</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v6.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Ellie Goluding</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v66.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="sing" href="single.html">Diana</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v6.jpeg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Fifty Shades</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v2.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Shomlock</a>
								</div>
								<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v3.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Lootera</a>
								</div>
								<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v4.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Stuck on a feeling</a>
								</div>
											<div class="clearfix"> </div>
									</div>
					<!--//End-albums-->
					
					<div class="browse">
								<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v10.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="sing" href="single.html">Fifty Shades</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v9.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Alan Jackson</a>
								</div>
							<div class="col-md-3 browse-grid">
								<a  href="single.html"><img src="images/v77.jpg" title="allbum-name"></a>
								 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Cheristina aguilera</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v88.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Samsmith</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v1.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Adele21</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v99.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Big Duty</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v6.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Ellie Goluding</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v66.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="sing" href="single.html">Diana</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v6.jpeg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Fifty Shades</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v21.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Joe</a>
								</div>
								<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v3.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Lootera</a>
								</div>
								<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="images/v4.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Stuck on a feeling</a>
								</div>
											<div class="clearfix"> </div>
									</div>
					<!--//End-albums-->
						<!--//discover-view-->
							<!--//music-left-->
							</div>
							
						<!--body wrapper start-->
						<div class="review-slider">
								<div class="tittle-head">
									<h3 class="tittle">Featured Albums <span class="new"> New</span></h3>
									<div class="clearfix"> </div>
								</div>
								 <ul id="flexiselDemo1">
								<li>
									<a href="single.html"><img src="images/v1.jpg" alt=""/></a>
									<div class="slide-title"><h4>Adele21 </div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/v2.jpg" alt=""/></a>
									<div class="slide-title"><h4>Adele21</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/v21.jpg" alt=""/></a>
									<div class="slide-title"><h4>Joe</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/v4.jpg" alt=""/></a>
									<div class="slide-title"><h4>Stuck on a feeling</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/v5.jpg" alt=""/></a>
									<div class="slide-title"><h4>Ricky Martine </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/v6.jpg" alt=""/></a>
									<div class="slide-title"><h4>Ellie Goluding</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/v6.jpeg" alt=""/></a>
									<div class="slide-title"><h4>Fifty Shades </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
							</ul>
							<script type="text/javascript">
						$(window).load(function() {
							
						  $("#flexiselDemo1").flexisel({
								visibleItems: 5,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: false,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 2
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 3
									},
									tablet: { 
										changePoint:800,
										visibleItems: 4
									}
								}
							});
							});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
						</div>
								</div>
							<div class="clearfix"></div>
						<!--body wrapper end-->
 	 <!-- /w3l-agile-info -->
					</div>
			  <!--body wrapper end-->
			     <div class="footer two">
				<div class="footer-grid">
					<h3>Navigation</h3>
					<ul class="list1">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="radio.html">All Songs</a></li>
					  <li><a href="browse.html">Albums</a></li>
					  <li><a href="radio.html">New Collections</a></li>
					  <li><a href="blog.html">Blog</a></li>
					  <li><a href="contact.html">Contact</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Account</h3>
				    <ul class="list1">
					  <li><a href="#" data-toggle="modal" data-target="#myModal5">Your Account</a></li>
					  <li><a href="#">Personal information</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Discount</a></li>
					  <li><a href="#">Orders history</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Search Terms</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Support</h3>
					<ul class="list1">
					  <li><a href="contact.html">Site Map</a></li>
					  <li><a href="#">Search Terms</a></li>
					  <li><a href="#">Advanced Search</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="contact.html">Contact Us</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="#">Addresses</a></li>
				    </ul>
				  </div>
					  <div class="footer-grid">
						<h3>Newsletter</h3>
						<p class="footer_desc">Nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
						<div class="search_footer">
						 <form>
						   <input type="text" placeholder="Email...." required="">
						  <input type="submit" value="Submit">
						  </form>
						</div>
					 </div>
					 <div class="footer-grid footer-grid_last">
						<h3>About Us</h3>
						<p class="footer_desc">Diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat enim ad minim veniam,.</p>
						<p class="f_text">Phone:  &nbsp;&nbsp;&nbsp;00-250-2131</p>
						<p class="email">Email : &nbsp;<span><a href="mailto:mail@example.com">info(at)mailing.com</a></span></p>	
					 </div>
					 <div class="clearfix"> </div>
				</div>
			</div>
        <!--footer section start-->
			<footer>
			   <p>&copy 2016 Mosaic. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
			</footer>
        <!--footer section end-->
 	 <!-- /wthree-agile -->
      <!-- main content end-->
   </section>
   	 <!-- /wthree-agile -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>
</body>
</html>