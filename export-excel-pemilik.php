<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel Dengan PHP - www.malasngoding.com</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pemilik Tanah Pertanahan Ciseeng.xls");
	?>
 
	<center>
		<h1>Data Pemilik Pertanahan Ciseeng</h1>
	</center>
 
	<table border="1">
										
												<thead>
												<tr>
												     <th>No.</th>
												    	<th>NIK</th>
													<th>Nama</th>
													<th>Jenis Kelamin</th>
													<th>Pekerjaan</th>
													<th>Tempat Tanggal Lahir</th>
													<th>Alamat Domisili</th>
													<th>Nomor HP</th>
														<th>Status Akun</th>
												
												</tr>
											</thead>
										
										
											<tbody>
											    <?php 
                                             include "koneksi.php";
                                          
                                            $records = mysqli_query($db, "SELECT * FROM pemilik_tanah where status_akun ='1'");
      $count = 1;
            while ($data = mysqli_fetch_array($records)) : ?>
												<tr>
												     <td><?php echo $count;?></td>
													<td><?php echo $data['nik']; ?></td>
													<td><?php echo $data['nama_lengkap']; ?></td>
													<td><?php echo $data['jenis_kelamin']; ?></td>
													<td><?php echo $data['pekerjaan']; ?></td>
														<td><?php echo $data['tempat_tanggal_lahir']; ?></td>
													<td><?php echo $data['alamat_domisili']; ?></td>
														<td><?php echo $data['nomor_hp']; ?></td>
														<td><?php $toends = $data['status_akun'];
														
														if($toends == 1) {
														    echo '<button class="btn btn-success">Terverifikasi</button>';
														}
														else{
														      echo '<button class="btn btn-danger">Belum Terverifikasi</button>';
														}
														?></td>
													
												</tr>
											
											  <?php $count++; endwhile; ?>
											</tbody>
											
										</table>
</body>
</html>