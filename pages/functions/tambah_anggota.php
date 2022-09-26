<?php
    require_once("../system/config/koneksi.php");

    $no = mysqli_query($conn, "SELECT nik FROM anggota ORDER BY nik DESC");
    $nin = mysqli_fetch_array($no);
    $kode = $nin['nik'];

    $urut = substr($kode, 7, 3);
    $tambah = (int) $urut + 1;
    $bln = date("m");
    $thn = date("y");

    if(strlen($tambah) == 1){
        $format = "AGT".$thn.$bln."00".$tambah;
    }else if (strlen($tambah) == 2) {
        $format = "AGT".$thn.$bln."0".$tambah;
    }else{
        $format = "AGT".$thn.$bln.$tambah;
    }

    if(isset($_POST['simpan'])){
      $nik = $_POST['nik'];
      $nama = $_POST['nama'];
      $nip = $_POST['nip'];
      $jabatan = $_POST['jabatan'];
      $email = $_POST['email'];
      $telepon = $_POST['telepon'];
      $password = $_POST['password'];


      $sql = mysqli_query($conn, "SELECT * FROM anggota WHERE nik = '$nik'");

      if (mysqli_fetch_array($sql) > 0) {
        echo "<script>
                alert('Maaf akun sudah terdaftar');
              </script>";
              echo("<script>location.href = 'admin.php?page=data_sintas';</script>");

              return FALSE;      
      }

      mysqli_query($conn, "INSERT INTO anggota VALUES ('$nik','$nama','$nip','$jabatan','$email','$telepon','$password')");

      echo "<script>
                alert('Selamat berhasil input data!');
              </script>";
      echo("<script>location.href = 'admin.php?page=data_sintas';</script>");
    }
?>

<html>
<head>
  <title>Tambah Sinergi | GIAT KITA</title>
  <script type="text/javascript">
    function cek_data() {
      var x=daftar_user.nama.value;
      var x1=parseInt(x);
    
        if(x ==""){
            alert("Maaf harap input nama pengguna!");
            daftar_user.nama.focus(); 
            return false;
        }
        if(isNaN(x1)==false){
            alert ("Maaf nama harus di input huruf!");
            daftar_user.nama.focus();
        return false;
        }
        var p=daftar_user.nip.value;
        if (p ==""){
            alert("Maaf harap input NIP");
            return (false); 
        }
        var x=daftar_user.jabatan.value;
        var x1=parseInt(x);
    
        if(x==""){
            alert("Maaf harap input alamat nasabah!");
            daftar_user.jabatan.focus(); 
            return false;
        }
        var x=daftar_user.telepon.value;
        var angka = /^[0-9]+$/;

        if(x==""){
            alert("Maaf harap input nomor telepon!");
            daftar_user.telepon.focus();  
            return false;
        }
        if (!x.match(angka)) {
            alert ("Maaf nomor telepon harus di input angka!");
            daftar_user.telepon.focus();
            return false;
        }
        if(x.length!=12){
            alert("Nomor telepon harus 12 karakter!");
            daftar_user.telepon.focus();
            return false;
        }
        var x=daftar_user.email.value;
        var cek_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if(x==""){
            alert("Maaf harap input email!");
            daftar_user.email.focus(); 
            return false;
        }
        if(!x.match(cek_email)){
            alert("Format penulisan email tidak sesuai!");
            daftar_user.email.focus();
            return false;
        }
        var x=daftar_user.password.value;
        var panjang=x.length;

        if(x==""){
            alert("Maaf harap input password!");
            daftar_user.password.focus(); 
            return false;
        }
        if(panjang<6 || panjang>20){
            alert("Password di input minimum 6 karakter dan maksimum 20 karakter!");
            daftar_user.password.focus();
            return false;
        }else{
        confirm("Apakah Anda yakin sudah input data dengan benar?");
        }
        return true;
    }
  </script>
</head>
<body>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!--Begin Card -->
  <div class="card border-left-primary shadow h-100 mb-4">
    <!--- Card Header -->
    <div class="card-header">
        <h1 class="h5 m-0 font-weight-bold text-primary ml-3">Tambah Nasabah</h1>
    </div>
      <div class="card-body ml-3">
        <!-- Page Content -->
        <form id="daftar_user" action="" method="post" onsubmit="return cek_data()">
          <div class="row">
          <div class="form-group col-md-5 left-box">
            <label><strong>Nomor ID</strong></label>
            <input class="form-control" style="cursor: not-allowed;" type="text" name="nik" value="<?php echo $format; ?>" readonly/>
          </div>
         <div class="form-group col-md-5 left-box">
            <label><strong>Nama Anggota</strong></label>
            <input class="form-control" type="text" name="nama" placeholder="Masukan nama nasabah" />
         </div>
         <div class="form-group col-md-5 left-box">
            <label><strong>NIP</strong></label>
            <input class="form-control" type="text" placeholder="Masukan NIP" name="nip" />
         </div>
         <div class="form-group col-md-5 left-box">
            <label><strong>Jabatan</strong></label>
            <input class="form-control" type="text" placeholder="Masukan jabatan" name="jabatan" />
         </div>
         <div class="form-group col-md-5 left-box">
            <label><strong>Nomor Telepon</strong></label>
            <input class="form-control" type="text" placeholder="Masukan nomor telepon" name="telepon" />
         </div>
         <div class="form-group col-md-5 right-box pull-md-right">
            <label><strong>E-mail</strong></label>
            <input class="form-control" type="text" placeholder="Masukan alamat email" name="email" />
         </div>
         <div class="form-group col-md-5 right-box pull-md-right">
            <label><strong>Password</strong></label>
            <input class="form-control" type="text" placeholder="Masukan password" name="password" />
         </div>
         </div>
         <input class="btn btn-info shadow-sm" type="submit" name="simpan" value="Simpan Data"/>      
      	</form>
      </div>
  </div>
</div>
</body>
</html>
