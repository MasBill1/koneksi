<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH SISWA
            </div>
            <div class="card-body">
              <form action="simpan-pelanggan.php" method="POST">
                
                <div class="form-group">
                  <label>ID Pelanggan</label>
                  <input type="text" name="id_pelanggan" placeholder="Masukkan ID Pelanggan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Pelanggan</label>
                  <input type="text" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Pelanggan</label>
                  <input type="text" name="pelanggan" placeholder="Masukkan Pelanggan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat pelanggan” rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="nomor_telepon" placeholder="Masukkan Nomor Telepon" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>