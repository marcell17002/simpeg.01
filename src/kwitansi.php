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
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                <img src="../assets/img/logo.png" style="width: 80px ; margin-top:5%;height : 80px;">		
                </div>
                <div class="col-sm-8">
                    <h2 style="text-align:center">Cetak Kwitansi
                </div>  
                <div class="col-sm-2">
                <a href="login.php" ><button type="button" class="btn btn-primary btn-lg" style="margin-top:10%;margin-left:90%">Log Out</button></a>
                </div>
            </div>
        </div>
    </div>
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
                <input type="text" class="form-control" aria-label="Sizing example input" readonly aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                   <h4> Nama Siswa </h4>
                </div>
                <div class="col-md-10">
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                   <h4> Asal Sekolah </h4>
                </div>
                <div class="col-md-10">
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                   <h4> Keterangan </h4>
                </div>
                <div class="col-md-10">
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                   <h4> Biaya Pendidikan </h4>
                </div>
                <div class="col-md-10">
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
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
                   <input type="text" class="form-control" aria-label="Sizing example input" nama="nama_penerima" placeholder="Nama" aria-describedby="inputGroup-sizing-default">
                   <br> <br>
               </div>
            </div>
        </div>
    </div>
</body>
</html>