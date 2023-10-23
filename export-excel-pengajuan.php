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
	header("Content-Disposition: attachment; filename=Data Pengajuan Pertanahan Ciseeng.xls");
	?>
 
	<center>
		<h1>Data Pengajuan Pertanahan Ciseeng</h1>
	</center>
 
	<table border="1">
										
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
																<th>Bukti Surat</th>
																<th>Tanggal kepemilikan</th>
																	<th>Selaku</th>
																		<th>Oleh</th>
																			<th>Cara</th>
																				<th>Surat</th>
																					<th>Pembuatan</th>
																						<th>Luas Tanah</th>
																							<th>Blok Tanah</th>
													<th>Status</th>
												</tr>
										
										
										
											    <?php 
                                             include "koneksi.php";
                                          
                                            $records = mysqli_query($db, "SELECT * FROM pengajuan");
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
												<td><?php echo $data['bukti_surat']; ?></td>
												<td><?php echo $data['tanggal_kepemilikan']; ?></td>
												<td><?php echo $data['selaku']; ?></td>
												<td><?php echo $data['oleh_nama']; ?></td>
												<td><?php echo $data['cara']; ?></td>
												<td><?php echo $data['surat']; ?></td>
												<td><?php echo $data['pembuatan']; ?></td>
													<td><?php echo $data['luas_tanah']; ?></td>
														<td><?php echo $data['blok_tanah']; ?></td>
														 
	
														
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
											
										</table>
</body>
</html>