<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru</title>
	<link href="list.css" rel="stylesheet">
</head>

<body>
	<div class="card">
		<div class="card-header mx-auto text-center">
			<h1>Student List</h1>
		</div>
		<div class="card-body">
			<nav>
				<a href="form-daftar.php" class="btn btn-warning">[+] Tambah Baru</a>
			</nav>
			<br>	
			<table border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Jenis Kelamin</th>
						<th>Agama</th>
						<th>Sekolah Asal</th>
						<th>Tindakan</th>
					</tr>
				</thead>
				<tbody>		
					<?php
					$sql = "SELECT * FROM calon_siswa";
					$query = mysqli_query($db, $sql);
					
					while($siswa = mysqli_fetch_array($query)){
						echo "<tr>";	
						echo "<td>".$siswa['id']."</td>";
						echo "<td>".$siswa['nama']."</td>";
						echo "<td>".$siswa['alamat']."</td>";
						echo "<td>".$siswa['jenis_kelamin']."</td>";
						echo "<td>".$siswa['agama']."</td>";
						echo "<td>".$siswa['sekolah_asal']."</td>";
						echo "<td>";
						echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a> |";
						echo "<a href='form-edit.php?id=".$siswa['id']."'> Edit</a>";
						echo "</td>";	
						echo "</tr>";
					}		
					?>	
				</tbody>
			</table>
			
			<p>Total: <?php echo mysqli_num_rows($query) ?></p>
		</div>
	</div>
</body>
</html>
