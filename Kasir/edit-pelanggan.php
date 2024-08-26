<?php 
  
  include('konek.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tbl_pelanggan WHERE id_pelanggan = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Pelanggan</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT PELANGGAN
            </div>
            <div class="card-body">
              <form id="editForm" action="update-pelanggan.php" method="POST">
                
                <div class="form-group">
                  <label>ID Pelanggan</label>
                  <input type="text" name="id_pelanggan" value="<?php echo $row['id_pelanggan'] ?>" placeholder="Masukkan ID Pelanggan" class="form-control">
                  <input type="hidden" name="id_pelanggan" value="<?php echo $row['id_pelanggan'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama Pelanggan</label>
                  <input type="text" name="nama_pelanggan" value="<?php echo $row['nama_pelanggan'] ?>" placeholder="Masukkan Nama Pelanggan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4"><?php echo $row['alamat'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <textarea class="form-control" name="nomor_telepon" placeholder="Masukkan Nomor Telepon" rows="4"><?php echo $row['nomor_telepon'] ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <script>
      // Event listener untuk form submit
      document.getElementById('editForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah form dari submit default
        alert('Data pelanggan telah diperbarui!'); // Tampilkan pesan
        this.submit(); // Lanjutkan submit form setelah alert
      });

      // Event listener untuk form reset
      document.getElementById('editForm').addEventListener('reset', function() {
        alert('Form telah direset!'); // Tampilkan pesan saat form direset
      });
    </script>

  </body>
</html>
