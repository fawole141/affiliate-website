<?php 
session_start();
require_once('dbm.php');



//require_once('sidebar.php');


?>

	
<!doctype html>
<html lang="en">
	
<!-- Mirrored from bootstrap.gallery/le-rouge/design/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Apr 2020 10:47:00 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title> Admin Dashboard</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/style.css">
		<!-- Main css -->
		<link rel="stylesheet" href="css/main.css">


		<!-- *************
			************ Vendor Css Files *************
		************ -->
		<!-- DateRange css -->
		<link rel="stylesheet" href="vendor/daterange/daterange.css" />

	</head>

	<body>

		<!-- Loading starts -->
	
		<!-- Loading ends -->


		<!-- Page wrapper start -->
		<div class="page-wrapper">
			
			<!-- Sidebar wrapper start -->
<?php require_once("sidebar1.php"); ?>
			<!-- Sidebar wrapper end -->

			<!-- Page content start  -->
			<div class="page-content">

				<!-- Header start -->
				<header class="header">
					<div class="toggle-btns">
						<a id="toggle-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
						<a id="pin-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
					</div>

				</header>
				<!-- Header end -->

				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item active">Admin Dashboard</li>
					</ol>

					<ul class="app-actions">
					
						<li>
							<a href="#">
								<i class="icon-export"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Page header end -->
				
							<?php 
				require_once("dbm.php");
		
				?>
				<!-- Main container start -->
				<div class="main-container">

					<!-- Row start -->

					<!-- Row end -->

					<!-- Row start -->
					
					<form method="post" action="who-view-coupon.php">
					
					<input type="text" name="coupon" placeholder="Search Coupon" class="form-control" style="width:50%;">
					<input type="submit" value="Search" class="btn btn-danger btn-block" style="width:50%; margin-top:6px;">
					</form>
					<br>
			<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Coupon Details</div>
								</div>
								<div class="card-body p-0">
									<div class="table-responsive">
										<table class="table projects-table">
											<thead>
												<tr>
	<th>S/N</th>
      <th>Coupon Code</th>
      <th>Details of the person that used it</th>
      
      

												</tr>
													<?php 
	error_reporting('0');
	$i=1;
	
	$search = $_POST['coupon'];
	 $email = $_SESSION[email];
$sql="SELECT * FROM coupons WHERE name LIKE '%$search%' LIMIT 20 ";
$sql=mysqli_query($conn,$sql);
while($row= mysqli_fetch_assoc($sql)){
$code=$row['name'];	

$who=$row['used_by'];	



    
?>
											</thead>
											<tbody>	
    <tr>
	  <td><?php echo $i++;?></td>
      <td><?php echo $code;?></td>
      <td><?php echo $who;?></td>
	  


	  
    </tr>

<?php 
}


?>
  </table>											
												</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

					<!-- Row start -->
		
					<!-- Row end -->

					<!-- Row start -->
			
					<!-- Row end -->

					<!-- Row start -->

		
					<!-- Row end -->
					
					

				</div>
				<!-- Main container end -->

			</div>
			<!-- Page content end -->

		</div>
		<!-- Page wrapper end -->

		<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="vendor/slimscroll/slimscroll.min.js"></script>
		<script src="vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Daterange -->
		<script src="vendor/daterange/daterange.js"></script>
		<script src="vendor/daterange/custom-daterange.js"></script>

		<!-- Polyfill JS -->
		<script src="vendor/polyfill/polyfill.min.js"></script>

		<!-- Apex Charts -->
		<script src="vendor/apex/apexcharts.min.js"></script>
		<script src="vendor/apex/admin/visitors.js"></script>
		<script src="vendor/apex/admin/deals.js"></script>
		<script src="vendor/apex/admin/income.js"></script>
		<script src="vendor/apex/admin/customers.js"></script>

		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>

<!-- Mirrored from bootstrap.gallery/le-rouge/design/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Apr 2020 10:48:09 GMT -->
</html>