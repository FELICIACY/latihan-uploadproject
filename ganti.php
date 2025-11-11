<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="ganti.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center">
    <div class="container my-5" style="max-width: 600px;">
        <?php
        include 'sambung.php';
        $kode = $_GET['id'];
        $mandiri = mysqli_query($sambung, "select * from mahasiswa where kode='$kode'");
        while($m = mysqli_fetch_array($mandiri)){
            ?>
            <div class="card shadow-lg">
                <div class="card-header pinktua text-white">
                    <h2 class="h3 mb-0 mt-2">EDIT DATA MAHASISWA</h2>
                </div>
                <div class="card-body pinkmuda">
                    <form method="POST" action="edit.php">
                        
                        <div class="mb-3">
                            <label for="kodemahasiswa" class="form-label">Kode Mahasiswa</label>
                            <input type="text" class="form-control" id="kodemahasiswa" value="<?php echo $m['kode']; ?>">
                            <input type="hidden" name="kode" value="<?php echo $m['kode']; ?>">
                        </div>
                        
                        <div class="mb-3">
                            <label for="namamahasiswa" class="form-label">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="namamahasiswa" name="nama" value="<?php echo $m['nama']; ?>">
                        </div>
                        
                        <div class="mb-3">
                            <label for="nisn" class="form-label">NISN</label>
                            <input type="number" class="form-control" id="nisn" name="nisn" value="<?php echo $m['nisn']; ?>">
                        </div>
                        
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $m['jurusan']; ?>">
                        </div>
                        
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $m['alamat']; ?>">
                        </div>
                        
                        <div class="d-grid gap-2">
                            <input class="btn pinktua text-white mt-3" type="submit" value="SIMPAN">
                        </div>
                    </form>
                </div>
            </div>
            <?php
        } 
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>