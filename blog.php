
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
									<form action="#" method="post">
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
					 <!-- /w3l-agile -->
				<!--notification menu end -->
				<!-- //header-ends -->
							<div id="page-wrapper">
								<div class="inner-content">
									<!-- /blog -->
									
										<div class="tittle-head">
											<h3 class="tittle">Our Blogs </h3>
											<div class="clearfix"> </div>
										</div>
										<!-- /music-left -->
										<div class="music-left">
											<div class="post-media">
												  <a href="single.html"><img src="images/33.jpg" class="img-responsive" alt="" /></a>
												  <div class="blog-text">
														<a href="single.html"><h3 class="h-t">Lorem Ipsum is simply dummy text</h3></a>
												      <div class="entry-meta">
															<h6 class="blg"><i class="fa fa-clock-o"></i> Jan 25, 2016</h6>
															<div class="icons">
																<a href="#"><i class="fa fa-user"></i> Admin</a>
																<a href="#"><i class="fa fa-comments-o"></i> 2</a>
																<a href="#"><i class="fa fa-thumbs-o-up"></i> 152</a>
																<a href="#"><i class="fa fa-thumbs-o-down"></i>  26</a>
															</div>
																<div class="clearfix"></div>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non semper, inquam; Quo modo autem philosophus loquitur? Duo Reges: constructio interrete. Dici enim nihil potest verius. Hic ambiguo ludimur. An hoc usque quaque, aliter in vita? Bonum incolumis acies: misera caecitas. Favorite</p>
													  </div>
												  </div>
											</div>
											
											<div class="post-media second">
												  <a href="single.html"><img src="images/11.jpg" class="img-responsive" alt="" /></a>
												  <div class="blog-text">
														<a href="single.html"><h3 class="h-t">Lorem Ipsum is simply dummy text</h3></a>
												      <div class="entry-meta">
															<h6 class="blg"><i class="fa fa-clock-o"></i> Feb 13, 2016</h6>
															<div class="icons">
																<a href="#"><i class="fa fa-user"></i> Admin</a>
																<a href="#"><i class="fa fa-comments-o"></i> 2</a>
																<a href="#"><i class="fa fa-thumbs-o-up"></i> 152</a>
																<a href="#"><i class="fa fa-thumbs-o-down"></i>  26</a>
															</div>
																<div class="clearfix"></div>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non semper, inquam; Quo modo autem philosophus loquitur? Duo Reges: constructio interrete. Dici enim nihil potest verius. Hic ambiguo ludimur. An hoc usque quaque, aliter in vita? Bonum incolumis acies: misera caecitas. Favorite</p>
													  </div>
												  </div>
											</div>
											
											<div class="post-media">
												  <a href="single.html"><img src="images/22.jpg" class="img-responsive" alt="" /></a>
												  <div class="blog-text">
														<a href="single.html"><h3 class="h-t">Lorem Ipsum is simply dummy text</h3></a>
												      <div class="entry-meta">
															<h6 class="blg"><i class="fa fa-clock-o"></i> Mach 30, 2016</h6>
															<div class="icons">
																<a href="#"><i class="fa fa-user"></i> Admin</a>
																<a href="#"><i class="fa fa-comments-o"></i> 2</a>
																<a href="#"><i class="fa fa-thumbs-o-up"></i> 152</a>
																<a href="#"><i class="fa fa-thumbs-o-down"></i>  26</a>
															</div>
																<div class="clearfix"></div>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non semper, inquam; Quo modo autem philosophus loquitur? Duo Reges: constructio interrete. Dici enim nihil potest verius. Hic ambiguo ludimur. An hoc usque quaque, aliter in vita? Bonum incolumis acies: misera caecitas. Favorite</p>
													  </div>
												  </div>
											</div>
											<!--start-blog-pagenate-->
												<div class="blog-pagenat">
													<ul>
														<li><a class="frist" href="#">Prev</a></li>
														<li><a href="#">1</a></li>
														<li><a href="#">2</a></li>
														<li><a href="#">3</a></li>
														<li><a href="#">4</a></li>
														<li><a href="#">5</a></li>
														<li><a class="last" href="#">Next</a></li>
														<div class="clearfix"> </div>
													</ul>
												</div>
												<!--//end-blog-pagenate-->

										</div>
										<!-- //music-left-->
										<!-- /music-right-->
										<div class="music-right">
											<!-- //widget -->
											  <div class="widget-side">
												<h4 class="widget-title">Recent Posts</h4>
													<ul>
														<li>
															<a href="single.html">Taylor Swift – Shake It Off</a>
															<span class="post-date">Feb 13, 2016</span>
														</li>
														<li>
															<a href="single.html">Love Me Like You Do – Ellie Goulding (Fifty Shades of Grey Soundtrack) HQ</a>
															<span class="post-date">Feb 14, 2016</span>
														</li>
														<li>
															<a href="single.html">Jessie J – Flashlight (from Pitch Perfect 2)</a>
															<span class="post-date">Feb 16, 2016</span>
														</li>
														<li>
															<a href="single.html">Sol – “Ain’t Gon’ Stop”</a>
															<span class="post-date">Feb 18, 2016</span>
														</li>
														<li>
															<a href="single.html">Eminem – No Love (Explicit Version) ft. Lil Wayne</a>
															<span class="post-date">Feb 19, 2016</span>
														</li>
													</ul>
												 </div>
												 <div class="widget-side second">
												<h4 class="widget-title">Top Songs</h4>
													<ul>
														<li>
															<div class="song-img">
															  <a href="single.html"><img src="images/play1.png" class="img-responsive" alt="" /></a>
															</div>
															<div class="song-text">
																<a href="single.html">Ellie-Goulding</a>
																<span class="post-date">Feb 13, 2016</span>
															</div>
															<div class="clearfix"></div>
														</li>
														<li>
															<div class="song-img">
															  <a href="single.html"><img src="images/play2.png" class="img-responsive" alt="" /></a>
															</div>
															<div class="song-text">
																<a href="single.html">Mark-Ronson-Uptown</a>
																<span class="post-date">Feb 14, 2016</span>
															</div>
															<div class="clearfix"></div>
														</li>
														<li>
															<div class="song-img">
															  <a href="single.html"><img src="images/play4.png" class="img-responsive" alt="" /></a>
															</div>
															<div class="song-text">
																<a href="single.html">Pharrell-Williams</a>
																<span class="post-date">Feb 16, 2016</span>
															</div>
															<div class="clearfix"></div>
														</li>
														<li>
															<div class="song-img">
															  <a href="single.html"><img src="images/play5.png" class="img-responsive" alt="" /></a>
															</div>
															<div class="song-text">
																<a href="single.html">Taylor Swift – Shake It Off</a>
																<span class="post-date">Feb 18, 2016</span>
															</div>
															<div class="clearfix"></div>
														</li>
														
													</ul>
												 </div>
											  <!-- //widget -->
										</div>
										<div class="clearfix"></div>
									<!-- //blog -->
								</div>
							<div class="clearfix"></div>
						<!--body wrapper end-->
	 <!-- /w3l-agile -->
					</div>
			  <!--body wrapper end-->
			       <div class="footer two">
				<div class="footer-grid">
					<h3>Navigation</h3>
					<ul class="list1">
					  <li><a href="index.html">Home</a></li>
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
		<!-- /wthree-agile -->
        <!--footer section start-->
			<footer>
			   <p>&copy 2016 Mosaic. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>
</body>
</html>