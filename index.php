<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class='section'>
        <div class='left'>
            <div class='text'>
                <img src="schoollogo.png" alt="Italian Trulli" width="100px">
                <h3>LifeSchool</h3>
            </div>
            <div class='profile'>
                <img src="man.png" alt="Italian Trulli" width="200px">
                <h2>Calvin Janitra</h2>
                <h3>Admin</h3>
            </div>
            <div class="menu">
                <div class='menup'>
                    <a href="#">
                        <h3>Dashboard</h3>
                    </a>
                </div>
                <div class='menup'>
                    <a href="list-siswa.php">
                        <h3>Student List</h3>
                    </a>
                </div>
                <div class='menup'>
                    <a href="form-daftar.php">
                        <h3>Register</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class='right'>
            <div class='top'>
                <div>
                    <h2>QS Ranking</h2>
                </div>
                <div class="stat">
                    <div class='topleft'>
                        <img src="schoollogo.png" alt="" width='200px'>
                        <h2>LifeSchool</h2>
                        <div class='loc'>
                            <img src="loc.png" alt="" width='20px'>
                            <h4>Surabaya, Indonesia</h4>
                        </div>
                    </div>
                    <div class='topright'>
                        <img src="chart.png" alt="" width="200px">
                    </div>
                </div>
            </div>
            <div class='bottom'>
                <div class="bottomleft">
                    <a href="form-daftar.php">
                        <div class='bottext'>
                            <img src="regist.png" alt="" width="180px">
                            <h3>Register</h3>
                        </div>
                    </a>
                </div>
                <div class="bottomright">
                    <a href="list-siswa.php" class="btn btn-light">
                        <div class='bottext'>
                            <img src="list.png" alt="" width="180px">
                            <h3>Student List</h3>
                        </div>
                    </a>
                </div>
            </div>
            <?php if(isset($_GET['status'])): ?>
                <p>
                    <?php
                        if($_GET['status'] == 'sukses'){
                            echo "Pendaftaran siswa baru berhasil!";
                        } else {
                            echo "Pendaftaran gagal!";
                        }
                    ?>
                </p>
            <?php endif; ?>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	</body>
</html>
