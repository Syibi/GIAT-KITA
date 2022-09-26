<?php
    require_once("../system/config/koneksi.php");

    if(isset($_POST['simpan'])){
      $nik = $_POST['nik'];
      $nama = $_POST['nama'];
      $nip = $_POST['nip'];
      $jabatan = $_POST['jabatan'];
      $email = $_POST['email'];
      $telepon = $_POST['telepon'];
      $password = $_POST['password'];
      
      $query = "UPDATE anggota SET nama = '$nama', nip = '$nip', jabatan = '$jabatan', email = '$email', telepon = '$telepon', password = '$password' WHERE nik= '$nik'";
      $queryact = mysqli_query($conn, $query);

      echo("<script>location.href = 'admin.php?page=data_sintas';</script>");
    }
?>
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
      <?php if(isset($_GET['id'])){$id=$_GET['id']; ?>
          <?php 
              $cek = mysqli_query($conn, "SELECT * FROM anggota WHERE nik ='".$_GET['id']."'");
              $row = mysqli_fetch_array($cek);
            ?>
        <!-- Page Content -->
        <form id="daftar_user" action="" method="post" onsubmit="return cek_data()">
          <div class="row">
          <div class="form-group col-md-5 left-box">
            <label><strong>Nomor ID</strong></label>
            <input class="form-control" style="cursor: not-allowed;" type="text" name="nik" value="<?php echo $row['nik']; ?>" readonly/>
          </div>
         <div class="form-group col-md-5 left-box">
            <label><strong>Nama Anggota</strong></label>
            <input class="form-control" type="text" name="nama" placeholder="Masukan nama nasabah" value ="<?php echo $row['nama']; ?>" />
         </div>
         <div class="form-group col-md-5 left-box">
            <label><strong>NIP</strong></label>
            <input class="form-control" type="text" placeholder="Masukan NIP" name="nip" value ="<?php echo $row['nip']; ?>" />
         </div>
         <div class="form-group col-md-5 left-box">
            <label><strong>Jabatan</strong></label>
            <input class="form-control" type="text" placeholder="Masukan jabatan" name="jabatan" value ="<?php echo $row['jabatan']; ?>"/>
         </div>
         <div class="form-group col-md-5 left-box">
            <label><strong>Nomor Telepon</strong></label>
            <input class="form-control" type="text" placeholder="Masukan nomor telepon" name="telepon" value ="<?php echo $row['telepon']; ?>"/>
         </div>
         <div class="form-group col-md-5 right-box pull-md-right">
            <label><strong>E-mail</strong></label>
            <input class="form-control" type="text" placeholder="Masukan alamat email" name="email" value ="<?php echo $row['email']; ?>"/>
         </div>
         <div class="form-group col-md-5 right-box pull-md-right">
            <label><strong>Password</strong></label>
            <input class="form-control" type="text" placeholder="Masukan password" name="password" value ="<?php echo $row['password']; ?>"/>
         </div>
         </div>
         <input class="btn btn-info shadow-sm" type="submit" name="simpan" value="Simpan Data"/>      
      	</form>
      </div>
  </div>
</div>
<?php } ?>
