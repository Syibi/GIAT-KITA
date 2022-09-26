<?php
  require_once("../system/config/koneksi.php");

 if (isset($_POST['simpan'])) {
    $no_surat= $_POST['no_surat'];
    $tgl_terima = $_POST['tgl_terima'];
    $pengirim = $_POST['pengirim'];
    $sifat = $_POST['sifat'];
    $perihal = $_POST['perihal'];
    $detail = $_POST['detail'];
    $nama_file = "Koala.jpg";
    $status = "Penting";
    //$tipe_file = $_FILES['file_surat']['type'];
    //$ukuran_file = $_FILES['file_surat']['size'];
    //$source = $_FILES['file_surat']['tmp_name'];

    $query = "UPDATE disposisi SET tgl_terima = '$tgl_terima', pengirim = '$pengirim', sifat = '$sifat', perihal = '$perihal', detail = '$detail', file_surat = '$nama_file', status = '$status', WHERE no_surat= '$no_surat'";
    echo($query);
    $queryact = mysqli_query($conn, $query);
    if ($queryact) {
      echo('upload berhasil');
    } else {
      echo('gagal');
    }

  }
?>

<title>Edit Profil Nasabah</title>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!--Begin Card -->
  <div class="card border-left-primary shadow h-100 mb-4">
    <!--- Card Header -->
    <div class="card-header">
        <h1 class="h5 m-0 ml-2 font-weight-bold text-primary">Detail Surat</h1>
    </div>
      <div class="card-body">
        <?php if(isset($_GET['id'])){$id=$_GET['id']; ?>
          <?php 
              $cek = mysqli_query($conn, "SELECT * FROM disposisi WHERE no_surat ='".$_GET['id']."'");
              $row = mysqli_fetch_array($cek);
          ?>
          <div class="row no-gutters align-items-center">
          </div>
            <!-- Page Content -->
            <form action="" method="post">
              <div class="row justify-content-center">
              <div class="form-group col-md-5 left-box">
                <label><strong>Nomor Surat</strong></label>
                <input type="text" style="cursor: not-allowed;" name="no_surat" class="form-control" value="<?php echo $row['no_surat']; ?>" />
              </div>
              <div class="form-group col-md-5 left-box">
                <label><strong>Tgl Surat Masuk</strong></label>
                <input class="form-control" type="text" name="tgl_terima" value="<?php echo $row['tgl_terima'] ?> "/>
              </div>
              <div class="form-group col-md-5 left-box">
                <label><strong>Pengirim</strong></label>
                <input class="form-control" type="text" name="pengirim" value="<?php echo $row['pengirim'] ?>" required/>
              </div>
              <div class="form-group col-md-5 left-box">
                <label><strong>Sifat</strong></label>
                <input class="form-control" type="text" name="sifat" value="<?php echo $row['sifat'] ?>" required/>
              </div>
              <div class="form-group col-md-5 right-box pull-md-right">
                <label><strong>Perihal</strong></label>
                <input class="form-control" type="text" name="perihal" value="<?php echo $row['perihal'] ?>" required/>
              </div>
              <div class="form-group col-md-5 right-box pull-md-right">
                <label><strong>Detail</strong></label>
                <input class="form-control" type="text" name="detail" value="<?php echo $row['detail'] ?>" required/>
              </div>
              <div class="form-group col-md-5 right-box pull-md-right">
                <label><strong>File Surat</strong></label>
                <input class="form-control" style="cursor: not-allowed" type="text" disabled="disabled" name="file_surat" value="<?php echo $row['file_surat'] ?>"/>
              </div>
              <?php
                $filename = "../assets/internal/img/uploads/";
                $filename .= $row['file_surat'];
              ?>
              <iframe class="mb-4"  src="<?php echo $filename ?>" width="90%" height="350px">
              </iframe>
              
              <input class="btn btn-info mb-3 shadow-sm" onclick="alert('Berhasil Mengubah Data Nasabah!')" type="submit" name="simpan" value="Simpan Data"/>  
              
              <input class="btn btn-danger ml-2 mb-3 shadow-sm" onclick="alert('Berhasil Mengubah Data Nasabah!')" type="submit" name="Hapus" value="Simpan Data"/> 

              </div>
            </form>
          </div>
        </div>
      </div>
<?php } ?>