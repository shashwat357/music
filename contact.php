
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
 	 <!-- /w3l-agile -->

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
							 	 <!-- /w3l-agile -->
						</div>
					<div class="clearfix"></div>
				</div>
				<!--notification menu end -->
				<!-- //header-ends -->
				
							<div id="page-wrapper">
							
								<div class="inner-content">
								<div class="tittle-head">
											<h3 class="tittle">Find Us </h3>
											<div class="clearfix"> </div>
										</div>
									<!-- /contact-->
									<div class="contact">
									 <div class="contact-left">
										<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Purwokerto,+Central+Java,+Indonesia&amp;aq=0&amp;oq=purwo&amp;sll=37.0625,-95.677068&amp;sspn=50.291089,104.238281&amp;ie=UTF8&amp;hq=&amp;hnear=Purwokerto,+Banyumas,+Central+Java,+Indonesia&amp;ll=-7.431391,109.24783&amp;spn=0.031022,0.050898&amp;t=m&amp;z=14&amp;output=embed"></iframe>

									</div>
									<div class="contact-right">
										<p class="phn">+9100 2481 5842</p>
										<p class="phn-bottom">4578 Marmora
												<span>Road, Glasgow D04 89GR</span></p>
										<p class="lom">Nullam ac urna velit. Pellentesque in arcu tortor. 
											Pellentesque nec est et elit varius pulvinar eget vitae sapien. 
											Aenean vehicula accumsan gravida.</p>
									</div>
									<div class="clearfix"> </div>
									<div class="contact-left1">
										<h3>Contact Us With <span>Any questions</span></h3>
										<div class="in-left">
										<form action="#" method="post">
												<p class="your-para">Your Name :</p>
														<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
											
														<p class="your-para">Your Mail :</p>
														<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
														<p class="your-para">Phone Number:</p>
														<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">

											</form>
										</div>
										<div class="in-right">
											<form>
												<textarea placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}" required=""></textarea>
												<input type="submit" value="Submit">
											</form>
										</div>
										<div class="clearfix"> </div>
									</div>
													<div class="contact-right1">
														<h3><span>Social Websites</span></h3>
														<h4>Nullam ac urna velit pellentesque in <label>arcu tortor 
															Pellentesque nec</label></h4>
														<p>Nullam ac urna velit. Pellentesque in arcu tortor. 
															Pellentesque nec est et elit varius pulvinar eget vitae sapien. 
															Aenean vehicula accumsan gravida. Cum sociis natoque penatibus
															et magnis dis parturient montes, nascetur ridiculus mus. Phasellus 
															et lectus in urna consequat consectetur ut eget risus.</p>
															 <ul class=" side-icons con">
																		<li><a class="fb" href="#"></a></li>
																		<li><a class="twitt" href="#"></a></li>
																		<li><a class="goog" href="#"></a></li>
																		<li><a class="drib" href="#"></a></li>
																   </ul>
													</div>
													<div class="clearfix"> </div>
											<!-- //contact -->
											 	 <!-- /wthree-agile -->
														</div>
								</div>
							<div class="clearfix"></div>
						<!--body wrapper end-->

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
 	 <!-- /wthree-agile -->
      <!-- main content end-->
   </section>
  
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>
</body>
</html>