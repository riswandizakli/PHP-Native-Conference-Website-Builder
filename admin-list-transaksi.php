<?php 
require_once("auth-admin.php");

$idmap = $_GET['type'];

 if($idmap != 'Tanah Wakaf' and $idmap != 'Tanah Hibah' and $idmap != 'Tanah Waris' and $idmap != 'Jual Beli'){
    
    echo "<script>window.location = 'admin-list-transaksi.php?type=Tanah Wakaf'</script>";

}
if(isset($_POST['header'])){

  
  	
include "koneksi.php"; // Using database connection file here
 $kode = filter_input(INPUT_POST, 'aidi', FILTER_SANITIZE_STRING);  
 
$records = mysqli_query($db, "UPDATE pemilik_tanah SET status_akun ='1' where id='$kode'");

if ($records){
 

    $message = 'Pemilik tanah berhasil diverifikasi';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('admin-list-pengajuan.php');
    </SCRIPT>";
}
}

if(isset($_POST['remove'])){

  
  	
include "koneksi.php"; // Using database connection file here
 $kode = filter_input(INPUT_POST, 'aidi', FILTER_SANITIZE_STRING);  
 
$records = mysqli_query($db, "DELETE from pemilik_tanah where id='$kode'");

if ($records){
 

    $message = 'Request Pemilik tanah berhasil dihapus dari sistem';

    echo "<SCRIPT> //not showing me this
        alert('$message')
       window.location.replace('admin-list-pengajuan.php');
    </SCRIPT>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Sistem Pertanahan Ciseeng</title>
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
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
						<li class="nav-item ">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Informasi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
									<ul class="nav nav-collapse">
									<li >
										<a href="full-tanah.php">
											<span class="sub-item">Informasi Tanah Full</span>
										</a>
									</li>
										<li>
										<a href="admin-list-bidang.php">
											<span class="sub-item">List Bidang Tanah</span>
										</a>
									</li>
									<li>
										<a href="admin-list-pemilik.php">
											<span class="sub-item">List Pemilik Tanah</span>
										</a>
									</li>
								
										<li >
										<a href="admin-list-surat.php">
											<span class="sub-item">List Surat Tanah</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item active">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-th-list"></i>
								<p>List Transaksi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="sidebarLayouts">
								<ul class="nav nav-collapse">
								<li <?php if($idmap == 'Tanah Wakaf'){
									    echo 'class="active"';
									}
									?> >
										<a href="admin-list-transaksi.php?type=Tanah Wakaf">
											<span class="sub-item">Tanah Wakaf</span>
										</a>
									</li>
									<li <?php if($idmap == 'Tanah Hibah'){
									    echo 'class="active"';
									}
									?> >
										<a href="admin-list-transaksi.php?type=Tanah Hibah">
											<span class="sub-item">Tanah Hibah</span>
										</a>
									</li>
								<li <?php if($idmap == 'Tanah Waris'){
									    echo 'class="active"';
									}
									?> >
										<a href="admin-list-transaksi.php?type=Tanah Waris">
											<span class="sub-item">Tanah Waris</span>
										</a>
									</li>
								<li <?php if($idmap == 'Jual Beli'){
									    echo 'class="active"';
									}
									?> >
										<a href="admin-list-transaksi.php?type=Jual Beli">
											<span class="sub-item">Jual Beli</span>
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
						<h4 class="page-title"> List Pengajuan Transaksi</h4>
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
								<a href="#">Pengajuan Transaksi</a>
							</li>
						</ul>
					</div>
					<div class="row">
						

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
								    	<div class="row mt--2">
						<div class="col-md-9">
						    	<h4 class="card-title">List Pengajuan Transaksi</h4><br/>
						    </div>
						    
						    	<div class="col-md-3">
						    	    	<a href="export-excel-pengajuan.php" class="btn btn-secondary btn-round"><b>></b> Export Data Ke Excel</a>
						    </div>
						    
						    </div>
								
									
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="multi-filter-select" class="display table table-striped table-hover" >
											<thead>
												<tr>
												     <th>No.</th>
												    	<th>Tipe</th>
													<th>Nama</th>
													<th>NIK </th>
													<th>Alamat</th>
													<th>RT RW Bidang</th>
													<th>Tempat Tanggal Lahir</th>
														<th>Alamat Bidang</th>
													<th>No Persil</th>
														<th>Letter C</th>
															<th>Kelas</th>
																<th>Detail Kepemilikan</th>
													<th>Status</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
												     <th>No.</th>
												    	<th>Tipe</th>
													<th>Nama</th>
													<th>NIK </th>
													<th>Alamat</th>
													<th>RT RW Bidang</th>
													<th>Tempat Tanggal Lahir</th>
														<th>Alamat Bidang</th>
													<th>No Persil</th>
														<th>Letter C</th>
															<th>Kelas</th>
																<th>Detail Kepemilikan</th>
													<th>Status</th>
													
												</tr>
											</tfoot>
											<tbody>
											    <?php 
                                             include "koneksi.php";
                                          
                                            $records = mysqli_query($db, "SELECT * FROM pengajuan where tipe ='$idmap'");
      $count = 1;
            while ($data = mysqli_fetch_array($records)) : ?>
												<tr>
												     <td><?php echo $count;?></td>
													<td><?php echo $data['tipe']; ?></td>
													<td><?php echo $data['nama']; ?></td>
													<td><?php echo $data['nik']; ?></td>
													<td><?php echo $data['alamat']; ?></td>
														<td><?php echo $data['rt_rw_bidang']; ?></td>
													<td><?php echo $data['tempat_lahir']; ?>, <?php echo $data['tanggal_lahir']; ?></td>
														<td><?php echo $data['alamat_bidang']; ?></td>
														<td><?php echo $data['no_persil']; ?></td>
															<td><?php echo $data['letter_c']; ?></td>
																<td><?php echo $data['kelas']; ?></td>
														
														     
                                                   
                                                 
														   	<td><button onclick="document.getElementById('<?php echo $data['id'];?>').style.display='block'" class="btn btn-success">Buka Detail</button></td>
														


											

  <div id="<?php echo $data['id'];?>" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('<?php echo $data['id'];?>').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <center><h1><b>Detail Kepemilikan Tanah </b></h1></center>
        <br/>
          <h3>Bukti Surat : <b><?php echo $data['bukti_surat'];?></b></h3>
           <h3>Tanggal Kepemilikan : <b><?php echo $data['tanggal_kepemilikan'];?></b></h3>
            <h3>Selaku : <b><?php echo $data['selaku'];?></b></h3>
             <h3>Oleh Nama : <b><?php echo $data['oleh_nama'];?></b></h3>
              <h3>Cara : <b><?php echo $data['cara'];?></b></h3>
               <h3>Surat : <b><?php echo $data['surat'];?></b></h3>
                <h3>Pembuatan : <b><?php echo $data['pembuatan'];?></b></h3>
           <h3>Luas Tanah : <b><?php echo $data['luas_tanah'];?></b></h3>
            <h3>Blok Tanah : <b><?php echo $data['blok_tanah'];?></b></h3>
          <br/>
          
           
      
      </div>
    </div>
  </div>
														
														
															<td><?php $toends = $data['status_akun'];
														
														if($toends == 1) {
														    echo '<button class="btn btn-success">Selesai</button>';
														}
														else{
														      echo '<button class="btn btn-danger">Belum Selesai</button>';
														}
														?></td>
												</tr>
											
											  <?php $count++; endwhile; ?>
											</tbody>
										</table>
									</div>
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