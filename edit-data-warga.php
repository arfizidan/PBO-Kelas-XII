<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form Edit Data Warga</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body style="margin-left: 300px">
<?php
include('mylib/myDb.php');
$Db=new myDb();
$update_warga=$_GET['id'];
$update=$Db->get_by_id($update_warga);
?>
    <div class="container">  
    <div class="row">
        <div class="col-md-9">
        <h2 class="text-center">Form Edit Data Warga</h2>
        <hr>
        <form action="index.php" method="post">
        <input type="hidden" name="id" value="<?= $update["id"]; ?>">
        <table class="table table-bordered">
            <tr>
                <th class="bg-info text-white text-center" colspan="2">Biodata Pribadi</th>
                
            </tr>
            <tr>
                <td>Nomor KTP</td>
                <td> <input class="form-control" type="number" name="no_ktp" id="no_ktp" placeholder="Masukkan No KTP" value="<?= $update["no_ktp"]; ?>"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap" value="<?= $update["nama_lengkap"]; ?>"></td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td> <input class="form-control" type="text" name="alamat_lengkap" id="alamat_lengkap" placeholder="Masukkan Alamat Lengkap" value="<?= $update["alamat_lengkap"]; ?>"></td>
            </tr
            <tr>
                <td>Nomor HP</td>
                <td><input type="number" class="form-control" type="number" name="no_hp" id="no_hp" placeholder="Masukkan Nomor Handphone" value="<?= $update["no_hp"]; ?>"></td>
            </tr>
        </table>        
        <a href="index.php" class="btn btn-info font-weight-bold">Kembali</a>
        <button class="btn btn-primary font-weight-bold" name="simpan_update" type="submit">Update Data Warga</button>
    </form>
        
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>