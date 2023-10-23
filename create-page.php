<?php
 function dataready($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
} 
 require_once("auth.php");

 if(isset($_POST['edit'])){
     
       $for1 = filter_input(INPUT_POST, 'for1', FILTER_SANITIZE_STRING);
             $for2 = filter_input(INPUT_POST, 'for2', FILTER_SANITIZE_STRING);
               $for3 = filter_input(INPUT_POST, 'for3', FILTER_SANITIZE_STRING);
                       $for4 = filter_input(INPUT_POST, 'for4');
                              $for4 = dataready($for4);
      include "koneksi.php";
      
      include "config.php";
      
      $data = [
        ":satu" => $for1,
        ":dua" => $for2,
        ":tiga" => $for3,
          ":empat" => $for4
        
   ];

      $sql = "UPDATE pages SET filename=:dua, title=:tiga, rawcontent=:empat WHERE id=:satu";
      
         $stmt = $db->prepare($sql);
    
$saved = $stmt->execute($data);

 if($saved) { 
 echo "<script>
alert('Your changes were successfully saved.');
window.location.href='create-page.php';
</script>";
    
    
} else {
    die("Akses dilarang...");
}
 }

 if(isset($_POST['tambah'])){
     

     
       $for1 = $conf;
             $for2 = filter_input(INPUT_POST, 'for2', FILTER_SANITIZE_STRING);
               $for3 = filter_input(INPUT_POST, 'for3', FILTER_SANITIZE_STRING);
                       $for4 = filter_input(INPUT_POST, 'for4');
                              $for4 = dataready($for4);
                                       
                                        include "koneksi.php";
                                          
                                           include "config.php";
        
         $sql = "INSERT INTO pages (conf, filename, title, rawcontent)
            VALUES (:satu, :dua, :tiga, :empat)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":satu" => $for1,
        ":dua" => $for2,
        ":tiga" => $for3,
          ":empat" => $for4
        
       
      
       
       
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) {
         $message = 'Penambahan Halaman Berhasil';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('create-page.php');
    </SCRIPT>";
    }
 
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Dashboard Chair Cosite by Akademisi </title>
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
    
    
      <style>
        
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 60%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  margin-left: auto; 
margin-right: 0;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* The Close Button */
.close2 {
  color: #aaaaaa;
  margin-left: auto; 
margin-right: 0;
  font-size: 28px;
  font-weight: bold;
}

.close2:hover,
.close2:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
    </style>

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
					
						<li class="nav-item ">
							<a data-toggle="collapse" href="#base">
					<img src="https://img.icons8.com/wired/30/null/task--v3.png"/>
								<p> &nbsp; Conference </p>
								<span class="caret"></span>
							</a>
							<div class="collapse " id="base">
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
						
							<li class="nav-item ">
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
						
							<li class="nav-item active">
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
						<h4 class="page-title">Conference List Page</h4>
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
								<a href="#"> Page List</a>
							</li>
							
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
						    	<div class="card">
								<div class="card-header">
								    	<div class="row mt--2">
						<div class="col-md-9">
						    	<h4 class="card-title">List Page</h4><br/>
						    </div>
						    
						    
						    
						    </div>
								
									
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="multi-filter-select" class="display table table-striped table-hover" >
											<thead>
												<tr>
												     <th>No.</th>
												    	<th>Page Name</th>
													<th>Title</th>
													
														<th>Isi Page</th>
																<th>Action</th>
												</tr>
											</thead>
										
											<tbody>
											    <?php 
                                             include "koneksi.php";
                                          
                                            $records = mysqli_query($db, "SELECT * FROM pages where conf ='$conf'");
  $records2 = mysqli_query($db, "SELECT * FROM comite where conf ='$conf' order by pos LIMIT 1000 OFFSET 1 ");
      $count = 1;
      
       
                                              $records3 = mysqli_query($db, "SELECT * FROM pages where conf ='$conf'");
                                            $cataz = mysqli_fetch_array($records3);
                                             $cate = $cataz['pos'];
                                             
            while ($data = mysqli_fetch_array($records)) :
                
              $data2 = mysqli_fetch_array($records2);
            ?>
            <form></form>
												<tr>
												     <td><?php echo $count;?></td>
													<td><?php echo $data['filename']; ?></td>
													<td><?php echo $data['title']; ?></td>
														<td>  <button onclick="document.getElementById('detail<?php echo $data['id'];?>').style.display='block';" name="Open" data-toggle="tooltip" title="" class="btn btn-link btn-primary" data-original-title="Edit">
																<i class="fa fa-eye"></i> OPEN
															</button></td>
														
														
																<div id="detail<?php echo $data['id'];?>" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span onclick="document.getElementById('detail<?php echo $data['id'];?>').style.display='none'" class="close2">X</span>
     <div>
         <center>
            
             <div class="row">
                 	<div class="col-md-12 col-lg-12">
                 <center><h2>Isi Page <?php echo $data['title'];?></h2></center><br/><br/>
                 </div>
                 	
											
												
               <div class="col-lg-12 col-md-12">
                   
  <?php echo html_entity_decode($data['rawcontent']); ?>
                   

                
                   </div>
             
                     
                      
                      </div>
         </center>
     </div>
    </div>
  
  </div>
														<td>
														    
													     
													       
													    <button onclick="document.getElementById('<?php echo $data['id'];?>').style.display='block';" name="Edit" data-toggle="tooltip" title="" class="btn btn-link btn-primary" data-original-title="Edit">
																<i class="fa fa-edit"></i>
															</button>
														
															
													   <form action="deletebyid.php" method="POST" class="form-horizontal" enctype="multipart/form-data" onsubmit="return confirm('Apakah anda yakin ingin menghapus ini?');" style-form>
													        <input type="hidden" name="aidi" value="<?php echo $data['id']; ?>">
													         <input type="hidden" name="cate" value="pages">
													    <button type="submit" name="remove" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Delete Page">
																<i class="fa fa-times"></i>
															</button>
															</form>
															
															</td>
												</tr>
											<div id="<?php echo $data['id'];?>" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span onclick="document.getElementById('<?php echo $data['id'];?>').style.display='none'" class="close2">X</span>
     <div>
         <center>
            
             <div class="row">
                 	<div class="col-md-12 col-lg-12">
                 <center><h2>Edit Page</h2></center><br/><br/>
                 </div>
                 	<div class="col-md-6 col-lg-6">
										   <form class="form-login" method="POST" enctype="multipart/form-data" >
								<div class="form-group">
												<label for="email2">Page Name
</label>
<input type="hidden" name="for1" value="<?php echo $data['id'];?>">
												<input name="for2" type="text" class="form-control" id="email2" placeholder="Nama Page" value="<?php echo $data['filename'];?>">
										
											</div>
											
												
											</div>
											
												<div class="col-md-6 col-lg-6">
										 
								<div class="form-group">
												<label for="email2">Title Page
</label>
												<input name="for3" type="text" class="form-control" id="email2" placeholder="Judul Page" value="<?php echo $data['title'];?>">
											
										
											</div>
											
												
											</div>
               <div class="col-lg-12 col-md-12">
                    <textarea id="editor<?php echo $data['id'];?>" rows="10" cols="130" name="for4">
   <?php echo $data['rawcontent'];?>
                   
    </textarea>
                
                   </div>
             <div class="col-lg-12 col-md-12">
             <center>
                 <Br/>
                 	<button type="submit" name="edit" class="btn btn-success">Submit Edit Pages</button>
             </center>
             </div>
             </form>
                     
                      
                      </div>
         </center>
     </div>
    </div>
  
  </div>
											  <?php $count++; endwhile; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							
							<div class="card">
								<div class="card-header">
									<div class="card-title">Tambah Pages  </div>
								</div>
							<div class="card-body">
								<div class="row">
								    <div class="col-md-12 col-lg-12">
								      <h2><b> </b></h2>
								      </div>
										<div class="col-md-6 col-lg-6">
										   <form class="form-login" method="POST" enctype="multipart/form-data" >
								<div class="form-group">
												<label for="email2">Page Name
</label>
												<input required name="for2" type="text" class="form-control" id="email2" placeholder="Nama Page">
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
											
												
											</div>
											
												<div class="col-md-6 col-lg-6">
										 
								<div class="form-group">
												<label for="email2">Title Page
</label>
												<input required name="for3" type="text" class="form-control" id="email2" placeholder="Judul Page">
											
											<!--	<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
											</div>
											
												
											</div>
											
													<div class="col-md-12 col-lg-12">
													   <br/><br/> 
													   <div class="form-group">
													   	<label for="email2">Isi Page
</label>
</div>
											 <textarea required name="for4" id="editor2" rows="10" cols="80">

    </textarea>
										</div>
											
	
												  
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
	<!-- Datatables -->
	<script src="assetsdash/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="assetsdash/js/atlantis.min.js"></script>

    <script src="ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace('editor');
</script>
<script src="tinymce/tinymce.min.js"></script>
<script>
tinymce.init({
    selector: '#editor'
});
</script>

<script>
CKEDITOR.replace('editor2');
</script>
<script src="tinymce/tinymce.min.js"></script>

  <?php 
                                             include "koneksi.php";
                                          
                                            $records = mysqli_query($db, "SELECT * FROM pages where conf ='$conf'");
  $records2 = mysqli_query($db, "SELECT * FROM comite where conf ='$conf' order by pos LIMIT 1000 OFFSET 1 ");
      $count = 1;
      
       
                                              $records3 = mysqli_query($db, "SELECT * FROM pages where conf ='$conf'");
                                            $cataz = mysqli_fetch_array($records3);
                                             $cate = $cataz['pos'];
                                             
            while ($data = mysqli_fetch_array($records)) :
                
              $data2 = mysqli_fetch_array($records2);
            ?>
            
            <script>
CKEDITOR.replace('editor<?php echo $data['id']; ?>');
</script>

<script>
tinymce.init({
    selector: '#editor<?php echo $data['id']; ?>'
});
</script>
            
              <?php $count++; endwhile; ?>

<script>
tinymce.init({
    selector: '#editor2'
});
</script>

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