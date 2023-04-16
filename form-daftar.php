<!DOCTYPE html>
<html>
<head>
	<title>Formulir</title>
	<link href="daftarstyle.css" rel="stylesheet" />
</head>
<body>
	<section>
		<div class="card">
			<div class="card-header mx-auto text-center">
				<h1>Register Form</h1>
			</div>
			<div class="card-body">
				<form action="proses-pendaftaran.php" method="POST">	
					<fieldset>	
					<p>
						<label for="nama">Nama: </label>
						<input type="text" name="nama" placeholder="Full Name" />
					</p>
					<p>
						<label for="alamat">Alamat: </label>
						<textarea name="alamat" placeholder="Address"></textarea>
					</p>
					<p>
						<label for="jenis_kelamin">Jenis Kelamin: </label>
						<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
						<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
					</p>
					<p>
						<label for="agama">Agama: </label>
						<select name="agama">
							<option>Islam</option>
							<option>Kristen</option>
							<option>Katolik</option>
							<option>Hindu</option>
							<option>Budha</option>
							<option>Atheis</option>
						</select>
					</p>
					<p>
						<label for="sekolah_asal">Sekolah Asal: </label>
						<input type="text" name="sekolah_asal" placeholder="School Name" />
					</p>
					<p>
						<input type="submit" value="Daftar" name="daftar" />
					</p>	
					</fieldset>
				</form>
			</div>
		</div>	
	</section>
</body>
</html>
