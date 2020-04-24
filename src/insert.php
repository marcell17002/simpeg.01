<?php
session_start();
include 'connection.php';
if(isset($_POST['daftar'])){
    // menyimpan data kedalam variabel
    $nama                   = $_POST['nama'];
    $kelamin                 = $_POST['kelamin'];
    $tempat_lahir           = $_POST['tempat_lahir'];
    $tanggal_lahir        = $_POST['tanggal_lahir'];
    $alamat              = $_POST['alamat'];
    $telepon              = $_POST['telepon'];
    $line                = $_POST['line'];
    $asal_sekolah         = $_POST['asal_sekolah'];
    $kelas               = $_POST['kelas'];
    $nama_ayah            = $_POST['nama_ayah'];
    $telpon_ayah          = $_POST['telpon_ayah'];
    $pekerjaan_ayah          = $_POST['pekerjaan_ayah'];
    $telpon_ibu             = $_POST['telpon_ibu'];
    $pekerjaan_ibu         = $_POST['pekerjaan_ibu'];
    $alamat_ortu         = $_POST['alamat_ortu'];
    $kode_pos         = $_POST['kode_pos'];
    $email_ortu         = $_POST['email_ortu'];
    $program_les         = $_POST['program_les'];
    $biaya_pendidikan         = $_POST['biaya_pendidikan'];
    $jenis_pembayaran         = $_POST['jenis_pembayaran'];
    $jumlah_pembayaran         = $_POST['jumlah_pembayaran'];
    $batas_lunas         = $_POST['batas_lunas'];
    $foto_siswa         = $_POST['foto_siswa'];
    $keterangan         = $_POST['keterangan'];

    $tanggal_transaksi     = date("Y-m-d");
    $_SESSION['nama_'] = $nama;
    $_SESSION['tanggal_'] = $tanggal_transaksi;
    $_SESSION['program_'] = $program_les;
    $_SESSION['asalsekolah_'] = $asal_sekolah;
    $_SESSION['keterangan_'] = $keterangan;
    $_SESSION['biaya_'] = $biaya_pendidikan;

    // query SQL untuk insert data  
    //$query="INSERT INTO registrasiku SET  nama='$nama', kelamin='$kelamin',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',alamat='$alamat',telepon='$telepon',line='$line',asal_sekolah='$asal_sekolah',kelas='$kelas',nama_ayah='$nama_ayah',telpon_ayah='$telpon_ayah',pekerjaan_ayah='$pekerjaan_ayah',telpon_ibu='$telpon_ibu',pekerjaan_ibu='$pekerjaan_ibu',alamat_ortu='$alamat_ortu',kode_pos='$kode_pos',email_ortu='$email_ortu',program_les='$program_les,biaya_pendidikan='$biaya_pendidikan,jenis_pembayaran='$jenis_pembayaran,jumlah_pembayaran='$jumlah_pembayaran,batas_lunas='$batas_lunas,foto_siswa='$foto_siswa',keterangan='$keterangan'";
    $sql = "INSERT INTO registrasiku (nama,kelamin,tempat_lahir,tanggal_lahir,alamat,telepon,line,asal_sekolah,kelas,nama_ayah,telpon_ayah,pekerjaan_ayah,telpon_ibu,pekerjaan_ibu,alamat_ortu,kode_pos,email_ortu,program_les,biaya_pendidikan,jenis_pembayaran,jumlah_pembayaran,batas_lunas,foto_siswa,keterangan) VALUE ('$nama','$kelamin','$tempat_lahir','$tanggal_lahir','$alamat','$telepon','$line','$asal_sekolah','$kelas','$nama_ayah','$telpon_ayah','$pekerjaan_ayah','$telpon_ibu','$pekerjaan_ibu','$alamat_ortu','$kode_pos','$email_ortu','$program_les','$biaya_pendidikan','$jenis_pembayaran','$jumlah_pembayaran','$batas_lunas','$foto_siswa','$keterangan')";
   
   // $sql = "INSERT INTO registrasiku (nama, kelamin,tempat_lahir,tanggal_lahir,alamat,telepon,line,asal_sekolah,kelas,nama_ayah,telpon_ayah,pekerjaan_ayah,telpon_ibu,pekerjaan_ibu,alamat_ortu,kode_pos,email_ortu,program_les,biaya_pendidikan,jenis_pembayaran,jumlah_pembayaran,batas_lunas,foto_siswa,keterangan) VALUE ('$nama','$kelamin','$tempat_lahir','$tanggal_lahir','$alamat','$telepon','$line','$asal_sekolah','$kelas','$nama_ayah','$telpon_ayah','$pekerjaan_ayah','$telpon_ibu','$pekerjaan_ibu','$alamat_ortu','$kode_pos','$email_ortu','$program_les','$biaya_pendidikan','$jenis_pembayaran','$jumlah_pembayaran,'$batas_lunas,'$foto_siswa','$keterangan')";
        $query = mysqli_query($db, $sql);

        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            ?>
            <!DOCTYPE html>
        <html>
        <head>
            <title>Log In</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../assets/css/kwitansi.css">
        </head>
        <body>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <ul class="nav navbar-nav navbar-left">
                    <a href="registration.php" ><button type="button" class="btn btn-primary btn-lg" style="margin-top:20%">Back</button></a>
                    </ul>
                    <ul>
                    <h2 class="navbar-brand" style="margin-left:40%;font-size:40px;"> Registration </h2>
                    <ul>
                    <ul class="nav navbar-nav navbar-right" style="padding-left:5%">
                    <a href="login.php" ><button type="button" class="btn btn-primary btn-lg" style="margin-top:20%">Log Out</button>&nbsp;&nbsp;&nbsp;</a>
                    </ul>
                </div>
            </nav>
            <br>
            <div class="konten">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="../assets/img/logo.png" style="width: 80px ; margin-top:5%;height : 80px;">
                        </div>
                        <div class="col-md-4">
                            <h2 style="text-align:center;padding-top:5%"> KWITANSI PEMBAYARAN SISWA BARU </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        <h4> No. Kwitansi </h4>
                        </div>
                        <div class="col-md-10">
                        <input type="text" class="form-control" aria-label="Sizing example input" readonly aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        <h4> Tanggal Transaksi </h4>
                        </div>
                        <div class="col-md-10">
                        <?php
                            echo date("l ") . date("Y-m-d") . "<br>";
                        ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        <h4> Kelas di FE </h4>
                        </div>
                        <div class="col-md-10">
                        <?php echo $_POST['program_les']?></br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        <h4> Nama Siswa </h4>
                        </div>
                        <div class="col-md-10">
                            <?php echo $_POST['nama']?></br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        <h4> Asal Sekolah </h4>
                        </div>
                        <div class="col-md-10">
                        <?php echo $_POST['asal_sekolah']?></br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        <h4> Keterangan </h4>
                        </div>
                        <div class="col-md-10">
                        <?php echo $_POST['keterangan']?></br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        <h4> Biaya Pendidikan </h4>
                        </div>
                        <div class="col-md-10">
                        <?php echo $_POST['biaya_pendidikan']?></br>
                        </div>
                    </div>
                    <form  method="post"  action="insert-2.php"> 
                        <div class="row">
                            <div class="col-md-2">
                            <h4> Jumlah Bayar </h4>
                            </div>
                            <div class="col-md-10">
                            <input type="text" class="form-control" aria-label="Sizing example input" name="jumlah_bayar" placeholder="Rp. ..00,-" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                            <h4> Jumlah Uang </h4>
                            </div>
                            <div class="col-md-10">
                            <input type="text" class="form-control" aria-label="Sizing example input" name="jumlah_uang" placeholder="Rp. ..00,-" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <h4 style="text-align:center;padding-top:5%"> Pembayar </h4>
                            <br> <br> <br>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="nama_pembayar" placeholder="Nama" aria-describedby="inputGroup-sizing-default">
                            <br> <br>
                            </div>
                            <div class="col-md-6">
                                <h4 style="text-align:center;padding-top:5%"> Penerima </h4>
                            <br> <br> <br>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="nama_penerima1" placeholder="Nama" aria-describedby="inputGroup-sizing-default">
                            <br> 
                        </div>
                        </div>
                        <button type="submit" class="btn btn-success" name="daftar2" style="margin-left:90%;margin-bottom:2%">Print</button>
                        <br>
                    </form>
                </div>
            </div>
        </body>
        </html>
            <?php 
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: registration.php?status=gagal');
        }

} else {
    die("Akses dilarang...");
}
?>




