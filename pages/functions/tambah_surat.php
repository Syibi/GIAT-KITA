<?php
  include("../system/config/koneksi.php");

  if (isset($_POST['simpan'])) {
  $no_surat= $_POST['no_surat'];
  $tgl_terima = $_POST['tgl_terima'];
  $pengirim = $_POST['pengirim'];
  $sifat = $_POST['sifat'];
  $perihal = $_POST['perihal'];
  $detail = $_POST['detail'];
  $nama_file = $_FILES['file_surat']['name'];
  $tipe_file = $_FILES['file_surat']['type'];
  $ukuran_file = $_FILES['file_surat']['size'];
  $source = $_FILES['file_surat']['tmp_name'];
  
  $folder = "../assets/internal/img/uploads/".$nama_file;

  if($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "application/pdf"){
     if($ukuran_file <= 1000000){
        if(move_uploaded_file($source,$folder)){
           $query = "INSERT INTO disposisi (no_surat,tgl_terima,pengirim,sifat,perihal,detail,file_surat) VALUES ('".$no_surat."', '".$tgl_terima."', '".$pengirim."', '".$sifat."', '".$perihal."', '".$detail."', '".$nama_file."')";
           $sql = mysqli_query($conn,$query);
            
           if($sql){
               echo("<script>location.href = 'admin.php?page=data_disposisi';</script>");
           }else{
              echo "
               <script>
               alert('Maaf, kesalahan sedang terjadi!, mohon kirim ulang data');
               </script>";
           } 
        }else{
           echo "
           <script>
           alert('Maaf, data gagal diupload!');
           </script>";
        }
     }else{
        echo "
        <script>
        alert('Maaf, ukuran gambar terlalu besar (max = 1mb)!');
        </script>";
     }
  }else{
     echo "
     <script>
     alert('Maaf, tipe file yang diupload salah (type = jpg/png/pdf)!');
     </script>";
  }
}
?>
<html>
<title>Tambah Surat Masuk</title>
    <script type="text/javascript">
    function cek_data() {
        var x=daftar_user.no_surat.value;
        if(x==""){
            alert("Maaf harap input nomor surat");
            daftar_user.no_surat.focus(); 
            return false;
        } 

        var x=daftar_user.tgl_terima.value;
        if(x==""){
            alert("Maaf harap input tanggal surat masuk");
            daftar_user.tgl_terima.focus(); 
            return false;
        } 

        var p=daftar_user.pengirim.value;
        if (p==""){
            alert("Maaf harap nama pengirim surat");
            daftar_user.pengirim.focus();
            return false;
        }

        var p=daftar_user.sifat.value;
        if (p=="p"){
            alert("Maaf pilih sifat surat");
            daftar_user.sifat.focus();
            return false;
        }
        
        var p=daftar_user.perihal.value;
        if (p==""){
            alert("Maaf harap isi perihal surat");
            daftar_user.perihal.focus();
            return false;
        }

        var x=daftar_user.detail.value;
        var panjang=x.length;
       
        if(x==""){
            alert("Maaf harap input detail surat!");
            daftar_user.detail.focus(); 
            return false;
        } 
       if(panjang>100){
           alert ("detail surat maksimum 100 karakter!");
          daftar_user.detail.focus();
          return false;
        }else{
        confirm("Apakah Anda yakin sudah input data dengan benar?");
        }
            return true;
        }
    </script>
<!-- Begin Page Content -->
<div class="container-fluid fa-sm">

  <!--Begin Card -->
  <div class="card border-left-success shadow h-100 mb-4">
    <!--- Card Header -->
    <div class="card-header">
            <h1 class="fa-1x m-0 font-weight-bold text-success ml-1">Tambah Surat Masuk</h1>
    </div>
      <div class="card-body ml-1">
         <form id="daftar_user" action="" method="post" enctype="multipart/form-data" onsubmit="return cek_data()">
         <div class="row">
            <div class="form-group col-md-5 left-box">
                <label><strong>Nomor Surat</strong></label>
                <input class="form-control" type="text" placeholder="Masukan Nomor Surat" name="no_surat" />
            </div>
            <div class="form-group col-md-5 left-box">
                <label><strong>Tanggal Surat Masuk</strong></label>
                <input class="form-control"type="date" placeholder="Masukan tanggal surat masuk" id="date" name="tgl_terima" />
                <script type="text/javascript">
                    $('#date').datepick({dateFormat: 'dd-mm-yyyy'});
                </script>
            </div>
            <div class="form-group col-md-5 left-box">
                <label><strong>Pengirim</strong></label>
                <input class="form-control" type="text" placeholder="Masukan Nama/Instansi Pengirim" name="pengirim" />
            </div>
            <div class="form-group col-md-5 left-box">
               <label><strong>Sifat</strong></label>
               <select class="form-control" name="sifat">
                     <option value="p">--- Pilih Sifat Surat ---</option>
                     <option value="Penting">Penting</option>
                     <option value="Rahasia">Rahasia</option>
                     <option value="Biasa">Biasa</option>
                     <option value="Segera">Segera</option>
                     <option value="Sangat Segera">Sangat Segera</option>
               </select>
            </div>
            <div class="form-group col-md-5 left-box">
               <label><strong>Perihal</strong></label>
               <input class="form-control" type="text" placeholder="Masukkan perihal surat" name="perihal"/>
            </div>
            <div class="form-group col-md-5 right-box pull-md-right">
               <label><strong>Detail Surat</strong></label>
               <textarea class="form-control" type="text" placeholder="Masukan detail surat" name="detail"></textarea>
            </div>
            <div class="form-group col-md-5 right-box pull-md-right">
               <label><strong>File Surat (*pdf/jpg/png)</strong></label>
               <input type="file" class="form-control-file mb-3" name="file_surat"/>
            </div>
         </div>
         <input class="btn btn-success shadow-sm" type="submit" name="simpan" value="Simpan Data"/>      
         </form> 
      </div>
   </div>
</div>
</html>