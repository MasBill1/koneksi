<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Data Pelanggan</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
        .btn:hover {
            opacity: 0.8;
        }
        .table th {
            background-color: #007bff;
            color: white;
        }
        .table td {
            vertical-align: middle;
        }
        .table td:last-child {
            text-align: center;
        }
        footer {
            margin-top: 20px;
            text-align: center;
            color: #6c757d;
        }
    </style>
</head>

<body>

<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header text-center">
                    <i class="fas fa-users"></i> DATA PELANGGAN
                </div>
                <div class="card-body">
                    <a href="tambah-pelanggan.php" class="btn btn-md btn-success mb-3"><i class="fas fa-plus-circle"></i> TAMBAH DATA</a>
                    <table class="table table-bordered" id="myTable">
                        <thead>
                        <tr>
                            <th scope="col">NO.</th>
                            <th scope="col">ID PELANGGAN</th>
                            
                            <th scope="col">NAMA PELANGGAN</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col">NOMOR TELEPON</th>
                            <th scope="col">AKSI</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        include('konek.php');
                        $no = 1;
                        $query = mysqli_query($connection, "SELECT * FROM tbl_pelanggan");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>

                       <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['id_pelanggan']; ?></td>
                            
                            <td><?php echo $row['nama_pelanggan']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['nomor_telepon']; ?></td>
                            <td class="text-center">
                            <a href="edit-pelanggan.php?id=<?php echo $row['id_pelanggan']; ?>" class="btn btn-sm btn-primary">EDIT</a>
                            <a href="hapus-pelanggan.php?id=<?php echo $row['id_pelanggan']; ?>" class="btn btn-sm btn-danger">HAPUS</a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    &copy; 2024 Data Pelanggan | All Rights Reserved
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
</body>
</html>