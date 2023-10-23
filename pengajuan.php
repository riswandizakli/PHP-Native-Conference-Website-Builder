<?php
 require_once("auth.php");
$idmap = $_GET['type'];
if($idmap != 'Tanah Wakaf' and $idmap != 'Tanah Hibah' and $idmap != 'Tanah Waris' and $idmap != 'Jual Beli'){
    
    echo "<script>window.location = 'pengajuan.php?type=Tanah Wakaf'</script>";

}

 if(isset($_POST['tambah'])){
   require_once("config.php");
     
       $for1 = $aidi;
           $for2 = $idmap;
               $for3 = filter_input(INPUT_POST, 'for3', FILTER_SANITIZE_STRING);
                   $for4 = filter_input(INPUT_POST, 'for4', FILTER_SANITIZE_STRING);
                       $for5 = filter_input(INPUT_POST, 'for5', FILTER_SANITIZE_STRING);
                           $for6 = filter_input(INPUT_POST, 'for6', FILTER_SANITIZE_STRING);
                               $for7 = filter_input(INPUT_POST, 'for7', FILTER_SANITIZE_STRING);
                                   $for8 = filter_input(INPUT_POST, 'for8', FILTER_SANITIZE_STRING);
                                     $for9 = filter_input(INPUT_POST, 'for9', FILTER_SANITIZE_STRING);
                                     $for10 = filter_input(INPUT_POST, 'for10', FILTER_SANITIZE_STRING);
                                     $for11 = filter_input(INPUT_POST, 'for11', FILTER_SANITIZE_STRING);
                                     $for12 = filter_input(INPUT_POST, 'for12', FILTER_SANITIZE_STRING);
                                     $for13 = filter_input(INPUT_POST, 'for13', FILTER_SANITIZE_STRING);
                                     $for14 = filter_input(INPUT_POST, 'for14', FILTER_SANITIZE_STRING);
                                     $for15 = filter_input(INPUT_POST, 'for15', FILTER_SANITIZE_STRING);
                                     $for16 = filter_input(INPUT_POST, 'for16', FILTER_SANITIZE_STRING);
                                     $for17 = filter_input(INPUT_POST, 'for17', FILTER_SANITIZE_STRING);
                                     $for18 = filter_input(INPUT_POST, 'for18', FILTER_SANITIZE_STRING);
                                     $for19 = filter_input(INPUT_POST, 'for19', FILTER_SANITIZE_STRING);
                                     $for20 = filter_input(INPUT_POST, 'for20', FILTER_SANITIZE_STRING);
                                       $for21 = filter_input(INPUT_POST, 'for21', FILTER_SANITIZE_STRING);
                                       
                                        include "koneksi.php";
                                          
                                           include "config.php";
        
         $sql = "INSERT INTO pengajuan (id_pemilik, tipe, nama, nik, alamat, rt_rw_bidang, tempat_lahir, tanggal_lahir, alamat_bidang, no_persil, letter_c, kelas, bukti_surat, tanggal_kepemilikan, selaku, oleh_nama, cara, surat, pembuatan, luas_tanah, blok_tanah)
            VALUES (:satu, :dua, :tiga, :empat, :lima, :enam, :tuju, :lapan, :bilan, :puluh, :belas, :duab, :tigab, :empatb, :limab, :enamb, :tujub, :lapanb, :bilanb, :luas, :blok)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":satu" => $for1,
        ":dua" => $for2,
        ":tiga" => $for3,
        ":empat" => $for4,
        ":lima" => $for5,
      	":enam" => $for6,
        ":tuju" => $for7,
        ":lapan" => $for8,
        ":bilan" => $for9,
        ":puluh" => $for10,
        ":belas" => $for11,
        ":duab" => $for12,
        ":tigab" => $for13,
        ":empatb" => $for14,
        ":limab" => $for15,
      	":enamb" => $for16,
        ":tujub" => $for17,
        ":lapanb" => $for18,
         ":bilanb" => $for19,
             ":luas" => $for20,
                 ":blok" => $for21
      
       
       
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) {
         $message = 'Pengajuan transaksi berhasil dilakukan, selanjutnya mohon tunggu konfirmasi pengajuan anda.';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('login.php');
    </SCRIPT>";
    }
 
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Pertanahan Ciseeng</title>
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
				    <img src="https://diskominfo.bogorkab.go.id/wp-content/uploads/2017/02/cropped-logo-pemkab-bogor.png" width="50">
					<img src="https://rekreartive.com/wp-content/uploads/2018/11/Logo-Yarsi-Universitas-Yarsi-Original-PNG.png" alt="navbar brand" class="navbar-brand" width="120">
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
									<?php echo $nama;?>
									<span class="user-level"><?php echo $pekerjaan;?></span>
								
								</span>
							</a>
						

						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a href="index.php">
								<i class="fas fa-home"></i>
								<p>Home</p>
							
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Fitur</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Informasi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="informasi-pengajuan.php">
											<span class="sub-item">List Pengajuan Anda</span>
										</a>
									</li>
									
									<li >
										<a href="bidang-tanah.php">
											<span class="sub-item">Informasi Bidang Tanah Anda</span>
										</a>
									</li>
								
								</ul>
							</div>
						</li>
						<li class="nav-item active submenu">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-th-list"></i>
								<p>Pengajuan Transaksi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li <?php if($idmap == 'Tanah Wakaf'){
									    echo 'class="active"';
									}
									?> >
										<a href="pengajuan.php?type=Tanah Wakaf">
											<span class="sub-item">Tanah Wakaf</span>
										</a>
									</li>
									<li <?php if($idmap == 'Tanah Hibah'){
									    echo 'class="active"';
									}
									?> >
										<a href="pengajuan.php?type=Tanah Hibah">
											<span class="sub-item">Tanah Hibah</span>
										</a>
									</li>
								<li <?php if($idmap == 'Tanah Waris'){
									    echo 'class="active"';
									}
									?> >
										<a href="pengajuan.php?type=Tanah Waris">
											<span class="sub-item">Tanah Waris</span>
										</a>
									</li>
								<li <?php if($idmap == 'Jual Beli'){
									    echo 'class="active"';
									}
									?> >
										<a href="pengajuan.php?type=Jual Beli">
											<span class="sub-item">Jual Beli</span>
										</a>
									</li>
								
								</ul>
							</div>
						</li>
						
						
						
						
							<li class="nav-item">
							<a href="surat-tanah.php">
								<i class="fas fa-desktop"></i>
								<p>Cek Surat Tanah</p>
							
							</a>
						</li>
					
					
						
					
					
						<li class="mx-4 mt-2">
							<a href="https://wa.me/+6281275915940" class="btn btn-primary btn-block"><span class="btn-label mr-2"> <i class="fa fa-phone"></i> </span>Hubungi Kami</a> 
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Pengajuan</h4>
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
								<a href="#">Transaksi</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#"><?php echo $idmap;?></a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Pengajuan Transaksi <?php echo $idmap;?></div>
								</div>
							<div class="card-body">
								<div class="row">
								    <div class="col-md-12 col-lg-12">
								      <h2><b>Pemilik Tanah</b></h2>
								      </div>
										<div class="col-md-6 col-lg-6">
										   <form class="form-login" method="POST" enctype="multipart/form-data" >
								<div class="form-group">
												<label for="email2">Nama Pemilik Tanah
</label>
												<input name="for3" type="text" class="form-control" id="email2" placeholder="Masukan nama pemilik tanah ">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
											
												<div class="form-group">
												<label for="email2">NIK
</label>
												<input name="for4" type="text" class="form-control" id="email2" placeholder="Masukan NIK pemilik tanah ">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
										
											<div class="form-group">
												<label for="email2">Tempat Lahir
</label>
												<input name="for7" type="text" class="form-control" id="email2" placeholder="Masukan tempat lahir pemilik tanah ">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
											</div>
										
	<div class="col-md-6 col-lg-6">
												    	<div class="form-group">
												<label for="email2">Alamat Lengkap (KTP)
</label>
												<input name="for5" type="text" class="form-control" id="email2" placeholder="Masukan alamat lengkap pemilik tanah">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
												    	<div class="form-group">
												<label for="email2">RT/RW Bidang
</label>
												<input name="for6" type="text" class="form-control" id="email2" placeholder="RT 005 / RW 017">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
												
												    	<div class="form-group">
												<label for="email2">Tanggal Lahir
</label>
												<input name="for8"  type="date" class="form-control" id="email2" placeholder="">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
												    </div>
												     <div class="col-md-12 col-lg-12">
												         <br/>
												      <h2><b>Detail Tanah</b></h2>
												      </div>
												    <div class="col-md-6 col-lg-4">
										  
								<div class="form-group">
												<label for="email2">Alamat Bidang
</label>
												<input name="for9" type="text" class="form-control" id="email2" placeholder="Masukan alamat bidang tanah ">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
											
												<div class="form-group">
												<label for="email2">Letter C
</label>
												<input name="for11" type="text" class="form-control" id="email2" placeholder="493">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
										
										
											</div>
											
											 <div class="col-md-6 col-lg-4">
											     <div class="form-group">
												<label for="email2">No Persil
</label>
												<input name="for10" type="text" class="form-control" id="email2" placeholder="51">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
											<div class="form-group">
												<label for="email2">Kelas
</label>
												<input name="for12" type="text" class="form-control" id="email2" placeholder="D.II">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
												   	</div> 
												   	
												   													         <div class="col-md-12 col-lg-12">
												         <br/>
												      <h2><b>Detail Kepemilikan</b></h2>
												      </div>
												    <div class="col-md-6 col-lg-4">
										  
								<div class="form-group">
												<label for="email2">Bukti Surat/Hanya
</label>
												<input name="for13" type="text" class="form-control" id="email2" placeholder="Masukan bukti ">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
											
												<div class="form-group">
												<label for="email2">Tanggal Kepemilikan
</label>
												<input name="for14" type="text" class="form-control" id="email2" placeholder="Masukan Tanggal">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
												<div class="form-group">
												<label for="email2">Selaku
</label>
												<input name="for15" type="text" class="form-control" id="email2" placeholder="Nama">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
											
												<div class="form-group">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text">Luas Tanah</span>
													</div>
													<input name="for20" type="text" class="form-control" aria-label="m2">
													<div class="input-group-append">
														<span class="input-group-text">Meter</span>
													</div>
												</div>
											</div>
											
												<div class="form-group">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text">Blok Tanah</span>
													</div>
													<input name="for21" type="text" class="form-control" aria-label="m2">
													
												</div>
											</div>
											
											
											
										
										
										
										
										
											</div>
											
											 <div class="col-md-6 col-lg-4">
											     <div class="form-group">
												<label for="email2">Oleh Nama
</label>
												<input name="for16" type="text" class="form-control" id="email2" placeholder="Masukan nama">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
											<div class="form-group">
												<label for="email2">Cara
</label>
												<input name="for17" type="text" class="form-control" id="email2" placeholder="JUAL BELI">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
											
											<div class="form-group">
												<label for="email2">Surat
</label>
												<input name="for18" type="text" class="form-control" id="email2" placeholder="Akta Jual Beli">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
											<div class="form-group">
												<label for="email2">Pembuatan
</label>
												<input name="for19" type="text" class="form-control" id="email2" placeholder="24-06-2021">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
											
											</div>
											
											<!--
											 <div class="col-md-6 col-lg-4">
											     <div class="form-group">
												<label for="email2">Oleh Nama 2
</label>
												<input type="email" class="form-control" id="email2" placeholder="Masukan nama">
										
											</div>
											<div class="form-group">
												<label for="email2">Cara 2
</label>
												<input type="email" class="form-control" id="email2" placeholder="JUAL BELI
">
										
											</div>
											
											<div class="form-group">
												<label for="email2">Surat 2
</label>
												<input type="email" class="form-control" id="email2" placeholder="AKTA JUAL BELI
">
										
											</div>
											<div class="form-group">
												<label for="email2">Pembuatan 2
</label>
												<input type="email" class="form-control" id="email2" placeholder="24-06-2021
">
										
											</div>
											
											</div>
											
											-->
											
											
											<!--
											 <div class="col-md-12 col-lg-12">
												         <br/>
												      <h2><b>Area Kepemilikan</b></h2>
												      </div>
												    <div class="col-md-6 col-lg-4">
										  
								<div class="form-group">
												<label for="email2">Utara
</label>
												<input type="email" class="form-control" id="email2" placeholder="Masukan nama pemilik utara">
										
											</div>
											
												<div class="form-group">
												<label for="email2">TIMUR

</label>
												<input type="email" class="form-control" id="email2" placeholder="Masukan nama pemilik timur">
										
											</div>
												</div>
											 <div class="col-md-6 col-lg-4">
												<div class="form-group">
												<label for="email2">SELATAN

</label>
												<input type="email" class="form-control" id="email2" placeholder="Masukan nama pemilik selatan">
										
											</div>
											
											<div class="form-group">
												<label for="email2">BARAT


</label>
												<input type="email" class="form-control" id="email2" placeholder="Masukan nama pemilik barat">
										
											</div>
											
										
										
											</div>
											
											<div class="col-md-6 col-lg-4">
												<div class="form-group">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text">Luas Tanah</span>
													</div>
													<input type="text" class="form-control" aria-label="m2">
													<div class="input-group-append">
														<span class="input-group-text">Meter</span>
													</div>
												</div>
											</div>
											
											
											
										
										
											</div>
											-->
											
											
											
											
											<!--	<div class="col-md-6 col-lg-4">
									<div class="form-check">
												<label>Gender</label><br/>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="optionsRadios" value=""  checked="">
													<span class="form-radio-sign">Male</span>
												</label>
												<label class="form-radio-label ml-3">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="">
													<span class="form-radio-sign">Female</span>
												</label>
											</div>

											<div class="form-group">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text">Lebar Tanah</span>
													</div>
													<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
													<div class="input-group-append">
														<span class="input-group-text">/meter</span>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa fa-user"></i>
													</span>
													<input type="text" class="form-control" placeholder="Nama Pengaju">
												</div>
											</div>

											<div class="form-group">
												<label class="form-label">Tipe Tanah</label>
												<div class="selectgroup w-100">
													<label class="selectgroup-item">
														<input type="radio" name="value" value="50" class="selectgroup-input" checked="">
														<span class="selectgroup-button">S</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="value" value="100" class="selectgroup-input">
														<span class="selectgroup-button">M</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="value" value="150" class="selectgroup-input">
														<span class="selectgroup-button">L</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="value" value="200" class="selectgroup-input">
														<span class="selectgroup-button">XL</span>
													</label>
												</div>
											</div>

											<div class="form-group form-group-default">
												<label>Jumlah Pemilik</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>

											</div> -->
									</div>

							</div>
								<div class="card-action">
									<button type="submit" name="tambah" class="btn btn-success">Submit</button>
									</form>
									<button class="btn btn-danger">Cancel</button>
								</div>
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