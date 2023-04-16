<?php 

include("config.php");

if( !isset($_GET['id']) ){
	header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit</title>
	<link href="edit.css" rel="stylesheet"/>
</head>
<body>
	<div class="card">
		<div class="card-header mx-auto text-center">
			<h1>Formulir Edit Siswa</h1>
		</div>
		<div class="card-body">
			<form action="proses-edit.php" method="POST">	
			<fieldset>		
				<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
			<p>
				<label for="nama">Nama: </label>
				<input type="text" name="nama" placeholder="Full Name" value="<?php echo $siswa['nama'] ?>" />
			</p>
			<p>
				<label for="alamat">Alamat: </label>
				<textarea name="alamat" placeholder="Address"><?php echo $siswa['alamat'] ?></textarea>
			</p>
			<p>
				<label for="jenis_kelamin">Jenis Kelamin: </label>
				<?php $jk = $siswa['jenis_kelamin']; ?>
				<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
				<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
			</p>
			<p>
				<label for="agama">Agama: </label>
				<?php $agama = $siswa['agama']; ?>
				<select name="agama">
					<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
					<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
					<option <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
					<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
					<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
					<option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
				</select>
			</p>
			<p>
				<label for="sekolah_asal">Sekolah Asal: </label>
				<input type="text" name="sekolah_asal" placeholder="School Name" value="<?php echo $siswa['sekolah_asal'] ?>" />
			</p>
			<p>
				<input type="submit" value="Simpan" name="simpan" />
			</p>
			</fieldset>
		</form>
		</div>
	</div>	
</body>
</html>
