<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="../assets/img/logo.png" style="width: 45px ;height: 45px; margin-top:-20%;"></a>
    </div>
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Easy Solution</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="all_report.php">All Report</a></li>
      <li><a href="daily_report.php">Daily</a></li>
      <li><a href="weekly_report.php">Weekly</a></li>
      <li  class="active"><a href="monthly_report.php">Monthly</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Here is All of Monthly Report</h3>
  <br><br>

    <div class="month-1">
      <?php
        $tanggal_transaksi_high     = new DateTime(date("Y-m-d")); 
        $tanggal_transaksi     = new DateTime(date("Y-m-d")); 
        $tanggal_transaksi->modify('-1 month');
        $low_tanggal_transaksi = $tanggal_transaksi->format('Y-m-d');
        $high_tanggal_transaksi = $tanggal_transaksi_high->format('Y-m-d');
      ?>
      <h3> List Data Siswa :     <?php echo $low_tanggal_transaksi?>  - <?php echo $high_tanggal_transaksi?> </h3> 

      <h4> Paket : Focus Reguler </h4>
      <div class="all-data">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">No. Kwitansi</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Asal Sekolah</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Biaya Pendidikan</th>
            <th scope="col">Jumlah Bayar</th>
            <th scope="col">Jumlah Uang</th>
            <th scope="col">Sisa Angsuran</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'connection.php';
          $pendaftar = mysqli_query($db, "SELECT  ID,nama,asal_sekolah,keterangan,biaya_pendidikan,jumlah_bayar,jumlah_uang from registrasiku where tanggal_transaksi BETWEEN CAST('$low_tanggal_transaksi' AS DATE) AND CAST('$high_tanggal_transaksi' AS DATE) and program_les = 'Focus Reguler';");
          $no=1;
          foreach ($pendaftar as $row){
              echo "<tr>
                      <td>$no</td>
                      <td>".$row['ID']."</td>
                      <td>".$row['nama']."</td>
                      <td>".$row['asal_sekolah']."</td>
                      <td>".$row['keterangan']."</td>
                      <td>".$row['biaya_pendidikan']."</td>
                      <td>".$row['jumlah_bayar']."</td>
                      <td>".$row['jumlah_uang']."</td>
                      <td>".$row['jumlah_uang']."</td>
                    </tr>";
              $no++;
          }
          ?>
        </tbody>
        </table>
      </div>
      
      <br><br><br>
      <h4> Paket : Focus Alumni </h4>
      <div class="all-data">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">No. Kwitansi</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Asal Sekolah</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Biaya Pendidikan</th>
            <th scope="col">Jumlah Bayar</th>
            <th scope="col">Jumlah Uang</th>
            <th scope="col">Sisa Angsuran</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'connection.php';
          $pendaftar = mysqli_query($db, "SELECT  ID,nama,asal_sekolah,keterangan,biaya_pendidikan,jumlah_bayar,jumlah_uang from registrasiku where tanggal_transaksi BETWEEN CAST('$low_tanggal_transaksi' AS DATE) AND CAST('$high_tanggal_transaksi' AS DATE) and program_les = 'Focus Alumni';");
          $no=1;
          foreach ($pendaftar as $row){
              echo "<tr>
                      <td>$no</td>
                      <td>".$row['ID']."</td>
                      <td>".$row['nama']."</td>
                      <td>".$row['asal_sekolah']."</td>
                      <td>".$row['keterangan']."</td>
                      <td>".$row['biaya_pendidikan']."</td>
                      <td>".$row['jumlah_bayar']."</td>
                      <td>".$row['jumlah_uang']."</td>
                      <td>".$row['jumlah_uang']."</td>
                    </tr>";
              $no++;
          }
          ?>
        </tbody>
        </table>
      </div>
      
      <br><br><br>
      <h4> Paket : Super Focus</h4>
      <div class="all-data">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">No. Kwitansi</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Asal Sekolah</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Biaya Pendidikan</th>
            <th scope="col">Jumlah Bayar</th>
            <th scope="col">Jumlah Uang</th>
            <th scope="col">Sisa Angsuran</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'connection.php';
          $pendaftar = mysqli_query($db, "SELECT  ID,nama,asal_sekolah,keterangan,biaya_pendidikan,jumlah_bayar,jumlah_uang from registrasiku where tanggal_transaksi BETWEEN CAST('$low_tanggal_transaksi' AS DATE) AND CAST('$high_tanggal_transaksi' AS DATE) and program_les = 'Super Focus';");
          $no=1;
          foreach ($pendaftar as $row){
              echo "<tr>
                      <td>$no</td>
                      <td>".$row['ID']."</td>
                      <td>".$row['nama']."</td>
                      <td>".$row['asal_sekolah']."</td>
                      <td>".$row['keterangan']."</td>
                      <td>".$row['biaya_pendidikan']."</td>
                      <td>".$row['jumlah_bayar']."</td>
                      <td>".$row['jumlah_uang']."</td>
                      <td>".$row['jumlah_uang']."</td>
                    </tr>";
              $no++;
          }
          ?>
        </tbody>
        </table>
      </div>

      <br><br><br>
      <h4> Paket : Super Camp </h4>
      <div class="all-data">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">No. Kwitansi</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Asal Sekolah</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Biaya Pendidikan</th>
            <th scope="col">Jumlah Bayar</th>
            <th scope="col">Jumlah Uang</th>
            <th scope="col">Sisa Angsuran</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'connection.php';
          $pendaftar = mysqli_query($db, "SELECT  ID,nama,asal_sekolah,keterangan,biaya_pendidikan,jumlah_bayar,jumlah_uang from registrasiku where tanggal_transaksi BETWEEN CAST('$low_tanggal_transaksi' AS DATE) AND CAST('$high_tanggal_transaksi' AS DATE) and program_les = 'Super Camp';");
          $no=1;
          foreach ($pendaftar as $row){
              echo "<tr>
                      <td>$no</td>
                      <td>".$row['ID']."</td>
                      <td>".$row['nama']."</td>
                      <td>".$row['asal_sekolah']."</td>
                      <td>".$row['keterangan']."</td>
                      <td>".$row['biaya_pendidikan']."</td>
                      <td>".$row['jumlah_bayar']."</td>
                      <td>".$row['jumlah_uang']."</td>
                      <td>".$row['jumlah_uang']."</td>
                    </tr>";
              $no++;
          }
          ?>
        </tbody>
        </table>
      </div>

      <br><br><br>
      <h4> Paket : Excellent </h4>
      <div class="all-data">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">No. Kwitansi</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Asal Sekolah</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Biaya Pendidikan</th>
            <th scope="col">Jumlah Bayar</th>
            <th scope="col">Jumlah Uang</th>
            <th scope="col">Sisa Angsuran</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'connection.php';
          $pendaftar = mysqli_query($db, "SELECT  ID,nama,asal_sekolah,keterangan,biaya_pendidikan,jumlah_bayar,jumlah_uang from registrasiku where tanggal_transaksi BETWEEN CAST('$low_tanggal_transaksi' AS DATE) AND CAST('$high_tanggal_transaksi' AS DATE) and program_les = 'Excellent';");
          $no=1;
          foreach ($pendaftar as $row){
              echo "<tr>
                      <td>$no</td>
                      <td>".$row['ID']."</td>
                      <td>".$row['nama']."</td>
                      <td>".$row['asal_sekolah']."</td>
                      <td>".$row['keterangan']."</td>
                      <td>".$row['biaya_pendidikan']."</td>
                      <td>".$row['jumlah_bayar']."</td>
                      <td>".$row['jumlah_uang']."</td>
                      <td>".$row['jumlah_uang']."</td>
                    </tr>";
              $no++;
          }
          ?>
        </tbody>
        </table>
    </div>
</div>

</body>
</html>
