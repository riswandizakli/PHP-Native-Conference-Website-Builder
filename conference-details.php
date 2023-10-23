<?php
 require_once("auth.php");
 
 $tanggal = date("Y-m-d H:i:s");
function uploadProfile($leadid)
{
    
    $namaStmtFile = $_FILES['for5']['name'];
    $ukuranStmtFile = $_FILES['for5']['size'];
    $errorStmt = $_FILES['for5']['error'];
    $tmpStmtName = $_FILES['for5']['tmp_name'];

    // Check apakah yang diupload adalah File
    $ekstensiFileValid = ['png','jpeg'];
    
    //$ekstensiAppFile = explode('.', $namaAppFile);
    //$ekstensiAppFile = strtolower(end($ekstensiAppFile));
    $ekstensiStmtFile = explode('.', $namaStmtFile);
    $ekstensiStmtFile = strtolower(end($ekstensiStmtFile));
    
    //Lolos pengecekan , File siap di uplaod
    //Generate nama File baru
    
    $namaStmtFileBaru = $leadid.'_poster';//uniqid();
    $namaStmtFileBaru .= '.';
    $namaStmtFileBaru .= $ekstensiStmtFile;


$ekstensi_diperbolehkan	= array('jpg','png','jpeg');
			$nama = $_FILES['for5']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    move_uploaded_file($tmpStmtName, 'poster/' . $namaStmtFileBaru);
			}
			
    return $namaStmtFileBaru;
}

function uploadProfile2($leadid)
{
    
    $namaStmtFile = $_FILES['for5']['name'];
    $ukuranStmtFile = $_FILES['for5']['size'];
    $errorStmt = $_FILES['for5']['error'];
    $tmpStmtName = $_FILES['for5']['tmp_name'];

    // Check apakah yang diupload adalah File
    $ekstensiFileValid = ['png','jpeg'];
    
    //$ekstensiAppFile = explode('.', $namaAppFile);
    //$ekstensiAppFile = strtolower(end($ekstensiAppFile));
    $ekstensiStmtFile = explode('.', $namaStmtFile);
    $ekstensiStmtFile = strtolower(end($ekstensiStmtFile));
    
    //Lolos pengecekan , File siap di uplaod
    //Generate nama File baru
    
    $namaStmtFileBaru = $leadid.'_bg';//uniqid();
    $namaStmtFileBaru .= '.';
    $namaStmtFileBaru .= $ekstensiStmtFile;


$ekstensi_diperbolehkan	= array('jpg','png','jpeg');
			$nama = $_FILES['for5']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    move_uploaded_file($tmpStmtName, 'background/' . $namaStmtFileBaru);
			}
			
    return $namaStmtFileBaru;
}

function uploadProfile3($leadid)
{
    
    $namaStmtFile = $_FILES['for5']['name'];
    $ukuranStmtFile = $_FILES['for5']['size'];
    $errorStmt = $_FILES['for5']['error'];
    $tmpStmtName = $_FILES['for5']['tmp_name'];

    // Check apakah yang diupload adalah File
    $ekstensiFileValid = ['png','jpeg'];
    
    //$ekstensiAppFile = explode('.', $namaAppFile);
    //$ekstensiAppFile = strtolower(end($ekstensiAppFile));
    $ekstensiStmtFile = explode('.', $namaStmtFile);
    $ekstensiStmtFile = strtolower(end($ekstensiStmtFile));
    
    //Lolos pengecekan , File siap di uplaod
    //Generate nama File baru
    
    $namaStmtFileBaru = $leadid.'_bg';//uniqid();
    $namaStmtFileBaru .= '.';
    $namaStmtFileBaru .= $ekstensiStmtFile;


$ekstensi_diperbolehkan	= array('jpg','png','jpeg');
			$nama = $_FILES['for5']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    move_uploaded_file($tmpStmtName, 'logo/' . $namaStmtFileBaru);
			}
			
    return $namaStmtFileBaru;
}


 if(isset($_POST['uploadbg'])){
     require_once("config.php");
     
     $for1 = $conf;
     
 $profpic = uploadProfile2($for1.$tanggal);
 
  $sql = "INSERT INTO background (conf, image)
            VALUES (:satu, :dua)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":satu" => $for1,
        ":dua" => $profpic
        
       
      
       
       
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) {
         $message = 'Background Image Berhasil Ditambahkan';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('conference-details.php');
    </SCRIPT>";
    }
    
 
}

 if(isset($_POST['uploadposter'])){
     require_once("config.php");
     
     $for1 = $conf;
     
 $profpic = uploadProfile($for1.$tanggal);
 
  $sql = "INSERT INTO poster (conf, foto)
            VALUES (:satu, :dua)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":satu" => $for1,
        ":dua" => $profpic
        
       
      
       
       
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) {
         $message = 'Poster Berhasil Ditambahkan';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('conference-details.php');
    </SCRIPT>";
    }
    
 
}

 if(isset($_POST['uploadlogo'])){
     require_once("config.php");
     
     $for1 = $conf;
     
 $profpic = uploadProfile3($for1.$tanggal);
 
  $sql = "INSERT INTO logo (conf, image)
            VALUES (:satu, :dua)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":satu" => $for1,
        ":dua" => $profpic
        
       
      
       
       
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) {
         $message = 'Logo Berhasil Ditambahkan';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('conference-details.php');
    </SCRIPT>";
    }
    
 
}
 require_once("config.php");
 
 if(isset($_POST['updatezoom'])){
      $for1 = $conf;
        $for2 = filter_input(INPUT_POST, 'for2', FILTER_SANITIZE_STRING);
        
        
                                        include "koneksi.php";
                                          
                                           include "config.php";
        
         $sql = "UPDATE conference_detail set link_zoom=:dua where conf=:satu";
            
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":satu" => $for1,
        ":dua" => $for2
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) {
         $message = 'update detail conference berhasil';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('conference-details.php');
    </SCRIPT>";
    }
 
     
 }
 

 if(isset($_POST['updateregis'])){
      $for1 = $conf;
        $for2 = filter_input(INPUT_POST, 'for2', FILTER_SANITIZE_STRING);
        
        
                                        include "koneksi.php";
                                          
                                           include "config.php";
        
         $sql = "UPDATE conference_detail set link_regis=:dua where conf=:satu";
            
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":satu" => $for1,
        ":dua" => $for2
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) {
         $message = 'update detail conference berhasil';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('conference-details.php');
    </SCRIPT>";
    }
 
     
 }
  if(isset($_POST['updatewa'])){
       $for1 = $conf;
        $for2 = filter_input(INPUT_POST, 'for2', FILTER_SANITIZE_STRING);
        
        
                                        include "koneksi.php";
                                          
                                           include "config.php";
        
         $sql = "UPDATE conference_detail set grup_wa=:dua where conf=:satu";
            
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":satu" => $for1,
        ":dua" => $for2
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) {
         $message = 'update detail conference berhasil';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('conference-details.php');
    </SCRIPT>";
    }
      
 }
  if(isset($_POST['updatenumber'])){
       $for1 = $conf;
        $for2 = filter_input(INPUT_POST, 'for2', FILTER_SANITIZE_STRING);
        
        
                                        include "koneksi.php";
                                          
                                           include "config.php";
        
         $sql = "UPDATE conference_detail set admin_number=:dua where conf=:satu";
            
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":satu" => $for1,
        ":dua" => $for2
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) {
         $message = 'update detail conference berhasil';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('conference-details.php');
    </SCRIPT>";
    }
 }
 
  if(isset($_POST['updateemail'])){
       $for1 = $conf;
        $for2 = filter_input(INPUT_POST, 'for2', FILTER_SANITIZE_STRING);
        
        
                                        include "koneksi.php";
                                          
                                           include "config.php";
        
         $sql = "UPDATE conference_detail set admin_email=:dua where conf=:satu";
            
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":satu" => $for1,
        ":dua" => $for2
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) {
         $message = 'update detail conference berhasil';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('conference-details.php');
    </SCRIPT>";
    }
 }
 
 if(isset($_POST['tambah'])){
   require_once("config.php");
     
       $for1 = $conf;
             $for2 = filter_input(INPUT_POST, 'for2', FILTER_SANITIZE_STRING);
               $for3 = filter_input(INPUT_POST, 'for3', FILTER_SANITIZE_STRING);
                   $for4 = filter_input(INPUT_POST, 'for4', FILTER_SANITIZE_STRING);
                       $for5 = filter_input(INPUT_POST, 'for5', FILTER_SANITIZE_STRING);
                           $for6 = filter_input(INPUT_POST, 'for6', FILTER_SANITIZE_STRING);
                               $for7 = filter_input(INPUT_POST, 'for7', FILTER_SANITIZE_STRING);
                                  
                                       
                                        include "koneksi.php";
                                          
                                           include "config.php";
        
         $sql = "UPDATE conference_detail set singkat=:dua, lengkap=:tiga, tema=:empat, virtual=:lima, tanggal=:enam, about=:tuju where conf=:satu";
            
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":satu" => $for1,
        ":dua" => $for2,
        ":tiga" => $for3,
        ":empat" => $for4,
        ":lima" => $for5,
      	":enam" => $for6,
        ":tuju" => $for7
       
      
       
       
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) {
         $message = 'update detail conference berhasil';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('conference-details.php');
    </SCRIPT>";
    }
 
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Dashboard Cosite</title>
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
						<li class="nav-item ">
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
					
						<li class="nav-item active">
							<a data-toggle="collapse" href="#base">
					<img src="https://img.icons8.com/wired/30/null/task--v3.png"/>
								<p> &nbsp; Conference </p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="base">
								<ul class="nav nav-collapse ">
									<li class=" active">
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
									
											<li class=" ">
										<a href="conference-room.php">
											<span class="sub-item">Conference Room</span>
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
		
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Conference Information</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Conference Details</a>
							</li>
							
						</ul>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title"> Conference Details </div>
								</div>
							<div class="card-body">
								<div class="row">
								    <div class="col-md-12 col-lg-12">
								      <h2><b> </b></h2>
								      </div>
										<div class="col-md-6 col-lg-6">
										      <?php 
        include('config.php');
 
      $ses_sql = mysqli_query($koneksi,"select * from conference_detail where conf = '$conf' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
        ?>
										   <form class="form-login" method="POST" enctype="multipart/form-data" >
								<div class="form-group">
												<label for="email2">Nama Conference
</label>
												<input name="for2" type="text" class="form-control" id="email2" placeholder="IABC 2023" value="<?= $row["singkat"]; ?>">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
											
												<div class="form-group">
												<label for="email2">Nama Conference Lengkap
</label>
												<input name="for3" type="text" class="form-control" id="email2" placeholder="1st International Conference of (IABC) 2023" value="<?= $row["lengkap"]; ?>">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
										
											<div class="form-group">
												<label for="email2">Tema Conference
</label>
												<input name="for4" type="text" class="form-control" id="email2" placeholder="Tema Conference Anda" value="<?= $row["tema"]; ?>">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
											</div>
										
	<div class="col-md-6 col-lg-6">
												    	<div class="form-group">
												<label for="email2">Tipe Conference
</label>
												<select name="for5" type="text" class="form-control" id="email2" placeholder="">
												    <option value="Virtual">Virtual</option>
  <option value="Hybrid">Hybrid</option>
    <option value="On Site">On Site</option>
												    </select>
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
												    
												    		<div class="form-group">
												<label for="email2">Tanggal Conference
</label>
												<input name="for6" type="text" class="form-control" id="email2" placeholder="26 - 27 December 2023" value="<?= $row["tanggal"]; ?>">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
											
												<div class="form-group">
												<label for="email2">About / Introduction
</label>
												<textarea name="for7" type="text" class="form-control" id="email2" placeholder=""><?php echo $row["about"];?> </textarea>
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
											
												    </div>
												  
									</div>

							</div>
								<div class="card-action">
									<button type="submit" name="tambah" class="btn btn-success">Update</button>
									</form>
									<button class="btn btn-danger">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<h4 class="page-title mt-4">Conference Contact Details and Registration</h4>
						<div class="row">
						    	<div class="col-md-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title"> Conference Registration Link </div>
								</div>
							<div class="card-body">
								
								    <div class="col-md-12 col-lg-12">
								     
								      </div>
								
								      <center>
								        
								           <h2><b>  <?php echo $row["link_regis"];?> </b></h2>
								      </center>
								      
										 <form class="mt-4 ml-4 form-login" method="POST" enctype="multipart/form-data" >
								<div class="form-group">
												<label for="email2">Update Your Registration Link
</label>
												<input name="for2" type="text" class="form-control" value="<?php echo $row["link_regis"];?>">
												<Center>
													<button type="submit" name="updateregis" class="btn btn-success mt-4">Update</button>
													</Center>
									</form>
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
						
						</div>
					</div>
				</div>
				
				<div class="col-md-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title"> Conference Whatsapp Group </div>
								</div>
							<div class="card-body">
								
								    <div class="col-md-12 col-lg-12">
								     
								      </div>
								
								      <center>
								        
								           <h2><b>  <?php echo $row["grup_wa"];?> </b></h2>
								      </center>
								      
										 <form class="mt-4 ml-4 form-login" method="POST" enctype="multipart/form-data" >
								<div class="form-group">
												<label for="email2">Update Your Whatsapp Group Link
</label>
												<input name="for2" type="text" class="form-control" value="<?php echo $row["grup_wa"];?>">
												<Center>
													<button type="submit" name="updatewa" class="btn btn-success mt-4">Update</button>
													</Center>
									</form>
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
						
						</div>
					</div>
				</div>
				
					<div class="col-md-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Admin Contact Number </div>
								</div>
							<div class="card-body">
								
								    <div class="col-md-12 col-lg-12">
								     
								      </div>
								
								      <center>
								        
								           <h2><b>  <?php echo $row["admin_number"];?> </b></h2>
								      </center>
								      
										 <form class="mt-4 ml-4 form-login" method="POST" enctype="multipart/form-data" >
								<div class="form-group">
												<label for="email2">Update Your Admin Contact Number
</label>
												<input name="for2" type="text" class="form-control" value="<?php echo $row["admin_number"];?>">
												<Center>
													<button type="submit" name="updatenumber" class="btn btn-success mt-4">Update</button>
													</Center>
									</form>
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
						
						</div>
					</div>
				</div>
				
				<div class="col-md-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Admin Email Contact </div>
								</div>
							<div class="card-body">
								
								    <div class="col-md-12 col-lg-12">
								     
								      </div>
								
								      <center>
								        
								           <h2><b>  <?php echo $row["admin_email"];?> </b></h2>
								      </center>
								      
										 <form class="mt-4 ml-4 form-login" method="POST" enctype="multipart/form-data" >
								<div class="form-group">
												<label for="email2">Update Your Admin Email Contact
</label>
												<input name="for2" type="text" class="form-control" value="<?php echo $row["admin_email"];?>">
												<Center>
													<button type="submit" name="updateemail" class="btn btn-success mt-4">Update</button>
													</Center>
									</form>
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
						
						</div>
					</div>
				</div>
				
				
						    </div>
						    		<h4 class="page-title mt-4"> Conference Image </h4>
						    		
					<div class="row">
					    
						<div class="col-md-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title"> Conference Image Background </div>
								</div>
							<div class="card-body">
								
								    <div class="col-md-12 col-lg-12">
								     
								      </div>
								      <?php 
        include('config.php');
 
      $ses_sql = mysqli_query($koneksi,"select * from background where conf = '$conf' order by id desc");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
        ?>
								      <center>
								          <img style="width:300px;" class="w-0" src="background/<?= $row["image"]; ?>" alt="First slide">
								           <h2><b>  Image Background </b></h2>
								      </center>
								      
										 <form class="mt-4 ml-4 form-login" method="POST" enctype="multipart/form-data" >
								<div class="form-group">
												<label for="email2">Update Your Background Here
</label>
												<input name="for5" type="file" class="form-control">
												<Center>
													<button type="submit" name="uploadbg" class="btn btn-success mt-4">Update</button>
													</Center>
									</form>
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
						
						</div>
					</div>
				</div>
				
					<div class="col-md-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title"> Conference Poster </div>
								</div>
							<div class="card-body">
							
								   
								      <?php 
        include('config.php');
 
      $ses_sql = mysqli_query($koneksi,"select * from poster where conf = '$conf' order by id desc");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
        ?>
								      <center>
								          <img style="width:300px;" src="poster/<?= $row["foto"]; ?>" alt="First slide">
								           <h2><b> <?php echo $conf;?> Posters </b></h2>
								      </center>
								      
										 <form class="mt-4 ml-4 form-login" method="POST" enctype="multipart/form-data" >
								<div class="form-group">
												<label for="email2">Update Your Poster Here
</label>
												<input name="for5" type="file" class="form-control">
													<Center>
													<button type="submit" name="uploadposter" class="btn btn-success mt-4">Update</button>
														</Center>
									</form>
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
						
						</div>
					</div>
				</div>
				
					<div class="col-md-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title"> Conference Logo </div>
								</div>
							<div class="card-body">
							
								   
								      <?php 
        include('config.php');
 
      $ses_sql = mysqli_query($koneksi,"select * from logo where conf = '$conf' order by id desc");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
        ?>
								      <center>
								          <img style="width:300px;" src="logo/<?= $row["image"]; ?>" alt="First slide">
								           <h2><b> Logo </b></h2>
								      </center>
								      
										 <form class="mt-4 ml-4 form-login" method="POST" enctype="multipart/form-data" >
								<div class="form-group">
												<label for="email2">Update Your Logo Here
</label>
												<input name="for5" type="file" class="form-control">
													<Center>
													<button type="submit" name="uploadlogo" class="btn btn-success mt-4">Update</button>
														</Center>
									</form>
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
						
						</div>
					</div>
				</div>
				
			</div>
			<footer class="footer">
				
			</footer>
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
	<!-- Atlantis JS -->
	<script src="assetsdash/js/atlantis.min.js"></script>

</body>
</html>