<?php
session_start();
//echo $_SESSION['name'];
if(!isset($_SESSION['user'])){
	header('location: index.php');
}
//$conn=mysql_connect("localhost","campusvi_share","hL&RbigFG31v") or die(mysql_error());
//$sdb=mysql_select_db("campusvi_share",$conn) or die(mysql_error());
		//$db = mysqli_connect("localhost", "root", "", "share");
include("config.php");
if(isset($_POST['update'])!=""){
// $caption1=$_POST['caption'];
  $name=$_POST['name'];
  $link=$_POST['link'];
  $id=$_GET['id'];
 // $id = mysql_real_escape_string($_GET['id']);
$update=mysqli_query($db,"update customer set name='$name', link='$link' where id ='$id'") ;
if($update){
header("location:admin-customer.php");
}
else{
//die(mysql_error());
}
}

if (isset($_GET['id'])) {  

	$id=$_GET['id'];
	

$result= mysqli_query($db,"SELECT * FROM customer where id='$id' ");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GoldRush</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->
	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/core/libraries/jasny_bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/inputs/autosize.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/inputs/formatter.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/inputs/typeahead/handlebars.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/inputs/passy.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/inputs/maxlength.min.js"></script>
	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/form_controls_extended.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>
	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>
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
							
							</div>
														
						
						</div>
						
						<div class="navigation-wrapper collapse" id="user-nav">
							<ul class="navigation">
								<li><a href="#"><i class="icon-user-plus"></i> <span>My profile</span></a></li>
								<li><a href="#"><i class="icon-coins"></i> <span>My balance</span></a></li>
								<li><a href="#"><i class="icon-comment-discussion"></i> <span><span class="badge bg-teal-400 pull-right">58</span> Messages</span></a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="icon-cog5"></i> <span>Account settings</span></a></li>
								<li><a href="#"><i class="icon-switch2"></i> <span>Logout</span></a></li>
							</ul>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<?php include("admin_menu.php");?>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							
						</div>

						<div class="heading-elements">
							
						</div>
					</div>

					
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- 2 columns form -->
			
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h5 class="panel-title">Customer Database</h5>
								<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                		<li><a data-action="close"></a></li>
				                	</ul>
			                	</div>
							</div>
<?php 
while($row = mysqli_fetch_array($result)){

$name=$row['name'];
$link=$row['link'];
?>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-6">
										<fieldset>
											<!--<legend class="text-semibold"><i class="icon-reading position-left"></i> Personal details</legend>-->
                               <form enctype="multipart/form-data" action="" name="form" method="post">
											<div class="form-group">
												<label>Edit Name:</label>
												<input type="text" name="name" value="<?php echo $name;?>" class="form-control" placeholder="Enter your name">
											</div>

											<div class="form-group">
												<label>Edit Link:</label>
												<input type="text" name="link" value="<?php echo $link;?>" class="form-control" placeholder="Enter your link">
											</div>
										</fieldset>
									</div>
									<div class="col-md-6">
										
									</div>
								</div>

								<div class="text-right">
									<button type="submit" name="update" id="submit" value="Update" class="btn btn-primary">Update <i class="icon-arrow-right14 position-right"></i></button>
								
								</div>
								</form>
							</div>
						</div>
<?php }?>		
					<!-- /2 columns form -->
<!-- Bootstrap maxlength -->
				

					<!-- Footer -->
						<div class="footer text-muted" style="color:black;">
					          Copyright © <?php echo date("Y"); ?> Powered by GoldRush.
					</div
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
