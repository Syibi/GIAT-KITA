<title>Disposisi Pimpinan | GIAT KITA</title>

<!-- Begin Page Content -->
<div class="container-fluid fa-sm">

<!--Begin Card -->
<div class="card shadow h-100 mb-4">
    <!--- Card Header -->
    <div class="card-header">
        <div class="row ml-auto">
            <h1 class="h5 m-0 font-weight-bold text-primary mt-1">Data Disposisi</h1>
            <a href="admin.php?page=tambah_surat" class="ml-auto mr-3 mt-1">
                <button class="btn btn-sm btn-info shadow-sm"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Tambah</button>
            </a>
        </div>
    </div>
    <!-- content -->
    <div class="card-body">
        <div class="row no-gutters align-items-center">

        <table class="table table-responsive-lg table-bordered table-hover">
            <thead class="thead-light">
                <tr class="text-center">
                    <th>No</th>
                    <th>No.Surat</th>
                    <th>Tgl.Terima</th>
                    <th>Pengirim</th>
                    <th>Sifat</th>
                    <th>Perihal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 0;
                    $query = mysqli_query($conn, "SELECT * FROM disposisi ORDER BY tgl_terima ASC");
                    while($row = mysqli_fetch_assoc($query)){$no++;
                ?>
                <tr>
                    <td class="text-center"><?php echo "$no" ?></td>
                    <td><?php echo $row['no_surat'] ?></td>
                    <td><?php echo $row['tgl_terima'] ?></td>
                    <td><?php echo $row['pengirim'] ?></td>
                    <td><?php echo $row['sifat'] ?></td>
                    <td><?php echo $row['perihal'] ?></td>
                    <td><?php echo $row['status'] ?></td>         
                    <td class="d-flex justify-content-center"> 
                    <div class="btn-toolbar" role="toolbar" aria-label="aksi">
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                            <a href="admin.php?page=edit_surat_id&id=<?php echo $row['no_surat']; ?>">
                            <button class="btn btn-sm btn-success shadow-sm"><i class ="fa fa-edit"></i></button> 
                            </a>
                        </div>
                        <div class="btn-group" role="group" aria-label="Second group">
                            <a onclick="return confirm('Anda yakin ingin menghapus data ini?')" href="../system/function/delete-nasabah.php?id=<?php echo $row['nin']; ?>">
                            <button class="btn btn-sm btn-warning shadow-sm"><i class ="fa fa-edit"></i></button>
                            </a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
        <br>
        <div class="btn-toolbar" role="toolbar" aria-label="aksi">
            <div class="btn-group mr-2" role="group" aria-label="First group">
                <a target="_blank" href="../system/function/excel-nasabah.php">
                <button class="btn btn-sm btn-success shadow-sm"><i class="fa fa-print mr-2" aria-hidden="true"></i>Unduh Excel</button>
                </a>
            </div>

            <div class="btn-group" role="group" aria-label="Second group">
                <a target="_blank" href="../system/function/print-nasabah.php">
                <button class="btn btn-sm btn-danger shadow-sm"><i class="fa fa-print mr-2" aria-hidden="true"></i>Cetak PDF</button>
                </a>
            </div>
        </div>
        
        <script type="text/javascript" src="../datatables/js/jquery.min.js"></script>
        <script type="text/javascript" src="../datatables/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
            $('#example').DataTable();
            } );
        </script>
    </div>
</div>