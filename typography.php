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
						</div>
					<div class="clearfix"></div>
				</div>
			<!--notification menu end -->
			<!-- //header-ends -->
 	 <!-- /agile-info -->
		<!-- //header-ends -->
						<div id="page-wrapper">
								<!--/inner-content-->
									<div class="inner-content">
										<!--/typography-->
										
										<div class="tittle-head">
									<h3 class="tittle">Typography <span class="new">Page</span></h3>
									<div class="clearfix"> </div>
								</div>
								  <div class="typography">
								  
									   <div class="grid_3 grid_4">
										 <h3 class="typo">Headings</h3>
										 <div class="bs-example">
											 <table class="table">
											  <tbody>
												<tr>
												  <td><h1 id="h1.-bootstrap-heading">h1. Bootstrap heading<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h1></td>
												  <td class="type-info">Semibold 36px</td>
												</tr>
												<tr>
												  <td><h2 id="h2.-bootstrap-heading">h2. Bootstrap heading<a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2></td>
												  <td class="type-info">Semibold 30px</td>
												</tr>
												<tr>
												  <td><h3 id="h3.-bootstrap-heading">h3. Bootstrap heading<a class="anchorjs-link" href="#h3.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h3></td>
												  <td class="type-info">Semibold 24px</td>
												</tr>
												<tr>
												  <td><h4 id="h4.-bootstrap-heading">h4. Bootstrap heading<a class="anchorjs-link" href="#h4.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												  <td class="type-info">Semibold 18px</td>
												</tr>
												<tr>
												  <td><h5 id="h5.-bootstrap-heading">h5. Bootstrap heading<a class="anchorjs-link" href="#h5.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h5></td>
												  <td class="type-info">Semibold 14px</td>
												</tr>
												<tr>
												  <td><h6>h6. Bootstrap heading</h6></td>
												  <td class="type-info">Semibold 12px</td>
												</tr>
											  </tbody>
											 </table>
										 </div>
									  </div>
									  
									   	 <!-- /agileits -->
									  <div class="grid_3 grid_5">
										 <h3>Progress Bars</h3>
										  <div class="tab-content">
											 <div class="tab-pane active" id="domprogress">
												 <div class="progress">    
													  <div class="progress-bar progress-bar-primary" style="width: 20%"></div>
												 </div>
												 <p>Info with <code>progress-bar-info</code> class.</p>
												 <div class="progress">    
													 <div class="progress-bar progress-bar-info" style="width: 60%"></div>
												 </div>
												 <p>Success with <code>progress-bar-success</code> class.</p>
												 <div class="progress">
													 <div class="progress-bar progress-bar-success" style="width: 30%"></div>
												 </div>
												 <p>Warning with <code>progress-bar-warning</code> class.</p>
												 <div class="progress">
													 <div class="progress-bar progress-bar-warning" style="width: 70%"></div>
												 </div>
												 <p>Danger with <code>progress-bar-danger</code> class.</p>
												 <div class="progress">
													 <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
												 </div>
												 <p>Inverse with <code>progress-bar-inverse</code> class.</p>
												 <div class="progress">
													 <div class="progress-bar progress-bar-inverse" style="width: 40%"></div>
												 </div>
												 <p>Inverse with <code>progress-bar-inverse</code> class.</p>
												 <div class="progress">
													 <div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
													 <div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
													 <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
												 </div>
											   </div>
										   </div>
									   </div>
									    	 <!-- /wthree-agile -->
									   <div class="grid_3 grid_5">
										 <h3>Pagination</h3>
										 <div class="col-md-6">
											  <nav>
											  <ul class="pagination pagination-lg">
												<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
												<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
											  </ul>
											  </nav>
											  <nav>
											  <ul class="pagination">
												<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
												<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
											  </ul>
											 </nav>
											 <nav>
											   <ul class="pagination pagination-sm">
												<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
												<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
											  </ul>
											 </nav>				 
										 </div>
										 <div class="col-md-6">
												<ul class="pagination pagination-lg">
																<li class="disabled"><a href="#"><span aria-hidden="true">«</span></a></li>
																<li class="active"><a href="#">1</a></li>
																<li><a href="#">2</a></li>
																<li><a href="#">3</a></li>
																<li><a href="#">4</a></li>
																<li><a href="#">5</a></li>
																<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
															</ul>
											<nav>
											  <ul class="pagination">
												<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
												<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
												<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
											 </ul>
										   </nav>
											 <ul class="pagination pagination-sm">
												<li class="disabled"><a href="#"><span aria-hidden="true">«</span></a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
												<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
											</ul>
											</div>
										   <div class="clearfix"> </div>
									 </div>
									 
									 <div class="grid_3 grid_5">
										 <h3>Breadcrumbs</h3>
										   <ol class="breadcrumb">
										  <li class="active">Home</li>
										</ol>
										<ol class="breadcrumb">
										  <li><a href="#">Home</a></li>
										  <li class="active">Library</li>
										</ol>
										<ol class="breadcrumb">
										  <li><a href="#">Home</a></li>
										  <li><a href="#">Library</a></li>
										  <li class="active">Data</li>
										</ol>
									 </div>
									   <div class="grid_3 grid_5">
											 <h3>Badges</h3>
												<div class="col-md-6">
													<p>Add modifier classes to change the appearance of a badge.</p>
													  <table class="table table-bordered">
														<thead>
															<tr>
																<th>Classes</th>
																<th>Badges</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>No modifiers</td>
																<td><span class="badge">42</span></td>
															</tr>
															<tr>
																<td><code>.badge-primary</code></td>
																<td><span class="badge badge-primary">1</span></td>
															</tr>
															<tr>
																<td><code>.badge-success</code></td>
																<td><span class="badge badge-success">22</span></td>
															</tr>
															<tr>
																<td><code>.badge-info</code></td>
																<td><span class="badge badge-info">30</span></td>
															</tr>
															<tr>
																<td><code>.badge-warning</code></td>
																<td><span class="badge badge-warning">412</span></td>
															</tr>
															<tr>
																<td><code>.badge-danger</code></td>
																<td><span class="badge badge-danger">999</span></td>
															</tr>
														</tbody>
													  </table>                    
												</div>
												<div class="col-md-6">
												  <p>Easily highlight new or unread items with the <code>.badge</code> class</p>
													<div class="list-group list-group-alternate"> 
														<a href="#" class="list-group-item"><span class="badge">201</span> <i class="ti ti-email"></i> Inbox </a> 
														<a href="#" class="list-group-item"><span class="badge badge-primary">5021</span> <i class="ti ti-eye"></i> Profile visits </a> 
														<a href="#" class="list-group-item"><span class="badge">14</span> <i class="ti ti-headphone-alt"></i> Call </a> 
														<a href="#" class="list-group-item"><span class="badge">20</span> <i class="ti ti-comments"></i> Messages </a> 
														<a href="#" class="list-group-item"><span class="badge badge-warning">14</span> <i class="ti ti-bookmark"></i> Bookmarks </a> 
														<a href="#" class="list-group-item"><span class="badge badge-danger">30</span> <i class="ti ti-bell"></i> Notifications </a> 
													</div>
											   </div>
											   <div class="clearfix"> </div>
											 </div>
													  <section id="tables">
										  <div class="page-header">
											<h1>Tables</h1>
										  </div>

										  <h2>Default styles</h2>
										  <p>For basic stylinglight padding and only horizontal add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.</p>
										  <div class="bs-docs-example">
											<table class="table">
											  <thead>
												<tr>
												  <th>#</th>
												  <th>First Name</th>
												  <th>Last Name</th>
												  <th>Username</th>
												</tr>
											  </thead>
											  <tbody>
												<tr>
												  <td>1</td>
												  <td>Mark</td>
												  <td>Otto</td>
												  <td>@mdo</td>
												</tr>
												<tr>
												  <td>2</td>
												  <td>Jacob</td>
												  <td>Thornton</td>
												  <td>@fat</td>
												</tr>
												<tr>
												  <td>3</td>
												  <td>Larry</td>
												  <td>the Bird</td>
												  <td>@twitter</td>
												</tr>
											  </tbody>
											</table>
										  </div>
										  </section>	
										  <hr class="bs-docs-separator">
										  <p>Add any of the following classes to the <code>.table</code> base class.</p>
										  <p>Adds zebra-striping to any table row within the <code>&lt;tbody&gt;</code> via the <code>:nth-child</code> CSS selector (not available in IE7-8).</p>
										  <div class="bs-docs-example">
											<table class="table table-striped">
											  <thead>
												<tr>
												  <th>#</th>
												  <th>First Name</th>
												  <th>Last Name</th>
												  <th>Username</th>
												</tr>
											  </thead>
											  <tbody>
												<tr>
												  <td>1</td>
												  <td>Mark</td>
												  <td>Otto</td>
												  <td>@mdo</td>
												</tr>
												<tr>
												  <td>2</td>
												  <td>Jacob</td>
												  <td>Thornton</td>
												  <td>@fat</td>
												</tr>
												<tr>
												  <td>3</td>
												  <td>Larry</td>
												  <td>the Bird</td>
												  <td>@twitter</td>
												</tr>
											  </tbody>
											</table>
										  </div>
										  <p>Add borders and rounded corners to the table.</p>
										  <div class="bs-docs-example">
											<table class="table table-bordered">
											  <thead>
												<tr>
												  <th>#</th>
												  <th>First Name</th>
												  <th>Last Name</th>
												  <th>Username</th>
												</tr>
											  </thead>
											  <tbody>
												<tr>
												  <td rowspan="2">1</td>
												  <td>Mark</td>
												  <td>Otto</td>
												  <td>@mdo</td>
												</tr>
												<tr>
												  <td>Mark</td>
												  <td>Otto</td>
												  <td>@getbootstrap</td>
												</tr>
												<tr>
												  <td>2</td>
												  <td>Jacob</td>
												  <td>Thornton</td>
												  <td>@fat</td>
												</tr>
												<tr>
												  <td>3</td>
												  <td colspan="2">Larry the Bird</td>
												  <td>@twitter</td>
												</tr>
											  </tbody>
											</table>
										  </div>
										  <p>Enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
										  <div class="bs-docs-example">
											<table class="table table-hover">
											  <thead>
												<tr>
												  <th>#</th>
												  <th>First Name</th>
												  <th>Last Name</th>
												  <th>Username</th>
												</tr>
											  </thead>
											  <tbody>
												<tr>
												  <td>1</td>
												  <td>Mark</td>
												  <td>Otto</td>
												  <td>@mdo</td>
												</tr>
												<tr>
												  <td>2</td>
												  <td>Jacob</td>
												  <td>Thornton</td>
												  <td>@fat</td>
												</tr>
												<tr>
												  <td>3</td>
												  <td colspan="2">Larry the Bird</td>
												  <td>@twitter</td>
												</tr>
											  </tbody>
											</table>
										  </div>
										  <h3 class="typo">Unordered List</h3>
										<ul class="list-group">
										  <li class="list-group-item">Cras justo odio</li>
										  <li class="list-group-item">Dapibus ac facilisis in</li>
										  <li class="list-group-item">Morbi leo risus</li>
										  <li class="list-group-item">Porta ac consectetur ac</li>
										  <li class="list-group-item">Vestibulum at eros</li>
										</ul>
								  <h3 class="typo">Ordered List</h3>
										<ol>
											<li class="list-group-item1">Cras justo odio</li>
											<li class="list-group-item1">Dapibus ac facilisis in</li>
											<li class="list-group-item1">Morbi leo risus</li>
											<li class="list-group-item1">Porta ac consectetur ac</li>
											<li class="list-group-item1">Vestibulum at eros</li>
										</ol>

										  <h3 class="typo">Forms</h3>
								<div class="input-group">
								  <span class="input-group-addon" id="basic-addon1">@</span>
								  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
								</div>

										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
										  <span class="input-group-addon" id="basic-addon2">@example.com</span>
										</div>

										<div class="input-group">
										  <span class="input-group-addon">$</span>
										  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
										  <span class="input-group-addon">.00</span>
										</div>
										<div class="input-group input-group-lg">
										  <span class="input-group-addon" id="sizing-addon1">@</span>
										  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
										</div>

										<div class="input-group">
										  <span class="input-group-addon" id="sizing-addon2">@</span>
										  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
										</div>

										<div class="input-group input-group-sm">
										  <span class="input-group-addon" id="sizing-addon3">@</span>
										  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
										</div>

										<div class="row">
										  <div class="col-lg-6 in-gp-tl">
											<div class="input-group">
											  <span class="input-group-addon">
												<input type="checkbox" aria-label="...">
											  </span>
											  <input type="text" class="form-control" aria-label="...">
											</div><!-- /input-group -->
										  </div><!-- /.col-lg-6 -->
										  <div class="col-lg-6 in-gp-tb">
											<div class="input-group">
											  <span class="input-group-addon">
												<input type="radio" aria-label="...">
											  </span>
											  <input type="text" class="form-control" aria-label="...">
											</div><!-- /input-group -->
										  </div><!-- /.col-lg-6 -->
										</div><!-- /.row -->
										<div class="row">
										  <div class="col-lg-6 in-gp-tl">
											<div class="input-group">
											  <span class="input-group-btn">
												<button class="btn btn-default" type="button">Go!</button>
											  </span>
											  <input type="text" class="form-control" placeholder="Search for...">
											</div><!-- /input-group -->
										  </div><!-- /.col-lg-6 -->
										  <div class="col-lg-6 in-gp-tb">
											<div class="input-group">
											  <input type="text" class="form-control" placeholder="Search for...">
											  <span class="input-group-btn">
												<button class="btn btn-default" type="button">Go!</button>
											  </span>
											</div><!-- /input-group -->
										  </div><!-- /.col-lg-6 -->
										</div><!-- /.row -->
										<div class="row">
										  <div class="col-lg-6 in-gp-tl">
											<div class="input-group">
											  <div class="input-group-btn">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
												<ul class="dropdown-menu">
												  <li><a href="#">Action</a></li>
												  <li><a href="#">Another action</a></li>
												  <li><a href="#">Something else here</a></li>
												  <li role="separator" class="divider"></li>
												  <li><a href="#">Separated link</a></li>
												</ul>
											  </div><!-- /btn-group -->
											  <input type="text" class="form-control" aria-label="...">
											</div><!-- /input-group -->
										  </div><!-- /.col-lg-6 -->
										  <div class="col-lg-6 in-gp-tb">
											<div class="input-group">
											  <input type="text" class="form-control" aria-label="...">
											  <div class="input-group-btn">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
												<ul class="dropdown-menu dropdown-menu-right">
												  <li><a href="#">Action</a></li>
												  <li><a href="#">Another action</a></li>
												  <li><a href="#">Something else here</a></li>
												  <li role="separator" class="divider"></li>
												  <li><a href="#">Separated link</a></li>
												</ul>
											  </div><!-- /btn-group -->
											</div><!-- /input-group -->
										  </div><!-- /.col-lg-6 -->
										</div><!-- /.row -->
										 	 <!-- /wthree-agile -->
										 <h3 class="typo">Grids</h3>
											 <div class="form-group">
		    <div class="row">
			  <div class="col-md-12">
				<input type="text" class="form-control1" placeholder=".col-md-12">
			  </div>
			<div class="clearfix"> </div>
		   </div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2 grid_box1">
					<input type="text" class="form-control1" placeholder=".col-md-2">
				</div>
				<div class="col-md-10">
					<input type="text" class="form-control1" placeholder=".col-md-10">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-3 grid_box1">
					<input type="text" class="form-control1" placeholder=".col-md-3">
				</div>
				<div class="col-md-9">
					<input type="text" class="form-control1" placeholder=".col-md-9">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-4 grid_box1">
					<input type="text" class="form-control1" placeholder=".col-md-4">
				</div>
				<div class="col-md-8">
					<input type="text" class="form-control1" placeholder=".col-md-8">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>	
		<div class="form-group">
			<div class="row">
				<div class="col-md-5 grid_box1">
					<input type="text" class="form-control1" placeholder=".col-md-5">
				</div>
				<div class="col-md-7">
					<input type="text" class="form-control1" placeholder=".col-md-7">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>	
		<div class="form-group">
			<div class="row">
				<div class="col-md-6 grid_box1">
					<input type="text" class="form-control1" placeholder=".col-md-6">
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control1" placeholder=".col-md-6">
				</div>
				<div class="clearfix"> </div>
			</div>
		   </div>	
		   <div class="form-group">
		<div class="row">
			<div class="col-md-4 grid_box1">
				<input type="text" class="form-control1" placeholder=".col-md-4">
			</div>
			<div class="col-md-4 grid_box1">
				<input type="text" class="form-control1" placeholder=".col-md-4">
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control1" placeholder=".col-md-4">
			</div>
			<div class="clearfix"> </div>
		</div>
		   </div>	
		   <div class="form-group">
		<div class="row">
			<div class="col-md-3 grid_box1">
				<input type="text" class="form-control1" placeholder=".col-md-3">
			</div>
			<div class="col-md-6 grid_box1">
				<input type="text" class="form-control1" placeholder=".col-md-6">
			</div>
			<div class="col-md-3">
				<input type="text" class="form-control1" placeholder=".col-md-3">
			</div>
			<div class="clearfix"> </div>
		</div>
		   </div>	
		   <div class="form-group">
		<div class="row">
			<div class="col-md-2 grid_box1">
				<input type="text" class="form-control1" placeholder=".col-md-2">
			</div>
			<div class="col-md-8 grid_box1">
				<input type="text" class="form-control1" placeholder=".col-md-8">
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control1" placeholder=".col-md-2">
			</div>
			<div class="clearfix"> </div>
		</div>
		   </div>	
		   <div class="form-group">
		<div class="row">
			<div class="col-md-3 grid_box1">
				<input type="text" class="form-control1" placeholder=".col-md-3">
			</div>
			<div class="col-md-3 grid_box1">
				<input type="text" class="form-control1" placeholder=".col-md-3">
			</div>
			<div class="col-md-3 grid_box1">
				<input type="text" class="form-control1" placeholder=".col-md-3">
			</div>
			<div class="col-md-3">
				<input type="text" class="form-control1" placeholder=".col-md-3">
			</div>
			<div class="clearfix"> </div>
		</div>
		   </div>	
		   <div class="form-group">
		<div class="row">
			<div class="col-md-5 grid_box1">
				<input type="text" class="form-control1" placeholder=".col-md-5">
			</div>
			<div class="col-md-2 grid_box1">
				<input type="text" class="form-control1" placeholder=".col-md-2">
			</div>
			<div class="col-md-5">
				<input type="text" class="form-control1" placeholder=".col-md-5">
			</div>
			<div class="clearfix"> </div>
		</div>
		   </div>	
		   <div class="form-group mb-n">
			<div class="row">
				<div class="col-md-2 grid_box1">
					<input type="text" class="form-control1" placeholder=".col-md-2">
				</div>
				<div class="col-md-2 grid_box1">
					<input type="text" class="form-control1" placeholder=".col-md-2">
				</div>
				<div class="col-md-2 grid_box1">
					<input type="text" class="form-control1" placeholder=".col-md-2">
				</div>
				<div class="col-md-2 grid_box1">
					<input type="text" class="form-control1" placeholder=".col-md-2">
				</div>
				<div class="col-md-2 grid_box1">
					<input type="text" class="form-control1" placeholder=".col-md-2">
				</div>
				<div class="col-md-2">
					<input type="text" class="form-control1" placeholder=".col-md-2">
				</div>
				<div class="clearfix"> </div>
			</div>
		 </div>	

											  </div>

									</div>
								<!--//inner-content-->
								
								<!--//page-wrapper-->					
							</div>
						<!--body wrapper start-->
								</div>
							<div class="clearfix"></div>
						<!--body wrapper end-->

					</div>
					 	 <!-- /w3layouts-agile -->
			  <!--body wrapper end-->
			   <div class="footer">
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
			 	 <!-- /w3l-agile -->
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