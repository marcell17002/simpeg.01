<?php
require_once __DIR__ . '/vendor/autoload.php';
session_start();
include 'connection.php';
if(isset($_POST['daftar2'])){
    // menyimpan data kedalam variabel
    $jumlah_bayar        = $_POST['jumlah_bayar'];
    $jumlah_uang          = $_POST['jumlah_uang'];
    $nama_pembayar        = $_POST['nama_pembayar'];
    $nama_penerima1        = $_POST['nama_penerima1'];
    $tanggal_transaksi     = date("Y-m-d");

    $nameku = $_SESSION['nama_'];
    $tanggalku = $_SESSION['tanggal_'];
    $programku = $_SESSION['program_'];
    $asalsekolahku = $_SESSION['asalsekolah_'];
    $keteranganku = $_SESSION['keterangan_'];
    $biayaku = $_SESSION['biaya_'];
     $sql = "UPDATE  registrasiku  SET jumlah_bayar = '$jumlah_bayar',jumlah_uang = '$jumlah_uang' ,nama_pembayar = '$nama_pembayar' ,nama_penerima1 = '$nama_penerima1' ,tanggal_transaksi = '$tanggal_transaksi' where nama ='$nameku'";
   
        $query = mysqli_query($db, $sql);

        // apakah query simpan berhasil?
        if( $query ) {
            $mpdf = new \Mpdf\Mpdf();
            
            $data = '';
            $data .= ' 
            <table style=" border-collapse: collapse; border: 1px solid black;width:100%;">
            <tr>
                <th width="20%"><img src="../assets/img/logo.png" style="width: 80px ; margin-top:5%;height : 80px;"></th>
                <th>KWITANSI PEMBAYARAN SISWA BARU</th> 
            </tr>
            </table><br>';
            $data .= '
            <table style=" border-collapse: collapse; border: 1px solid black;width:100%;padding-left:5%">
            <tr>
                <td width="30%"><br><br>&nbsp;&nbsp;&nbsp;No. Kwitansi</td>
                <td>    </td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;Tanggal Transaksi</td>
                <td>:  '. $tanggal_transaksi.'</td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;Kelas di FE</td>
                <td>:  '. $programku .'</td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;Nama Siswa</td>
                <td>:  '. $nameku .'</td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;Asal Sekolah</td>
                <td>:  '. $asalsekolahku .'</td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;Keterangan</td>
                <td>:  '. $keteranganku .'</td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;Biaya Pendidikan</td>
                <td>:  ' . $biayaku .'</td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;Jumlah Bayar</td>
                <td>:  '. $jumlah_bayar .'</td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;Jumlah Uang <br><br><br></td>
                <td>:  ' . $jumlah_uang . '<br><br><br></td>
            </tr>
            <tr>
                <td style="text-align:center">Pembayar<br><br><br><br><br><br></td>
                <td style="text-align:center">Penerima<br><br><br><br><br><br></td>
            </tr>
            <tr>
                <td style="text-align:center">' . $nama_pembayar . ' <br><br></td>
                <td style="text-align:center">' . $nama_penerima1 . ' <br><br></td>
            </tr>

            </table>';
           
            $mpdf ->WriteHTML($data);
            $mpdf->Output('kwitansi.pdf','D');
            
            header('Location: registration.php?status=sukses');
           
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: registration.php?status=gagal');
        }

} else {
    die("Akses dilarang...");
}
?>




