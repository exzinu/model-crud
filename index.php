<!doctype html>
<html>
<head>
    <title>MODEL CRUD MARPEN TAKAPAHA</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
<h1 class="text-center">MODUL CRUD AMARPEN TAKAPAHA</h1>
<h2 class="text-center">NIM 1905019</h2>

<!-- Awal card form-->
<div class="card mt-3">
  <div class="card-header bg-primary text-white">
    Form Input Data Bantuan Sosial
  </div>
  <div class="card-body">
    <form method="post" action="">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="tnim" class="form-control" placeholder="Masukan Nama Anda" required>
        </div>
        <div class="form-group">
            <label>Nik</label>
            <input type="text" name="tnik" class="form-control" placeholder="Masukan Nik Anda" required>
        </div>
        <div class="form-group">
            <label>Umur</label>
            <input type="text" name="tumur" class="form-control" placeholder="Masukan Umur Anda" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="talamat" placeholder="Masukan Alamat Anda"></textarea>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="tjeniskelamin">
                <option></option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" name="tpekerjaan" class="form-control" placeholder="Masukan Pekerjaan Anda" required>
        </div>

        <button type="submit" style="background-color : green" class="btn btn-green" name="bsimpan">Simpan</button>
        <button type="reset" class="btn btn-danger" name="breset">Kosong</button>

    </form>
  </div>
</div>
<!-- Ahir card form-->

</div>

<script> type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
