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
														 
														<source src="media/alan-walker-alone.mp3" type="audio/ogg"></source>
																<source src="media/Dusk Till Dawn - ZAYN, Sia_320- [MyMp3Bhojpuri.In].mp3" type="audio/mpeg"></source>
																<source src="media/Imagine-Dragons-Thunder.mp3" type="audio/mpeg"></source>
																<source src="media/[MP3DOWNLOAD.TO] Charlie Puth - Girlfriend (Lyrics)-320k.mp3" type="audio/mpeg"></source></audio>
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
												<div id="loginpop"> <a href="logout.php" id="loginButton"><span>Logout<i class="arrow glyphicon glyphicon-chevron-right"></i></span></a><a class="top-sign" href="logout.php" data-toggle="modal" data-target="#"><i class="fa fa-sign-in"></i></a>
														<div id="loginBox">  
												<!-- <form action="#" method="post" id="#">
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
														 </form> -->
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
 	 <!-- /w3l-agileits -->
		<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="inner-content">
				
				      <div class="music-left">
					      <!--banner-section-->
							<div class="banner-section">
								<div class="banner">
									 <div class="callbacks_container">
										<ul class="rslides callbacks callbacks1" id="slider4">
											   	<li>
														<div class="banner-img">
															 <img src="images/kes17.jpg" 
															 class="img-responsive" alt="">
														 </div>

														 
														<div class="banner-info">
														              <a class="trend" href="single.html">TRENDING</a>
																	  <h3>Kesariya</h3>
																	  <p> By <span>Arijit Singh</span></p>
														 </div>

												</li>
												<li>
													<div class="banner-img">
															 <img src="images/22.jpg" class="img-responsive" alt="">
														 </div>
														<div class="banner-info">
																	  <a class="trend" href="single.html">TRENDING</a>
																	  <h3>Charis Brown feet</h3>
																	  <p>Album by <span>Rock star</span></p>
														 </div>


												</li>
												<li>
												 <div class="banner-img">
															 <img src="images/alan2.jpg" class="img-responsive" alt="">
														 </div>
														<div class="banner-info"> 
														             <a class="trend" href="single.html">TRENDING</a>
																	  <h3>On My Way</h3>
																	  <p>By <span>Alan Walker</span></p>
														 </div>

												 	 <!-- /w3layouts-agileits -->
												</li>
											</ul>
										</div>
										<!--banner-->
									<script src="js/responsiveslides.min.js"></script>
								 <script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								  </script>
								<div class="clearfix"> </div>
							</div>
						</div>	
				<!--//End-banner-->
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
						<div class="albums">
								<div class="tittle-head">
									<h3 class="tittle">New Releases <span class="new">New</span></h3>
									<a href="index.html"><h4 class="tittle">See all</h4></a>
									<div class="clearfix"> </div>
								</div>
				
				
								<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/zayn22.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>
								<a class="button play-icon popup-with-zoom-anim" href="">Listen now</a>
							</div>
	
	
							<div id="small-dialog" class="mfp-hide">
								<iframe src="https://player.vimeo.com/video/12985622"></iframe>
								
							</div>
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/charlie22.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>

								<a class="button play-icon popup-with-zoom-anim" href="music2/player.html">Listen now</a>
							</div>
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/arijit22.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>

								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div class="col-md-3 content-grid last-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/dua22.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>
	
								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/jub32.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>

								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div id="small-dialog" class="mfp-hide">
								<iframe src="https://player.vimeo.com/video/12985622"></iframe>
								
							</div>
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/alanw22.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>
		
								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/katy22.jpg" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>

								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div class="col-md-3 content-grid last-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/justin22.png" title="allbum-name"  style="border-radius: 50%; box-shadow: 5px 10px 18px #888888;"></a>
												<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
											</div>
											<div class="clearfix"> </div>
										</div>
					<!--//End-albums-->
						<!--//discover-view-->
						
						<div class="albums second">
										<div class="tittle-head">
											<h3 class="tittle">Discover <span class="new">View</span></h3>
											<a href="index.html"><h4 class="tittle two">See all</h4></a>
											<div class="clearfix"> </div>
										</div>
											<div class="col-md-3 content-grid">
												<a href="single.html"><img src="images/lost2.jpg" title="allbum-name"></a>
												<div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
											</div>
											<div class="col-md-3 content-grid">
													<a href="single.html"><img src="images/char2.jpg" title="allbum-name"></a>
													<div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
												</div>
											<div class="col-md-3 content-grid">
													<a href="single.html"><img src="images/hum2.jpg" title="allbum-name"></a>
													<div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
												</div>
											<div class="col-md-3 content-grid last-grid">
													<a href="single.html"><img src="images/waal2.jpg" title="allbum-name"></a>
													<div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
											</div>
											<div class="col-md-3 content-grid">
													<a href="single.html"><img src="images/eminem2.jpg" title="allbum-name"></a>
													<div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
											</div>
											<div class="col-md-3 content-grid">
												<a href="single.html"><img src="images/bek2.jpg" title="allbum-name"></a>
												<div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
											</div>
											<div class="col-md-3 content-grid">
													<a href="single.html"><img src="images/no2.jpg" title="allbum-name"></a>
													<div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
											</div>
											<div class="col-md-3 content-grid last-grid">
													<a href="single.html"><img src="images/jus2.jpg" title="allbum-name"></a>
													<div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
											</div>
											<div class="clearfix"> </div>
									</div>
								<!--//discover-view-->
							</div>
							<!--//music-left-->
						    <!--/music-right-->
						   <div class="music-right">
								<!--/video-main-->
								 <div class="video-main">
									<div class="video-record-list">
										<div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
											<div class="jp-type-playlist">
												<div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px;"><img id="jp_poster_0" src="video/night.webp" style="width: 480px; height: 270px; display: inline;"><video id="jp_video_0" preload="metadata" src="video/Night Changes.mp4" title="1.One Direction" style="width: 0px; height: 0px;"></video></div>
												<div class="jp-gui">
													<div class="jp-video-play" style="display: block;">
														<button class="jp-video-play-icon" role="button" tabindex="0">play</button>
													</div>
													<div class="jp-interface">
														<div class="jp-progress">
															<div class="jp-seek-bar" style="width: 100%;">
																<div class="jp-play-bar" style="width: 0%;"></div>
															</div>
														</div>
														<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
														<div class="jp-duration" role="timer" aria-label="duration">00:18</div>
														<div class="jp-controls-holder">
															<div class="jp-controls">
																<button class="jp-previous" role="button" tabindex="0">previous</button>
																<button class="jp-play" role="button" tabindex="0">play</button>
															</div>
															<div class="jp-volume-controls">
																<button class="jp-mute" role="button" tabindex="0">mute</button>
																<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
																<div class="jp-volume-bar">
																	<div class="jp-volume-bar-value" style="width: 100%;"></div>
																</div>
															</div>
															<div class="jp-toggles">
															
																<button class="jp-full-screen" role="button" tabindex="0">full screen</button>
															</div>
														</div>
														<div class="jp-details" style="display: none;">
															<div class="jp-title" aria-label="title">1. Night Changes</div>
														</div>
													</div>
												</div>
												<div class="jp-playlist">
													<ul style="display: block;"><li class="jp-playlist-current"><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0">1. One Direction <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">2. Mark-Ronson-Uptown <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">3. Ellie-Goulding <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">4. Maroon-Sugar <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">5. Pharrell-Williams <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">6. Ellie-Goulding <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">7. Pharrell-Williams <span class="jp-artist">by Pixar</span></a></div></li></ul>
												</div>
												<div class="jp-no-solution" style="display: none;">
													<span>Update Required</span>
													To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- script for play-list -->
				<link href="css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css">
				<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
				<script type="text/javascript" src="js/jplayer.playlist.min.js"></script>
				<script type="text/javascript">
				//<![CDATA[
				$(document).ready(function(){

					new jPlayerPlaylist({
						jPlayer: "#jquery_jplayer_1",
						cssSelectorAncestor: "#jp_container_1"
					}, [
						
						{
							title:"1. One Direction",
							artist:"",
							mp4: "video/Night Changes.mp4",
							ogv: "video/Night Changes.mp4",
							webmv: "video/Night Changes.mp4",
							poster:"video/night.webp"
						},
						{
							title:"2. Charlie Puth",
							artist:"",
							mp4: "video/See You Again.mp4",
							ogv: "video/See You Again.mp4",
							webmv: "video/See You Again.mp4",
							poster:"video/see.avif"
						},
						{
							title:"3.Alan Walker",
							artist:"",
							mp4: "video/Faded.mp4",
							ogv: "video/Faded.mp4",
							webmv: "video/Faded.mp4",
							poster:"video/fad.jpg"
						},
						{
							title:"4. Jubin Nautiyal",
							artist:"",
							mp4: "video/chitthi.mp4",
							ogv: "video/chitthi.mp4",
							webmv: "video/chitthi.mp4",
							poster:"video/play4.png"
						},
						{
							title:"5. DJ Snake",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
						{
							title:"6. Ellie-Goulding",
							artist:"",
							mp4: "video/Ellie-Goulding.mp4",
							ogv: "video/Ellie-Goulding.ogv",
							webmv: "video/Ellie-Goulding.webm",
							poster:"video/play1.png"
						},
						{
							title:"7. Imagine Dragons",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
						{
							title:"7. Eminem",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
						{
							title:"7. Honey Singh",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
						{
							title:"7. The Weekend",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
						{
							title:"7. Armaan Malik",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
						{
							title:"7. Raftaar",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
						{
							title:"7. Harry styles",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
						{
							title:"7. Pharrell-Williams",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
						{
							title:"7. Mohit Chauhan",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
						{
							title:"7. King",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
						{
							title:"7. Billie Eilish",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
						{
							title:"7. Justin Beiber",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
						{
							title:"7. Sunidhi Chauhan",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
						{
							title:"7. Arijit Singh",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						}
					], {
						swfPath: "../../dist/jplayer",
						supplied: "webmv,ogv,mp4",
						useStateClassSkin: true,
						autoBlur: false,
						smoothPlayBar: true,
						keyEnabled: true
					});

				});
				//]]>
					</script>
			<!-- //script for play-list -->

								<!--//video-main-->
								<!--/app_store-->
									  <!-- <div class="apps">
												<h3 class="hd-tittle">Mosaic now available in</h3>
												<div class="banner-button">
													<a href="#"><img src="images/1.png" alt=""></a>
												</div>
												<div class="banner-button green-button">
													<a href="#"><img src="images/2.png" alt=""></a>
												</div>
													<div class="clearfix"></div>
										</div> -->
								  <!--//app_store-->
						         <!--/start-paricing-tables-->
									<!-- <div class="price-section">
											<div class="pricing-inner">
												<h3 class="hd-tittle">Upgrade your Plan</h3>
												<div class="pricing">
													<div class="price-top">
														<h3><span>$20</span></h3>
														<h4>per year</h4>
													</div>
													<div class="price-bottom">
														<ul>
															<li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Download unlimited songs</a><div class="clearfix"></div></li>
															<li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Stream songs in High Definition</a><div class="clearfix"></div></li>
															<li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">No ads unlimited Devices</a><div class="clearfix"></div></li>
															<li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Stream songs in High Definition</a><div class="clearfix"></div></li>
														</ul>
														<a href="single.html" class="price">Upgrade</a>
													</div>
												</div>
												<div class="pricing two">
													<div class="price-top">
														<h3><span>$30</span></h3>
														<h4>per year</h4>
													</div>
													<div class="price-bottom">
														<ul>
															<li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Download unlimited songs</a><div class="clearfix"></div></li>
															<li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Stream songs in High Definition</a><div class="clearfix"></div></li>
															<li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">No ads unlimited Devices</a><div class="clearfix"></div></li>
															<li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Stream songs in High Definition</a><div class="clearfix"></div></li>
														</ul>
														<a href="single.html" class="price">Upgrade</a>
													</div>
												</div>
													<div class="clearfix"></div>
												</div> -->
												<!--//end-pricing-tables-->
												</div>
											</div>
													 <!--//music-right-->
											<div class="clearfix"></div>
			 	 <!-- /w3l-agile-its -->
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
									<div class="slide-title"><h4>Jalebi Baby</div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/love1.jpg" alt=""/></a>
									<div class="slide-title"><h4>Yeh Duriyaan</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/king1.jpg" alt=""/></a>
									<div class="slide-title"><h4>Tu aa ke dekh le</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/aayat1.jpg" alt=""/></a>
									<div class="slide-title"><h4>Aayat</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/likhe1.jpg" alt=""/></a>
									<div class="slide-title"><h4>Likhe jo khat tujhe </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/this1.jpg" alt=""/></a>
									<div class="slide-title"><h4>Something just like this</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="images/v6.jpeg" alt=""/></a>
									<div class="slide-title"><h4>Love me like you do</h4></div>
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
 	 <!-- /w3l-agile -->
					</div>
			  <!--body wrapper end-->
			     <div class="footer">
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
			<?php include "footer.php";?>