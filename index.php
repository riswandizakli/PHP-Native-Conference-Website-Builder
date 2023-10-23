
<?php
require_once("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Dashboard Chair Cosite by Akademisi V2</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assetsdash/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assetsdash/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assetsdash/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assetsdash/css/bootstrap.min.css">
	<link rel="stylesheet" href="assetsdash/css/atlantis.min.css">


</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="index.php" class="logo">
				  
					<img src="https://akademisi.co.id/images/akademisi.png" alt="navbar brand" class="navbar-brand" width="140">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
				
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
					
					<!--
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Quick Actions</span>
									<span class="subtitle op-8">Shortcuts</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file-1"></i>
													<span class="text">Generated Report</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-database"></i>
													<span class="text">Create New Database</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-pen"></i>
													<span class="text">Create New Post</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-interface-1"></i>
													<span class="text">Create New Task</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-list"></i>
													<span class="text">Completed Tasks</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file"></i>
													<span class="text">Create New Invoice</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						-->
						<a href="logout.php" class="btn btn-danger">Logout</a>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						
							<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Chair of <?php echo $conf;?>
								
								
								</span>
							</a>
						

						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="index.php">
								<i class="fas fa-home"></i>
								<p>Home</p>
							
							</a>
						</li>
						
							<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Website Theme</h4>
						</li>
							<li class="nav-item">
							<a href="templates.php">
						<img src="https://img.icons8.com/dotty/30/null/web.png"/>
								<p>&nbsp; Templates </p>
							
							</a>
						</li>
						
						<li class="nav-item">
							<a href="color.php">
							<img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/30/null/external-palette-fine-arts-kiranshastry-solid-kiranshastry.png"/>
								<p>&nbsp; Color</p>
							
							</a>
						</li>
						
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section"> Website Content</h4>
						</li>
					
						<li class="nav-item ">
							<a data-toggle="collapse" href="#base">
					<img src="https://img.icons8.com/wired/30/null/task--v3.png"/>
								<p> &nbsp; Conference </p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse ">
									<li class=" ">
										<a href="conference-details.php">
											<span class="sub-item"> Conference Details</span>
										</a>
									</li>
									
									<li >
										<a href="topics.php">
											<span class="sub-item">Topics</span>
										</a>
									</li>
									
										<li >
										<a href="publication-output.php">
											<span class="sub-item">Publication Output</span>
										</a>
									</li>
									
								
								</ul>
							</div>
						</li>
						
						
						
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
							<img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/30/null/external-conference-communication-kiranshastry-solid-kiranshastry-3.png"/>
								<p>&nbsp; Speakers</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
							<ul class="nav nav-collapse">
									<li>
										<a href="speakers.php?type=keynote">
											<span class="sub-item">Keynote</span>
										</a>
									</li>
									<li>
										<a href="speakers.php?type=invited">
											<span class="sub-item">Invited</span>
										</a>
									</li>
									<li>
										<a href="speakers.php?type=welcome">
											<span class="sub-item">Welcoming Speech</span>
										</a>
									</li>
									
								
								</ul>
							</div>
						</li>
						
						
							<li class="nav-item">
							<a href="important-dates.php">
							<img src="https://img.icons8.com/ios-filled/30/null/important-month.png"/>
							<p>&nbsp; Important Dates</p>
							
							</a>
						</li>
						
							<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts2">
							<img src="https://img.icons8.com/material-rounded/30/null/file--v2.png"/>
								<p>&nbsp; File Template</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts2">
							<ul class="nav nav-collapse">
									<li>
										<a href="file-template.php?type=abstract">
											<span class="sub-item">Abstract Template</span>
										</a>
									</li>
									<li>
										<a href="file-template.php?type=fullpaper">
											<span class="sub-item">Paper Template</span>
										</a>
									</li>
								
									
								
								</ul>
							</div>
						</li>
						
							<li class="nav-item">
							<a href="committee.php">
							<img src="https://img.icons8.com/external-smashingstocks-glyph-smashing-stocks/30/null/external-Committee-team-management-smashingstocks-glyph-smashing-stocks.png"/>
								<p>&nbsp; Committee</p>
							
							</a>
						</li>
						
							<li class="nav-item">
							<a href="pricing.php">
							<img src="https://img.icons8.com/ios-glyphs/30/null/price-tag-usd.png"/>
								<p>&nbsp; Pricing</p>
							
							</a>
						</li>
						
								<li class="nav-item">
							<a href="footer.php">
							<img src="https://img.icons8.com/windows/30/null/document-footer.png"/>
								<p>&nbsp; Footer</p>
							
							</a>
						</li>
						
							<li class="nav-item ">
							<a href="create-page.php">
						<img width="30" height="30" src="https://img.icons8.com/pastel-glyph/30/website--v1.png" alt="website--v1"/>
								<p>&nbsp;+ Add More Pages</p>
							
							</a>
						</li>
						
					
					
						
					
					
						<li class="mx-4 mt-2">
							<a target="_blank" href="<?php echo $website?>" class="btn btn-primary btn-block"><span class="btn-label mr-2"> <i class="fa fa-globe"></i> </span>Visit Website</a> 
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard Conference Website</h2>
								<h5 class="text-white op-7 mb-2"></h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
							
								<a target="_blank" href="<?php echo $website?>" class="btn btn-secondary btn-round">Visit Your Website</a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Progres Website</div>
									<div class="card-category"></div>
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-1">12</div>
											<h6 class="fw-bold mt-3 mb-0">Jumlah Konten</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-2"></div>
											<h6 class="fw-bold mt-3 mb-0">Sudah</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-3"></div>
											<h6 class="fw-bold mt-3 mb-0">Belum</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card full-height">
							<div class="card-body">
<div class="card-title">Informasi Conference </div>
<div class="card-category">Nama Conference : <?php echo $conf;?> <br> Conference Details :  <?php ?> <br/> Website :  <?php echo $website;?><br></div>
</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		
		</div>
		
	
	</div>
	<!--   Core JS Files   -->
	<script src="assetsdash/js/core/jquery.3.2.1.min.js"></script>
	<script src="assetsdash/js/core/popper.min.js"></script>
	<script src="assetsdash/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="assetsdash/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assetsdash/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="assetsdash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="assetsdash/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="assetsdash/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="assetsdash/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="assetsdash/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="assetsdash/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="assetsdash/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="assetsdash/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="assetsdash/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="assetsdash/js/atlantis.min.js"></script>

<?php
$valsum = 0;
 include "koneksi.php";
    $sql="select count(*) as total from conference_detail where conf='$conf'";
$result=mysqli_query($db,$sql);
$data2=mysqli_fetch_assoc($result);
$val1 =  $data2['total'];
if($val1 > 0){
    $valsum = $valsum+1;
}

    $sql="select count(*) as total from topics where conf='$conf'";
$result=mysqli_query($db,$sql);
$data2=mysqli_fetch_assoc($result);
$val1 =  $data2['total'];
if($val1 > 0){
    $valsum = $valsum+1;
}

  $sql="select count(*) as total from publication where conf='$conf'";
$result=mysqli_query($db,$sql);
$data2=mysqli_fetch_assoc($result);
$val1 =  $data2['total'];
if($val1 > 0){
    $valsum = $valsum+1;
}

  $sql="select count(*) as total from speakers where conf='$conf'";
$result=mysqli_query($db,$sql);
$data2=mysqli_fetch_assoc($result);
$val1 =  $data2['total'];
if($val1 > 0){
    $valsum = $valsum+1;
}


  $sql="select count(*) as total from important_dates where conf='$conf'";
$result=mysqli_query($db,$sql);
$data2=mysqli_fetch_assoc($result);
$val1 =  $data2['total'];
if($val1 > 0){
    $valsum = $valsum+1;
}

  $sql="select count(*) as total from template where conf='$conf'";
$result=mysqli_query($db,$sql);
$data2=mysqli_fetch_assoc($result);
$val1 =  $data2['total'];
if($val1 > 0){
    $valsum = $valsum+1;
}

  $sql="select count(*) as total from comite where conf='$conf'";
$result=mysqli_query($db,$sql);
$data2=mysqli_fetch_assoc($result);
$val1 =  $data2['total'];
if($val1 > 0){
    $valsum = $valsum+1;
}

  $sql="select count(*) as total from price where conf='$conf'";
$result=mysqli_query($db,$sql);
$data2=mysqli_fetch_assoc($result);
$val1 =  $data2['total'];
if($val1 > 0){
    $valsum = $valsum+1;
}

  $sql="select count(*) as total from footer where conf='$conf'";
$result=mysqli_query($db,$sql);
$data2=mysqli_fetch_assoc($result);
$val1 =  $data2['total'];
if($val1 > 0){
    $valsum = $valsum+1;
}

  $sql="select count(*) as total from poster where conf='$conf'";
$result=mysqli_query($db,$sql);
$data2=mysqli_fetch_assoc($result);
$val1 =  $data2['total'];
if($val1 > 0){
    $valsum = $valsum+1;
}

  $sql="select count(*) as total from logo where conf='$conf'";
$result=mysqli_query($db,$sql);
$data2=mysqli_fetch_assoc($result);
$val1 =  $data2['total'];
if($val1 > 0){
    $valsum = $valsum+1;
}

  $sql="select count(*) as total from background where conf='$conf'";
$result=mysqli_query($db,$sql);
$data2=mysqli_fetch_assoc($result);
$val1 =  $data2['total'];
if($val1 > 0){
    $valsum = $valsum+1;
}

$valsum2 = 12 - $valsum;

?>
	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:100,
			maxValue:100,
			width:7,
			text: '12',
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:100,
			maxValue:100,
			width:7,
			text: '<?php echo $valsum;?>',
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:100,
			maxValue:100,
			width:7,
			text: '<?php echo $valsum2;?>',
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
</body>
</html>