<?php  
    include 'connection.php';
    $query = "SELECT program_les, count(*) as number FROM registrasiku GROUP BY program_les";  
    $result = mysqli_query($db, $query);  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
    <script type="text/javascript">  
    google.charts.load('current', {'packages':['corechart']});  
    google.charts.setOnLoadCallback(drawChart);  
    function drawChart()  
    {  
         var data = google.visualization.arrayToDataTable([  
                   ['Progmram Les', 'Number'],  
                   <?php  
                   while($row = mysqli_fetch_array($result))  
                   {  
                        echo "['".$row["program_les"]."', ".$row["number"]."],";  
                   }  
                   ?>  
              ]);  
         var options = {  
               title: 'Percentage Program Les Easy Solutions',  
               //is3D:true,  
               pieHole: 0.4  
              };  
         var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
         chart.draw(data, options);  
    }  
  </script> 

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
      <li class="active"><a href="all_report.php">All Report</a></li>
      <li><a href="daily_report.php">Daily</a></li>
      <li><a href="weekly_report.php">Weekly</a></li>
      <li><a href="monthly_report.php">Monthly</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Here is All Report</h3>
   
  <div id="piechart" style="width: 900px; height: 500px; margin-left:20%"></div> 
  <br><br><br>
  <h3 style="text-align:center">List of Registration</h3><br><br>
  <div class="row">
    <div class='col-md-12'>
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
  </row>
</div>

</body>
</html>
