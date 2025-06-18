<?php 
include("config.php");
session_start();
//echo $_SESSION['name'];
if(!isset($_SESSION['user'])){
	header('location: index.php');
}
?>
<?php
   //session_start();
   
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "You have visited this Site  ".  $_SESSION['counter'];
   $msg .= " in this session.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JPS Bangalore</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/dashboard.js"></script>

	<script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-default header-highlight">
		<div class="navbar-header">
			<a class="navbar-brand" href="dashboard.php"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>

			<div class="navbar-right"> 
				<p class="navbar-text"><span class="label bg-success"><b><?php date_default_timezone_set('Asia/Calcutta');echo date('Y-m-d h-i-s'); ?></b></span></p>	
					<p class="navbar-text"><span class="label bg-success"><b><?php  echo ( $msg ); ?></b></span></p>	
				<ul class="nav navbar-nav">				
                <li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/demo/users/face11.jpg" alt="">
						<span><?php echo $_SESSION['user']; ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<!--<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
						<li><a href="#"><span class="badge badge-warning pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>-->
						<li><a href="logout.php"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>					
				</ul>
			</div>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user-material">
						<div class="category-content">
							<div class="sidebar-user-material-content">
								<a href="#"><img src="assets/images/demo/users/face11.jpg" class="img-circle img-responsive" alt=""></a>
								<!--<h6>Victoria Baker</h6>
								<span class="text-size-small">Santa Ana, CA</span>-->
							</div>
														
							<div class="sidebar-user-material-menu">
							<!--	<a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>-->
							</div>
						</div>
						
					<!--<div class="navigation-wrapper collapse" id="user-nav">
							<ul class="navigation">
								<li><a href="#"><i class="icon-user-plus"></i> <span>My profile</span></a></li>
								<li><a href="#"><i class="icon-coins"></i> <span>My balance</span></a></li>
								<li><a href="#"><i class="icon-comment-discussion"></i> <span><span class="badge bg-teal-400 pull-right">58</span> Messages</span></a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="icon-cog5"></i> <span>Account settings</span></a></li>
								<li><a href="logout.php"><i class="icon-switch2"></i> <span>Logout</span></a></li>
							</ul>
						</div>-->
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
           
 

<?php if($_SESSION["id"]==4 ){ ?>
             <?php include "events-menu.php"  ?>
           <?php } else { } ?>
           
           <?php if($_SESSION["id"]==5 ){ ?>
             <?php include "customer-menu.php"  ?>
           <?php } else { } ?>

           <?php if($_SESSION["id"]==6 ){ ?>
             <?php include "purchase-menu.php"  ?>
           <?php } else { } ?>
           
           <?php if($_SESSION["id"]==1 ){ ?>
             <?php include "admin_menu.php"  ?>
           <?php } else { } ?>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">
                       <!-- Quick stats boxes -->
							<div class="row">
								<div class="col-lg-4">

									<!-- Members online -->
									<div class="panel bg-teal-400" style="background-color: #364ea2;border-color: #364ea2;color: #fff;">
										<a href="admin-contacts.php"><div class="panel-body">
											<div class="heading-elements">
												
											</div>

											<h3 class="no-margin" style="color:white;">Website Contact</h3>
											
											<div class="text-muted text-size-small">JPS Bangalore</div>
										</div></a>

										<div class="container-fluid">
											<div id="members-online"></div>
										</div>
									</div>
									<!-- /members online -->

								</div>

								<div class="col-lg-4">

									<!-- Current server load -->
									<div class="panel bg-teal-400" style="background-color: #364ea2;border-color: #364ea2;color: #fff;">
										<a href="admin-announcement.php"><div class="panel-body">
											<div class="heading-elements">
												
											</div>

											<h3 class="no-margin" style="color:white;">Announcement</h3>
											
											<div class="text-muted text-size-small">JPS Bangalore</div>
										</div></a>

										<div id="server-load"></div>
									</div>
									<!-- /current server load -->

								</div>

								<!--<div class="col-lg-4">-->

									<!-- Today's revenue -->
								<!--	<div class="panel bg-blue-400">-->
								<!--		<a href="#"><div class="panel-body">-->
								<!--			<div class="heading-elements">-->
											
						  <!--              	</div>-->

								<!--			<h3 class="no-margin" style="color:white;">Customer Database</h3>-->
											
								<!--			<div class="text-muted text-size-small">JPS Bangalore</div>-->
								<!--		</div></a>-->

								<!--		<div id="today-revenue"></div>-->
								<!--	</div>-->
									<!-- /today's revenue -->

								<!--</div>-->
							</div>
							<div class="row">
							
							</div>
					<!-- Main charts -->
					
					<!-- /bordered panel body table -->
								
						<!--<div class="position-relative" id="traffic-sources"></div>-->
							</div>
							<!-- /traffic sources -->

						</div>

						

								<div class="content-group-sm" id="app_sales"></div>
								<div id="monthly-sales-stats"></div>
							</div>
							<!-- /sales stats -->

						</div>
					</div>
					<!-- /main charts -->


					<!-- Dashboard content -->
					<div class="row">
						<div class="col-lg-8">

							<!-- Marketing campaigns -->
							<div class="panel panel-flat">
								

								<!--<div class="table-responsive">
									<table class="table text-nowrap">
										
										<tbody>
											<tr class="active border-double">
												<td colspan="5">Today</td>
												<td class="text-right">
													<span class="progress-meter" id="today-progress" data-progress="30"></span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/brands/facebook.png" class="img-circle img-xs" alt=""></a>
													</div>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">Facebook</a></div>
														<div class="text-muted text-size-small">
															<span class="status-mark border-blue position-left"></span>
															02:00 - 03:00
														</div>
													</div>
												</td>
												<td><span class="text-muted">Mintlime</span></td>
												<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.43%</span></td>
												<td><h6 class="text-semibold">$5,489</h6></td>
												<td><span class="label bg-blue">Active</span></td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/brands/youtube.png" class="img-circle img-xs" alt=""></a>
													</div>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">Youtube videos</a></div>
														<div class="text-muted text-size-small">
															<span class="status-mark border-danger position-left"></span>
															13:00 - 14:00
														</div>
													</div>
												</td>
												<td><span class="text-muted">CDsoft</span></td>
												<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 3.12%</span></td>
												<td><h6 class="text-semibold">$2,592</h6></td>
												<td><span class="label bg-danger">Closed</span></td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/brands/spotify.png" class="img-circle img-xs" alt=""></a>
													</div>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">Spotify ads</a></div>
														<div class="text-muted text-size-small">
															<span class="status-mark border-grey-400 position-left"></span>
															10:00 - 11:00
														</div>
													</div>
												</td>
												<td><span class="text-muted">Diligence</span></td>
												<td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> - 8.02%</span></td>
												<td><h6 class="text-semibold">$1,268</h6></td>
												<td><span class="label bg-grey-400">Hold</span></td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/brands/twitter.png" class="img-circle img-xs" alt=""></a>
													</div>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">Twitter ads</a></div>
														<div class="text-muted text-size-small">
															<span class="status-mark border-grey-400 position-left"></span>
															04:00 - 05:00
														</div>
													</div>
												</td>
												<td><span class="text-muted">Deluxe</span></td>
												<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.78%</span></td>
												<td><h6 class="text-semibold">$7,467</h6></td>
												<td><span class="label bg-grey-400">Hold</span></td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>

											<tr class="active border-double">
												<td colspan="5">Yesterday</td>
												<td class="text-right">
													<span class="progress-meter" id="yesterday-progress" data-progress="65"></span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/brands/bing.png" class="img-circle img-xs" alt=""></a>
													</div>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">Bing campaign</a></div>
														<div class="text-muted text-size-small">
															<span class="status-mark border-success position-left"></span>
															15:00 - 16:00
														</div>
													</div>
												</td>
												<td><span class="text-muted">Metrics</span></td>
												<td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> - 5.78%</span></td>
												<td><h6 class="text-semibold">$970</h6></td>
												<td><span class="label bg-success-400">Pending</span></td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropup">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/brands/amazon.png" class="img-circle img-xs" alt=""></a>
													</div>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">Amazon ads</a></div>
														<div class="text-muted text-size-small">
															<span class="status-mark border-danger position-left"></span>
															18:00 - 19:00
														</div>
													</div>
												</td>
												<td><span class="text-muted">Blueish</span></td>
												<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 6.79%</span></td>
												<td><h6 class="text-semibold">$1,540</h6></td>
												<td><span class="label bg-blue">Active</span></td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropup">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/brands/dribbble.png" class="img-circle img-xs" alt=""></a>
													</div>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">Dribbble ads</a></div>
														<div class="text-muted text-size-small">
															<span class="status-mark border-blue position-left"></span>
															20:00 - 21:00
														</div>
													</div>
												</td>
												<td><span class="text-muted">Teamable</span></td>
												<td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> 9.83%</span></td>
												<td><h6 class="text-semibold">$8,350</h6></td>
												<td><span class="label bg-danger">Closed</span></td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropup">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>
								</div>-->
							</div>
							<!-- /marketing campaigns -->


							

							<!-- Support tickets -->
							

						<div class="col-lg-4">

					<!-- Footer -->
					<!--<div class="footer text-muted" style="color:black;">
					           Copyright © <?php echo date("Y"); ?> Powered by JPS Bangalore.
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
 
</body>
</html>
