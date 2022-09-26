<title>Beranda | GIAT KITA</title>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="alert alert-success alert-dismissible fade show shadow-sm " role="alert">
        <h6 class="alert-heading"><strong>Selamat Datang !! </strong><?php echo $row['nama']?></h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span></button>
    </div>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-3">
        <h1 class="h4 mb-3 ml-3 text-gray-800"><strong>Beranda</strong></h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Jumlah Nasabah -->
        <?php
        //include_once("../system/config/koneksi.php");
        //$data_nasabah = mysqli_query($conn,"SELECT * FROM nasabah");
        //$jumlah_nasabah = mysqli_num_rows($data_nasabah);
        ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Nasabah</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php //echo $jumlah_nasabah; ?> Nasabah</div>
                        </div>                            
                        <div class="col-auto mt-2">
                            <i class="bi bi-people-fill fa-2x text-primary"></i>
                        </div>
                        <p class="mb-3">
                        Sudah terdaftar dan menabung di bank sampah
                        </p>
                    </div>
                    <a href='admin.php?page=data-nasabah-full'><button class="btn btn-primary shadow-sm"><strong>Cek Nasabah</strong></button></a>
                </div>    
            </div>
        </div>

        <!-- Total Saldo Terkumpul -->
        <?php
        //include_once("../system/config/koneksi.php");
        //$sql=mysqli_query($conn,"SELECT * FROM setor");
        //while ($r=mysqli_fetch_array($sql)){
        //$jumlah[] = $r['total'];
        //}
        //Total
        //$tot = array_sum($jumlah);
        //$total = "Rp " . number_format($tot,2,',','.');
        ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Saldo Terkumpul</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php //echo $total; ?></div>
                        </div>
                        <div class="col-auto mt-2">
                            <i class="bi bi-currency-dollar fa-2x text-success"></i>
                        </div>
                        <p class="mb-3">
                        Total uang terkumpul selama menabung di bank sampah
                        </p>
                    </div>
                    <a href='admin.php?page=tambah-data-setor'><button class="btn btn-success shadow-sm"><strong>Setor Sampah</strong></button></a>
                </div>
            </div>
        </div>

        <!-- Saldo Saat Ini -->
        <?php
        //include_once("../system/config/koneksi.php");
        //$sql=mysqli_query($conn,"SELECT * FROM nasabah");
        //while ($r=mysqli_fetch_array($sql)){
        //$jumlah2[] = $r['saldo'];
        //}
        //Total
        //$tot2 = array_sum($jumlah2);
        //$total2 = "Rp " . number_format($tot2,2,',','.');
        ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Saldo Terkini
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php //echo $total2; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto mt-2">
                            <i class="bi bi-cash-coin fa-2x text-info"></i>
                        </div>
                        <p class="mb-3">
                        Saldo saat ini yang tercatat di bank sampah
                        </p>
                    </div>
                    <a href='admin.php?page=tambah-data-tarik'><button class="btn btn-info shadow-sm"><strong>Tarik Tunai</strong></button></a>
                </div>
            </div>
        </div>

        <!-- Total Sampah Terkumpul -->
        <?php
        //include_once("../system/config/koneksi.php");
        //$sql=mysqli_query($conn,"SELECT * FROM nasabah");
        //while ($r=mysqli_fetch_array($sql)){
        //$jumlah3[] = $r['sampah'];
        //}
        //Total
        //$total3 = array_sum($jumlah3);
        ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Sampah Terkumpul</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php //echo $total3; ?> Kg</div>
                        </div>
                        <div class="col-auto mt-2">
                            <i class="bi bi-recycle fa-2x text-warning"></i>
                        </div>
                        <p class="mb-3">
                        Total berat sampah selama menabung di bank sampah
                        </p>
                    </div>
                    <a href='admin.php?page=data-sampah'><button class="btn btn-warning shadow-sm"><strong>Cek Sampah</strong></button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


