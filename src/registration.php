<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/sregistration.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-left">
            <img src="../assets/img/logo.png" style="width: 70px ; margin-top:5%;height : 70px;">
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
    <h3 style="text-align:center"> Input Data Here </h3>
    <div class="form-input">
	<div class="container-fluid">
		<div class="row">
        <form  method="post"  action="insert.php"> 
            <h3 style="padding-top:3%">Data Pribadi</h3>
            <div class="form-row">
                <div class="form-group col-md-9">
                <label for="inputEmail4">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                </div>
                <div class="form-group col-md-3">
                    <label for="text"> Jenis kelamin</label>
                    <select id="kelamin" name="kelamin" class="form-control">
                        <option>Perempuan</option>
                        <option>Laki-Laki</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="tanggal_lahir">Tanggal Lahir</label> <br>
                    <input type="date"  class="form-control id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputAddress">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="1234 Main St">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">No. HP</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="+62 ..">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Id. Line</label>
                    <input type="text" class="form-control" id="line" name="line" placeholder="@ ...">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="inputAddress">Asal Sekolah</label>
                    <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="SMP/SMA?SLTA">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress">Kelas</label>
                    <select id="kelas" name="kelas" class="form-control">
                        <option selected>X IPA </option>
                        <option>X IPS</option>
                        <option>XI IPA</option>
                        <option>XI IPS</option>
                        <option>XII IPA</option>
                        <option>XII IPS</option>
                        <option>ALUMNI IPA</option>
                        <option>ALUMNI IPS</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-12"><br><br></div>
            </div>
            <h3>Data Orang Tua</h3>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Nama Ayah</label>
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Lengkap">
                </div>
                <div class="form-group col-md-6">
                <label for="inputEmail4">No. Telepon</label>
                <input type="text" class="form-control" id="telpon_ayah" name="telpon_ayah" placeholder="+62 ..">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="inputEmail4">Pekerjaan Ayah</label>
                <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Buruh/ Swasta/ dll">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Nama Ibu</label>
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Lengkap">
                </div>
                <div class="form-group col-md-6">
                <label for="inputEmail4">No. Telepon</label>
                <input type="text" class="form-control" id="telpon_ibu" name="telpon_ibu" placeholder="+62 ..">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="inputEmail4">Pekerjaan Ibu</label>
                <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Buruh/ Swasta/ dll">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                <label for="inputEmail4">Alamat Orang Tua</label>
                <input type="text" class="form-control" id="alamat_ortu" name="alamat_ortu" placeholder="1234 Main St">
                </div>
                <div class="form-group col-md-4">
                <label for="inputEmail4">Kode Pos</label>
                <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="...">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="inputEmail4">Email Orang Tua</label>
                <input type="email" class="form-control" id="email_ortu" name="email_ortu" placeholder="... @gmail.com">
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-12"><br><br></div>
            </div>
            <div class="form-row">
            <h3>Program Les</h3>
                <div class="form-group col-md-6">
                <label for="inputState">Program Pendidikan </label>
                <select id="program_les" name="program_les" class="form-control">
                    <option selected>Focus Reguler </option>
                    <option>Focus Alumni</option>
                    <option>Super Focus</option>
                    <option>Super Camp</option>
                    <option>Excellent</option>
                </select>
                </div>
                <div class="form-group col-md-6">
                <label for="inputEmail4">Biaya Pendidikan</label>
                <input type="text" class="form-control" id="biaya_pendidikan" name="biaya_pendidikan" placeholder="Rp ...,00-">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Jenis Pembayaran</label>
                <input type="text" class="form-control" id="jenis_pembayaran" name="jenis_pembayaran" placeholder="Cash / Transfer ">
                </div>
                <div class="form-group col-md-6">
                <label for="inputEmail4">Jumlah Pembayaran</label>
                <input type="text" class="form-control" id="jumlah_pembayaran" name="jumlah_pembayaran" placeholder="Rp ...,00-">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="inputEmail4">Batas Pelunasan</label>
                <input type="date"  class="form-control id="batas_lunas" name="batas_lunas">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="inputEmail4">Upload Foto Siswa</label>
                <input type="file" class="form-control" id="foto_siswa" name="foto_siswa"><br><br>
                </div>
            </div>
            <div class="form-row">
                <h3>Keterangan</h3>
                <div class="form-group col-md-12">
                <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="daftar" style="margin-left:90%">Submit</button>
        </form>
		</div>
	</div>
    </div>
</body>
</html>