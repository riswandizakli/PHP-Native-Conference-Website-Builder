<?php
require_once("auth-admin.php");

$heart = filter_input(INPUT_POST, 'aidi', FILTER_SANITIZE_STRING);
$lucar = $heart;

session_start();
if (!isset($_SESSION['aidi'])) {
    $_SESSION['aidi'] = $lucar;
} else {
    $lucar = $_SESSION['aidi'];
}


 if(isset($_POST['tambah'])){
     
  
    
     
       $for1 = filter_input(INPUT_POST, 'for1', FILTER_SANITIZE_STRING);
           $for2 = filter_input(INPUT_POST, 'for2', FILTER_SANITIZE_STRING);
               $for3 = filter_input(INPUT_POST, 'for3', FILTER_SANITIZE_STRING);
                   $for4 = filter_input(INPUT_POST, 'for4', FILTER_SANITIZE_STRING);
                       $for5 = filter_input(INPUT_POST, 'for5', FILTER_SANITIZE_STRING);
                           $for6 = filter_input(INPUT_POST, 'for6', FILTER_SANITIZE_STRING);
                               $for7 = filter_input(INPUT_POST, 'for7', FILTER_SANITIZE_STRING);
                                   $for8 = filter_input(INPUT_POST, 'for8', FILTER_SANITIZE_STRING);
                                    
                                       
                                        include "koneksi.php";
                                          
         
         
            include "config.php";
           // menyiapkan query
        $laso = $lucar;
  $sql = "UPDATE pemilik_tanah SET nama_lengkap=:satu, nik=:dua, jenis_kelamin=:tiga, pekerjaan=:empat, tempat_tanggal_lahir=:lima, alamat_domisili=:enam, nomor_hp=:tuju, username=:lapan WHERE id='$laso'";
        
     
        
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
        ":lapan" => $for8
      
       
      
      
      
       
       
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) {
         $message = 'Edit pemilik tanah berhasil';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('admin-list-pemilik.php');
    </SCRIPT>";
    }
 }


 if(isset($_POST['remove'])){

  
  	
include "koneksi.php"; // Using database connection file here
 $kode = filter_input(INPUT_POST, 'aidi', FILTER_SANITIZE_STRING);  
 
$records = mysqli_query($db, "DELETE from pemilik_tanah where id='$kode'");

if ($records){
 

    $message = 'Pemilik tanah berhasil dihapus dari sistem';

    echo "<SCRIPT> //not showing me this
        alert('$message')
       window.location.replace('admin-list-pemilik.php');
    </SCRIPT>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Sistem Pertanahan Ciseeng <?php echo $lucar;?></title>
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
				
				<a href="index.html" class="logo">
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
							<a href="logout-admin.php" class="btn btn-danger">Logout</a>
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
									ADMIN
									<span class="user-level">Dashboard Admin</span>
								
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
							
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item ">
							<a href="admin.php">
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
						<li class="nav-item active">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Informasi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="base">
									<ul class="nav nav-collapse">
									    	<li >
							
										<a href="full-tanah.php">
											<span class="sub-item">Informasi Tanah Full</span>
										</a>
									</li>
									
									<li >
										<a href="admin-list-bidang.php">
											<span class="sub-item">List Bidang Tanah</span>
										</a>
									</li>
									<li class="active">
										<a href="admin-list-pemilik.php">
											<span class="sub-item">List Pemilik Tanah</span>
										</a>
									</li>
										<li>
										<a href="admin-list-surat.php">
											<span class="sub-item">List Surat Tanah</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-th-list"></i>
								<p>List Transaksi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
									<a href="admin-list-transaksi.php?type=Tanah Wakaf">
											<span class="sub-item">Tanah Wakaf</span>
										</a>
									</li>
									<li>
									<a href="admin-list-transaksi.php?type=Tanah Hibah">
											<span class="sub-item">Tanah Hibah</span>
										</a>
									</li>
									<li>
									<a href="admin-list-transaksi.php?type=Tanah Waris">
											<span class="sub-item">Tanah Waris</span>
										</a>
									</li>
									<li>
										<a href="admin-list-transaksi.php?type=Penyewaan Tanah">
											<span class="sub-item">Penyewaan Tanah</span>
										</a>
									</li>
								
								</ul>
							</div>
						</li>
						
						<li class="nav-item">
							<a href="admin-list-pengajuan.php">
								<i class="fas fa-user"></i>
								<p>Pengajuan Akun </p>
							
							</a>
						</li>
						
					<li class="nav-item">
						<a href="admin-list-contact.php">
								<i class="fa fa-phone"></i>
								<p>List Form Hubungi Kami </p>
							
							</a>
						</li>
						
						
					
					
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data List Pemilik Tanah</h4>
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
								<a href="#">Data List</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Pemilik Tanah</a>
							</li>
						</ul>
					</div>
					<div class="row">
						

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
								    	<div class="row mt--2">
						<div class="col-md-9">
						    	<h4 class="card-title">Edit Biodata Pemilik Tanah Ciseeng</h4><br/>
						    </div>
						    
						    
						    
						    </div>
								
									
								</div>
								<div class="card-body">
								    <?php 
                         
                                             include "koneksi.php";
                                          
                                            $records = mysqli_query($db, "SELECT * FROM pemilik_tanah where id ='$lucar'");
      $count = 1;
           $data = mysqli_fetch_array($records);
            $cat2 =  $data['jenis_kelamin']; 
           ?>
								  <form class="form-login" method="POST" enctype="multipart/form-data" >
                <div class="mb-3">
                  <label for="email" class="form-label">Nama Lengkap</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="for1"
                    placeholder="Masukan nama lengkap anda"
                    value="<?php echo $data['nama_lengkap']; ?>"
                    autofocus
                  />
                </div>
                
                <div class="mb-3">
                  <label for="email" class="form-label">NIK </label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="for2"
                    placeholder="Masukan NIK anda"
                    autofocus
                    value="<?php echo $data['nik']; ?>"
                  />
                </div>
                <div class="mb-3">
												<label for="exampleFormControlSelect1">Jenis Kelamin</label>
												<select name="for3" class="form-control" id="exampleFormControlSelect1">
												     <option disabled selected> -- Pilih Jenis Kelamin -- </option>
													 <option  <?php if($cat2 == 'Laki - Laki'){echo 'selected';}?>>Laki - Laki</option>
														 <option  <?php if($cat2 == 'Perempuan'){echo 'selected';}?>>Perempuan</option>
												
												</select>
												
											</div>
								<div class="mb-3">
                  <label for="email" class="form-label">Pekerjaan </label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="for4"
                    placeholder="Masukan Pekerjaan Anda"
                    autofocus
                    value="<?php echo $data['pekerjaan']; ?>"
                  />
                </div>	
                
                <div class="mb-3">
                  <label for="email" class="form-label">Tempat Tanggal Lahir </label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="for5"
                    placeholder="Jakarta, 31-12-2000"
                    autofocus
                    value="<?php echo $data['tempat_tanggal_lahir']; ?>"
                  />
                </div>	
						
						<div class="mb-3">
                  <label for="email" class="form-label">Alamat Domisili </label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="for6"
                    placeholder="Masukan Alamat Domisili anda"
                    autofocus
                    value="<?php echo $data['alamat_domisili']; ?>"
                  />
                </div>	
                
                <div class="mb-3">
                  <label for="email" class="form-label">Nomor HP </label>
                  <input
                    type="number"
                    class="form-control"
                    id="email"
                    name="for7"
                    placeholder="Masukan Nomor HP anda"
                    autofocus
                    value="<?php echo $data['nomor_hp']; ?>"
                  />
                </div>	
						
						 
									
					<p class="mt-3">Akun Untuk Login</p>	
					
					  <div class="mb-3">
                  <label for="email" class="form-label">Username </label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="for8"
                    placeholder="Masukan Username anda"
                    autofocus
                    value="<?php echo $data['username']; ?>"
                  />
                </div>	
                
               
                <div class="mb-3">
                  <button type="submit" name="tambah" class="btn btn-primary d-grid w-100" type="submit">Edit </button>
                </div>
              </form>
								
								
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
	<!-- Datatables -->
	<script src="assetsdash/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="assetsdash/js/atlantis.min.js"></script>

	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>
</html>