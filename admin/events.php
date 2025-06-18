<?php
include("config.php");
session_start();
//echo $_SESSION['name'];
if(!isset($_SESSION['user'])){
	header('location: index.php');
}
//$conn=mysql_connect("localhost","campusvi_share","hL&RbigFG31v") or die(mysql_error());
//$sdb=mysql_select_db("campusvi_share",$conn) or die(mysql_error());
if(isset($_POST['submit'])!=""){
	$name=$_POST['name'];
  $link=$_POST['link'];
  $date=$_POST['date']; 
  //$link=$_POST['link'];
$insert=mysqli_query($db,"Insert into events(name,link,date)values('$name','$link','$date')");
if($insert){
header("location:admin-events.php");
}
else{
//die(mysql_error());
}
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
								<a href="dashboard.php"><img src="assets/images/demo/users/face11.jpg" class="img-circle img-responsive" alt=""></a>
							
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
						<?php if($_SESSION["id"]==4 ){ ?>
             <?php include "events-menu.php"  ?>
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
								<h5 class="panel-title">Events and Marketing</h5>
								 <?php if($_SESSION["id"]==1 or $_SESSION["id"]==4)
									
									
									{ ?>
								<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                		<li><a data-action="close"></a></li>
				                	</ul>
			                	</div>
							</div>

						<!--	<div class="panel-body">
								<div class="row">
									<div class="col-md-6">
										<fieldset>
											
                               <form enctype="multipart/form-data" action="" name="form" method="post">
											<div class="form-group">
												<label>Enter your file name:</label>
												<input type="text" name="file_name" class="form-control" placeholder="Enter your file name">
											</div>
												<input type="hidden" name="date" class="form-control" value="<?echo date('Y-m-d');?>" >
											<div class="form-group">
												<label class="display-block">Attach Documents:</label>
												<input type="file" class="file-styled" name="photo" id="photo">
												
											</div>
										</fieldset>
									</div>
									<div class="col-md-6">
										
									</div>
								</div>

								<div class="text-right">
									<button type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
								
								</div>
								</form>
							</div> -->
						</div>
		
					<!-- /2 columns form -->
<!-- Bootstrap maxlength -->
					<!-- Bootstrap maxlength -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">All Documents</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

					<!--	<div class="panel-body">
							The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>
						</div>-->

						<table class="table datatable-basic table-bordered table-striped table-hover">
							<thead>
								<tr>
								<th>Name</th>
									<th>Link</th>	
										<th>Date</th>	
									  <th style="display:none;">Edit</th>
									<th style="display:none;">Delete</th>
								
									
									<th style="display:none;">#</th>
							      
								</tr>
							</thead>
							<tbody>
								<tr>
							<?php
$select=mysqli_query($db,"select * from events order by id desc");
while($row1=mysqli_fetch_array($select)){
	$name=$row1['name'];
	$link=$row1['link'];
	$date=$row1['date'];
?>                                   
 	                <td><a href="#"><?php echo $name;?></a></td>
									<td><img src="tick.png" width="14" height="14">&nbsp;&nbsp;<a href="<?php echo $link;?>" target=_blank><?php echo $link ;?></a></td>
									<td><?php echo $date;?></td>
									<td></td>
								
									<!--<td><a href="room.php?id=<?php echo $row1['id'];?>" ><i class="icon-trash"></i> Delete</a></td>-->
									<td></td>
									
									
									<td>#</td>
									
									
								</tr>
								<?php }?>
							</tbody>
  					 </table>
  					 	<?php } else {
   echo "<div style='text-align: center;font-weight:bold;left: -55px;color:red;'><h3>You dont have privilege to access this page</h3></div>";
}
									
									?>
					</div>

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
<script> $(document).on('click','#delete',function(){ var element = $(this); var del_id = element.attr("data-id"); var info = 'id=' + del_id; if(confirm("Are you sure you want to delete this?")) { $.ajax({ type: "POST", url: "ajax_delete.php", data: info, success: function(){  } }); $(this).parents("tr").animate({ backgroundColor: "#003" }, "slow") .animate({ opacity: "hide" }, "slow"); } return false; }); </script>

</body>
</html>
