<?php include "header.php";  ?>
 	 <!-- /w3layouts-agile -->
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
						</div>
					<div class="clearfix"></div>
				</div>
			<!--notification menu end -->
			<!-- //header-ends -->
 	 <!-- /w3l-agile -->
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
								<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								  <ul id="myTab" class="nav nav-tabs" role="tablist">
								   <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">English</a></li>
								   <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Punjabi</a></li>
								   <!-- <li role="presentation" class="dropdown"> -->
									 <!-- <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">English <span class="caret"></span></a> -->
										<!-- <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
										  <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Melody</a></li>
										  <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Classic</a></li>
										</ul> -->
								   </li>
								   <li role="presentation"><a href="#dropdown1" id="dropdown1-tab" role="tab" data-toggle="tab" aria-controls="dropdown1" aria-expanded="true">Hindi</a></li>
								    <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Bhajan</a></li>
								</ul>
								<div id="myTabContent" class="tab-content">
								  <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
									<div class="browse-inner">
								 	 <!-- /agileits -->
								
									<div class="col-md-3 artist-grid">
										<a  href="single.html"><img src="images/charlie22.jpg" title="allbum-name"></a>
										 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Charlie Puth</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/dua22.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Dua Lipa</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/zayn22.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Zayn Malik</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/alanw22.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Alan Walker</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/katy22.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Katy Perry</a>
										</div>
										<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/justin22.png" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
											<a class="art" href="single.html">Justin Beiber</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/eds2.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">ED Sherrran</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/arijit22.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
											<a class="art" href="single.html">Arijit Singh</a>
										</div>
											<div class="col-md-3 artist-grid">
													<a  href="single.html"><img src="images/jub32.jpg" title="allbum-name"></a>
													 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
														<a class="art" href="single.html">Jubin Nautiyal</a>
												</div>
											<div class="col-md-3 artist-grid">
													<a  href="single.html"><img src="images/ShreyaGhoshal2.jpg" title="allbum-name"></a>
													 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
														<a class="art" href="single.html">Shreya Ghoshal</a>
												</div>
												<div class="col-md-3 artist-grid">
													<a  href="single.html"><img src="images/yo2.jpg" title="allbum-name"></a>
													 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
														<a class="art" href="single.html">Yo Yo Honey Singh</a>
												</div>
											<div class="col-md-3 artist-grid">
												<a  href="single.html"><img src="images/ikka2.jpg" title="allbum-name"></a>
												 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.html">Ikka</a>
											</div>
											<div class="clearfix"> </div>
										</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
									   <div class="browse-inner">
								<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/atif2.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Atiff Aslan</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/armaan2.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Armaan Malik</a>
										</div>
										<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/diljit2.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Diljit Dosanjh</a>
										</div>
									<div class="col-md-3 artist-grid">
										<a  href="single.html"><img src="images/karan1.jpg" title="allbum-name"></a>
										 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
											<a class="art" href="single.html">Karan Aujala</a>
									</div>
								<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/ap1.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="art" href="single.html">A P Dhillon</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/akhil1.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Akhil</a>
								</div>
							<div class="col-md-3 artist-grid">
								<a  href="single.html"><img src="images/shubh1.jpg" title="allbum-name"></a>
								 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Shubh</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/ammy1.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Ammy Virk</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/jssi2.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Jassi Gill</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/Parmish2.jpeg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Parmish Verma</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/guru1.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Guru Randhawa</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/hardy2.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="art" href="single.html">Hardy Sandhu</a>
								</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/garry2.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Garry Sandhu</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/darsan2.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Darshan Rawal</a>
										</div>
										<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/badshah2.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Badshah</a>
										</div>
									<div class="col-md-3 artist-grid">
										<a  href="single.html"><img src="images/raft2.jpg" title="allbum-name"></a>
										 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
											<a class="art" href="single.html">Raftaar</a>
									</div>
									<div class="clearfix"> </div>
								</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
									  <div class="browse-inner">
								
								<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/arijit22.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="art" href="single.html">Arijit Singh</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/jub32.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Jubin Nautiyal</a>
								</div>
							<div class="col-md-3 artist-grid">
								<a  href="single.html"><img src="images/ShreyaGhoshal2.jpg" title="allbum-name"></a>
								 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Shreya Ghaushal</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/atif2.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Aatif Aslam</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/armaan2.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Armaan</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/sunidhi2.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Sunidhi Chauhan</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/sonu2.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Sonu Nigam</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/darsan2.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="art" href="single.html">Darshan Rawal</a>
								</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/arjun1.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Arjun Kanungo</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/ankit1.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Ankit Tiwaari</a>
										</div>
										<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/kk2.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a> 
												<a class="art" href="single.html">K K</a>
										</div>
									<div class="col-md-3 artist-grid">
										<a  href="single.html"><img src="images/a12.jpg" title="allbum-name"></a>
										 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
											<a class="art" href="single.html">Neeti Mohan</a>
									</div>
									<div class="clearfix"> </div>
								</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
									<div class="browse-inner">
								
								<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/a1.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="art" href="single.html"> Rahman</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/a2.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Shreya Ghoshal</a>
								</div>
							<div class="col-md-3 artist-grid">
								<a  href="single.html"><img src="images/a3.jpg" title="allbum-name"></a>
								 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Sukhwinder singh</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/a6.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Shekhar Ravjiani</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/a7.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Shalmali</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/a4.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Sajid-Wajid</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/a5.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.html">Atif Aslam</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.html"><img src="images/a8.jpg" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="art" href="single.html">Lata Mangeshkar</a>
								</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/a9.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Arijit Sing</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/a10.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Sunidhi Chauhan</a>
										</div>
										<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/a11.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Yo Yo Honey Singh</a>
										</div>
									<div class="col-md-3 artist-grid">
										<a  href="single.html"><img src="images/a12.jpg" title="allbum-name"></a>
										 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
											<a class="art" href="single.html">Neeti Mohan</a>
									</div>
									<div class="clearfix"> </div>
								</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
									 <div class="browse-inner">
								
								<div class="col-md-3 artist-grid">
												<a  href="single.html"><img src="images/a2.jpg" title="allbum-name"></a>
												 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.html">Shreya Ghoshal</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.html"><img src="images/a8.jpg" title="allbum-name"></a>
												 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Lata Mangeshkar</a>
													</div>
														<div class="col-md-3 artist-grid">
																<a  href="single.html"><img src="images/a9.jpg" title="allbum-name"></a>
																 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.html">Arijit Sing</a>
															</div>
														<div class="col-md-3 artist-grid">
																<a  href="single.html"><img src="images/a10.jpg" title="allbum-name"></a>
																 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.html">Sunidhi Chauhan</a>
															</div>
															<div class="col-md-3 artist-grid">
																<a  href="single.html"><img src="images/a11.jpg" title="allbum-name"></a>
																 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.html">Yo Yo Honey Singh</a>
															</div>
														<div class="col-md-3 artist-grid">
															<a  href="single.html"><img src="images/a12.jpg" title="allbum-name"></a>
															 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
																<a class="art" href="single.html">Neeti Mohan</a>
														</div>
										<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/a3.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.html">Sukhwinder singh</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.html"><img src="images/a6.jpg" title="allbum-name"></a>
												 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.html">Shekhar Ravjiani</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.html"><img src="images/a7.jpg" title="allbum-name"></a>
												 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.html">Shalmali</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.html"><img src="images/a4.jpg" title="allbum-name"></a>
												 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.html">Sajid-Wajid</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.html"><img src="images/a5.jpg" title="allbum-name"></a>
												 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.html">Atif Aslam</a>
											</div>
											<div class="col-md-3 artist-grid">
												<a  href="single.html"><img src="images/a1.jpg" title="allbum-name"></a>
												 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">A R Rahman</a>
											</div>
										
														<div class="clearfix"> </div>
													</div>
								  </div>
								   <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
									  <div class="browse-inner">
								
								
										<div class="col-md-3 artist-grid">
											<a  href="single.html"><img src="images/a3.jpg" title="allbum-name"></a>
											 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.html">Sukhwinder singh</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.html"><img src="images/a6.jpg" title="allbum-name"></a>
												 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.html">Shekhar Ravjiani</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.html"><img src="images/a7.jpg" title="allbum-name"></a>
												 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.html">Shalmali</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.html"><img src="images/a4.jpg" title="allbum-name"></a>
												 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.html">Sajid-Wajid</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.html"><img src="images/a5.jpg" title="allbum-name"></a>
												 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.html">Atif Aslam</a>
											</div>
											<div class="col-md-3 artist-grid">
												<a  href="single.html"><img src="images/a1.jpg" title="allbum-name"></a>
												 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">A R Rahman</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.html"><img src="images/a2.jpg" title="allbum-name"></a>
												 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.html">Shreya Ghoshal</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.html"><img src="images/a8.jpg" title="allbum-name"></a>
												 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.html">Lata Mangeshkar</a>
													</div>
														<div class="col-md-3 artist-grid">
																<a  href="single.html"><img src="images/a9.jpg" title="allbum-name"></a>
																 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.html">Arijit Sing</a>
															</div>
														<div class="col-md-3 artist-grid">
																<a  href="single.html"><img src="images/a10.jpg" title="allbum-name"></a>
																 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.html">Sunidhi Chauhan</a>
															</div>
															<div class="col-md-3 artist-grid">
																<a  href="single.html"><img src="images/a11.jpg" title="allbum-name"></a>
																 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.html">Yo Yo Honey Singh</a>
															</div>
														<div class="col-md-3 artist-grid">
															<a  href="single.html"><img src="images/a12.jpg" title="allbum-name"></a>
															 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
																<a class="art" href="single.html">Neeti Mohan</a>
														</div>
														<div class="clearfix"> </div>
													</div>
											</div>
								</div>
							</div>
						 	 <!-- /agileinfo -->
						</div>
					<!--//End-albums-->
					
						<!--//discover-view-->
								<div class="albums fourth">
										<div class="tittle-head two">
											<h3 class="tittle">Discover <span class="new">View</span></h3>
											<a href="browse.html"><h4 class="tittle third">See all</h4></a>
											<div class="clearfix"> </div>
										</div>
											<div class="col-md-3 artist-grid">
												<a href="single.html"><img src="images/dino2.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>
												<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.html"><img src="images/karma1.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>
													<div class="inner-info"><h5>Pop</h5></div>
												</div>
											<div class="col-md-3 artist-grid">
													<a href="single.html"><img src="images/raftaar1.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>
													<div class="inner-info"><h5>Pop</h5></div>
												</div>
											<div class="col-md-3 artist-grid last-grid">
													<a href="single.html"><img src="images/krsna2.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>
													<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.html"><img src="images/bohemia2.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>
													<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
												<a href="single.html"><img src="images/yo2.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>
												<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.html"><img src="images/ikka2.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>
													<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid last-grid">
													<a href="single.html"><img src="images/divine2.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>
													<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.html"><img src="images/fotty1.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>
													<div class="inner-info"><h5>Pop</h5></div>
												</div>
												<div class="col-md-3 artist-grid">
												<a href="single.html"><img src="images/kingp1.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>
												<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.html"><img src="images/bunty2.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>
													<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
												<a href="single.html"><img src="images/stan1.jpg" title="allbum-name"  style="border-radius: 50%;    box-shadow: 5px 10px 18px #888888;"></a>
												<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
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
									<a href="single.html"><img src="images/jal1.jpg" alt=""/></a>
									<div class="slide-title"><h4>Adele21 </div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/love1.jpg" alt=""/></a>
									<div class="slide-title"><h4>Adele21</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/king1.jpg" alt=""/></a>
									<div class="slide-title"><h4>Shomlock</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/aayat1.jpg" alt=""/></a>
									<div class="slide-title"><h4>Stuck on a feeling</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/likhe1.jpg" alt=""/></a>
									<div class="slide-title"><h4>Ricky Martine </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/this1.jpg" alt=""/></a>
									<div class="slide-title"><h4>Ellie Goluding </h4></div>
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
						<!-- /w3layouts-agile -->
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
        <!--footer section start-->
			<footer>
			   <p>&copy 2016 Mosaic. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
			</footer>
        <!--footer section end-->
 	    <!-- /w3layouts-agile -->
        <!-- main content end-->
   </section>
   	 <!-- /wthree-agile -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>
</body>
</html>