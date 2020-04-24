<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/report.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <div class="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
            <img src="../assets/img/logo.png" style="width: 80px ; margin-top:5%;height : 80px;">
            </div>
            <div class="col-sm-8">
                <h2 style="text-align:center">Hello, Here is the Report
            </div>
            <div class="col-sm-2">
            <a href="login.php" ><button type="button" class="btn btn-primary btn-lg" style="margin-top:10%;margin-left:90%">Log Out</button></a>
            </div>
        </div>
    </div>
    </div>
    <br><br><br><br>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Home')">All Report</button>
  <button class="tablinks" onclick="openCity(event, 'News')">Daily</button>
  <button class="tablinks" onclick="openCity(event, 'Contact')">Weekly</button>
  <button class="tablinks" onclick="openCity(event, 'About')">Monthly</button>
</div>

<div id="Home" class="tabcontent">
  <!-- <h3>Pengambilan Paket Belajar</h3>
  <div id="piechart" class="diagram">
    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart)
        // Draw the chart and set the chart values
        
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Work', 8],
        ['Eat', 2],
        ['TV', 4],
        ['Gym', 2],
        ['Sleep', 8]
        ])
        // Optional; add a title and set the width and height of the chart
        var options = {'title':'My Average Day', 'width':550, 'height':400}
        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
        }
    </script>
    </div> -->

    <h3> List Data Siswa </h3>
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
        $pendaftar = mysqli_query($db, "SELECT  ID,nama,asal_sekolah,keterangan,biaya_pendidikan,jumlah_bayar,jumlah_uang from registrasiku");
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

<div id="News" class="tabcontent">
<div class="day-1">
      <?php
        $tanggal_transaksi_high     = date("Y-m-d"); 
      ?>
      <h3> List Data Siswa :     <?php echo $tanggal_transaksi_high?> </h3> 
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
          $pendaftar = mysqli_query($db, "SELECT  ID,nama,asal_sekolah,keterangan,biaya_pendidikan,jumlah_bayar,jumlah_uang from registrasiku where tanggal_transaksi ='$tanggal_transaksi_high';");
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
</div>

<div id="Contact" class="tabcontent">
  <div class="week-1">
      <?php
        $tanggal_transaksi_high     = new DateTime(date("Y-m-d")); 
        $tanggal_transaksi     = new DateTime(date("Y-m-d")); 
        $tanggal_transaksi->modify('-7 day');
        $low_tanggal_transaksi = $tanggal_transaksi->format('Y-m-d');
        $high_tanggal_transaksi = $tanggal_transaksi_high->format('Y-m-d');
      ?>
      <h3> List Data Siswa :     <?php echo $low_tanggal_transaksi?>  - <?php echo $high_tanggal_transaksi?> </h3> 
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
          $pendaftar = mysqli_query($db, "SELECT  ID,nama,asal_sekolah,keterangan,biaya_pendidikan,jumlah_bayar,jumlah_uang from registrasiku where tanggal_transaksi BETWEEN CAST('$low_tanggal_transaksi' AS DATE) AND CAST('$high_tanggal_transaksi' AS DATE);");
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

    <div class="week-2">
      <?php
        $tanggal_transaksi_high     = new DateTime(date("Y-m-d")); 
        $tanggal_transaksi     = new DateTime(date("Y-m-d")); 
        $tanggal_transaksi_high->modify('-7 day'); 
        $tanggal_transaksi->modify('-14 day');
        $low_tanggal_transaksi = $tanggal_transaksi->format('Y-m-d');
        $high_tanggal_transaksi = $tanggal_transaksi_high->format('Y-m-d');
      ?>
      <h3> List Data Siswa :     <?php echo $low_tanggal_transaksi?>  - <?php echo $high_tanggal_transaksi?> </h3> 
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
          $pendaftar = mysqli_query($db, "SELECT  ID,nama,asal_sekolah,keterangan,biaya_pendidikan,jumlah_bayar,jumlah_uang from registrasiku where tanggal_transaksi BETWEEN CAST('$low_tanggal_transaksi' AS DATE) AND CAST('$high_tanggal_transaksi' AS DATE);");
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

    <div class="week-3">
      <?php
        $tanggal_transaksi_high     = new DateTime(date("Y-m-d")); 
        $tanggal_transaksi     = new DateTime(date("Y-m-d")); 
        $tanggal_transaksi_high->modify('-14 day'); 
        $tanggal_transaksi->modify('-21 day');
        $low_tanggal_transaksi = $tanggal_transaksi->format('Y-m-d');
        $high_tanggal_transaksi = $tanggal_transaksi_high->format('Y-m-d');
      ?>
      <h3> List Data Siswa :     <?php echo $low_tanggal_transaksi?>  - <?php echo $high_tanggal_transaksi?> </h3> 
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
          $pendaftar = mysqli_query($db, "SELECT  ID,nama,asal_sekolah,keterangan,biaya_pendidikan,jumlah_bayar,jumlah_uang from registrasiku where tanggal_transaksi BETWEEN CAST('$low_tanggal_transaksi' AS DATE) AND CAST('$high_tanggal_transaksi' AS DATE);");
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
</div>

<div id="About" class="tabcontent">
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

    <div class="month-2">
      <?php
        $tanggal_transaksi_high     = new DateTime(date("Y-m-d")); 
        $tanggal_transaksi     = new DateTime(date("Y-m-d")); 
        $tanggal_transaksi_high->modify('-1 month');
        $tanggal_transaksi->modify('-2 month');
        $low_tanggal_transaksi = $tanggal_transaksi->format('Y-m-d');
        $high_tanggal_transaksi = $tanggal_transaksi_high->format('Y-m-d');
      ?>
      <h3> List Data Siswa :     <?php echo $low_tanggal_transaksi?>  - <?php echo $high_tanggal_transaksi?> </h3> 
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
          $pendaftar = mysqli_query($db, "SELECT  ID,nama,asal_sekolah,keterangan,biaya_pendidikan,jumlah_bayar,jumlah_uang from registrasiku where tanggal_transaksi BETWEEN CAST('$low_tanggal_transaksi' AS DATE) AND CAST('$high_tanggal_transaksi' AS DATE);");
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
</div>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 

    <div class="manager-info">
	<div class="container-fluid">
		<div class="row">
            
		</div>
	</div>
    </div>
</body>
</html>