<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center m-3">
            <h2 class="text-white m-4">LIST MAHASISWA</h2>
            <table class="table table-striped table-bordered table-hover w-75">
                <thead class="table-success hijaumuda">
                    <tr>
                        <th>Kode Mahasiswa</th>
                        <th>Nama Mahasiswa</th>
                        <th>NISN</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    include 'sambung.php';
                    $mandiri = mysqli_query($sambung, "select * from mahasiswa");
                    while($m = mysqli_fetch_array($mandiri)){
                        ?>
                        <tr>
                            <td><?php echo $m['kode']; ?></td>
                            <td><?php echo $m['nama']; ?></td>
                            <td><?php echo $m['nisn']; ?></td>
                            <td><?php echo $m['jurusan']; ?></td>
                            <td><?php echo $m['alamat']; ?></td>
                            <td class="text-center">
                                <a href="ganti.php?id=<?php echo $m['kode'] ?>" class="btn btn-sm pinktua text-white me-2">UBAH</a>
                                <a href="buang.php?id=<?php echo $m['kode'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <button type="button" class="btn hijautua text-white m-3" data-bs-toggle="modal" data-bs-target="#tambahmahasiswa">
        Tambah Mahasiswa
            </button>
            

            <div class="modal fade" id="tambahmahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header hijaumuda text-white">
                            <h1 class="modal-title fs-5 mt-2" id="exampleModalLabel">Form Mahasiswa</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="tambah.php">
                                <div class="mb-3">
                                    <label for="kodemahasiswa" class="form-label">Kode Mahasiswa</label>
                                    <input type="text" class="form-control" id="kodemahasiswa" name="kode">
                                </div>
                                <div class="mb-3">
                                    <label for="namamahasiswa" class="form-label">Nama Mahasiswa</label>
                                    <input type="text" class="form-control" id="namamahasiswa" name="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="nisn" class="form-label">NISN</label>
                                    <input type="number" class="form-control" id="nisn" name="nisn">
                                </div>
                                <div class="mb-3">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <input type="text" class="form-control" id="jurusan" name="jurusan">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>
                                <div class="d-grid">
                                    <input class="btn btn-success mt-3" type="submit" value="SIMPAN">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>