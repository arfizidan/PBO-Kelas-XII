<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <br>
    <title>Ford Detail Registrasi Warga</title>
</head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body style="margin-left: 300px">
<?php
include('mylib/myDb.php');
$Db=new myDb();
$idwarga=$_GET['id'];
$data=$Db->get_by_id($idwarga);
//print_r($data);
//echo "blalala";
?>
    <div class="container">   
    <div class="row">
        <div class="col-md-9">
        <h2 class="text-center">Form Detail Registrasi Warga</h2>
        <hr> 
        <form action="index.php" method="post">
        <table class="table table-striped table-bordered">       
        <tr>
            <th class="bg-info text-white text-center" colspan="2">Biodata Pribadi</th>                            
            </tr>
            <tr>
                <td>Nomor KTP</td>
                <td><?php echo $data['no_ktp']; ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><?php echo $data['nama_lengkap']; ?></td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td><?php echo $data['alamat_lengkap']; ?></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><?php echo $data['no_hp']; ?></td>
            </tr>
        </table>
        <a href="index.php" class="btn btn-primary font-weight-bold">Kembali</a>
    </form>
        </div>
    </div>
    </div>
</body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>