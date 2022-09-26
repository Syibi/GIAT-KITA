<?php
session_start();
if (empty($_SESSION['user']) && empty($_SESSION['pass'])) {
    header('location:login.php');
} else {   
error_reporting(E_ALL | E_STRICT); 
include_once("../system/config/koneksi.php");
?>
<?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="../assets/internal/img/icon/recycling_86328.ico" />

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Custom styles for this template-->
    <link href="../assets/internal/css/sb-admin-2.min.css" rel="stylesheet">

</head>
	<body id="page-top">
		<?php 
	        $cek = mysqli_query($conn, "SELECT * FROM admin WHERE nia='".$_SESSION['nia']."'");
	        $row = mysqli_fetch_array($cek);
      	?>
    	<!-- Page Wrapper -->
    	<div id="wrapper">

			<!-- Sidebar -->
			<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

				<!-- Sidebar - Brand -->
				<a class="sidebar-brand d-flex align-items-center justify-content-center" href="login.php">
					<div class="sidebar-brand-icon">
						<i class="bi bi-recycle"></i>
					</div>
					<div class="sidebar-brand-text mx-2">GIAT KITA</div>
				</a>

				<!-- Divider -->
				<hr class="sidebar-divider my-0">

				<!-- Nav Item - Dashboard -->
				<li class="nav-item active">
					<a class="nav-link" href="admin.php">
						<i class="bi bi-speedometer2 mx-2" style="font-size:1.3rem"></i>
					<span>Beranda</span
					></a>
				</li>
				<!-- Divider -->
				<hr class="sidebar-divider">
				<!-- Heading -->
				<div class="sidebar-heading">
					Rancangan Kebijakan Teknis
				</div>
				<!-- Nav Data Anggota -->
				<!-- Data Admin -->
				<li class="nav-item my-n1">
					<a class="nav-link" 
					href="admin.php?page=data_disposisi">
					<i class="bi bi-person-lines-fill mx-2" style="font-size:1.3rem"></i>
					<span>Disposisi Pimpinan</span></a>
				</li>
						
				<!-- Data Nasabah -->
				<li class="nav-item my-n1">
					<a class="nav-link" 
					href="admin.php?page=data_sintas">
					<i class="bi bi-people-fill mx-2" style="font-size:1.3rem"></i>
					<span>Sinergi Lintas</span></a>
				</li>
				<!-- Divider -->
				<hr class="sidebar-divider">
				<!-- Data Tabungan -->
				<div class="sidebar-heading">
					Monitoring dan Pelaporan
				</div>
				<!-- Data Sampah -->
				<li class="nav-item my-n1">
                	<a class="nav-link" 
					href="admin.php?page=data-sampah">
                    <i class="bi bi-recycle mx-2" style="font-size:1.3rem"></i>
                    <span>Pelaksanaan Kegiatan</span></a>
            	</li>
				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item my-n1">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="bi bi-clipboard-check mx-2" style="font-size:1.3rem"></i>
                    <span>Laporan & Dokumentasi</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" 
				data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="admin.php?page=data-setor"><i class="bi bi-plus-circle mr-2"></i></i>Transaksi Setor</a>
                        <a class="collapse-item" href="admin.php?page=data-tarik"><i class="bi bi-dash-circle mr-2"></i>Transaksi Tarik</a>
                    </div>
                </div>
				<!-- Divider -->
				<hr class="sidebar-divider d-none d-md-block">

				<!-- Sidebar Toggler (Sidebar) -->
				<div class="d-flex justify-content-center">
					<button class="rounded-circle border-0" id="sidebarToggle">
					</button>
				</div>
			</ul>
			<!-- End of Sidebar -->

			<!-- Content Wrapper -->
			<div id="content-wrapper" class="d-flex flex-column">
				<!-- Main Content -->
				<div id="content">
					<!-- Topbar -->
					<nav class="navbar navbar-expand navbar-light bg-white topbar mb-2 static-top shadow">
						<!-- Sidebar Toggle (Topbar) -->
						<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
							<i class="fa fa-bars"></i>
						</button>

						<ul class="navbar-nav ml-auto">

							<div class="topbar-divider d-none d-sm-block"></div>
							<!-- Nav Item - User Information -->
							<li class="nav-item dropdown no-arrow">
								<a class="nav-link dropdown-toggle text-angle:center" href="#" id="userDropdown" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="mr-3 d-none d-lg-inline text-gray-600 large" style="text-align:right">
											<strong><?php echo $row['nama']?></strong>
											<br>
											<small><i><?php echo $row["jabatan"]?></i></small>
										</span>
										<span class="mr-3 d-none d-lg-inline text-gray-600 small">
										</span>
									<img class="img-profile rounded-circle"
										src="..\assets\internal\img\icon\admin.svg">
								</a>
								
								<!-- Dropdown - User Information -->
								<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
									aria-labelledby="userDropdown">
									<a class="dropdown-item" href="admin.php?page=data-admin">
										<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
										Profil Admin
									</a>
									<a class="dropdown-item" href="admin.php?page=edit-admin">
										<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
										Edit Profil
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" >
										<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
										Logout
									</a>
								</div>
							</li>
						</ul>
					</nav>
					<div class="box-1">
						<section>
							<?php 
								if(isset($_GET['page'])){
									$page = $_GET['page'];

								switch ($page) {
									case 'data_disposisi':
										include "functions/view_disposisi.php";
										break;
									case 'data_sintas':
										include "functions/view_sintas_full.php";
										break;
									case 'tambah_surat':
										include "functions/tambah_surat.php";
										break;
									case 'edit_surat_id':
										include "functions/edit_surat_id.php";
										break;
									case 'tambah_anggota':
										include "functions/tambah_anggota.php";
										break;
									case 'edit_anggota_id':
										include "functions/edit_anggota_id.php";
										break;
									case 'data-nasabah-full':
										include "../system/function/view-nasabah-full.php";
										break;
									case 'edit-nasabah-id':
										include "../system/function/edit-nasabah-id.php";
										break;
									case 'tambah-data-nasabah':
										include "../system/function/tambah-nasabah.php";
										break;
									case 'data-sampah':
										include "../system/function/view-sampah.php";
										break;
									case 'tambah-data-setor':
										include "../system/function/tambah-setor.php";
										break;
									case 'edit-setor':
										include "../system/function/edit-setor.php";
										break;
									case 'tambah-data-tarik':
										include "../system/function/tambah-tarik.php";
										break;
									case 'data-setor':
										include "../system/function/view-setor.php";
										break;
									case 'data-tarik':
										include "../system/function/view-tarik.php";
										break;
									case 'data-report':
										include "../system/function/view-report.php";
										break;
									case 'tambah-data-sampah':
										include "../system/function/tambah-sampah.php";
										break;			
									default:
										echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
										break;
								}
							}else{
								include "functions/dashboard_admin.php";
							}

							?>
						</section>
					</div>
				</div>
				<!-- End of Main Content -->
			<!-- Logout Modal-->
			<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Anda Ingin Keluar?</h5>
							<button class="close" type="button" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">Pilih "Keluar" jika anda ingin keluar dari situs ini.</div>
						<div class="modal-footer">
							<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
							<a class="btn btn-danger" href="logout.php">Keluar</a>
						</div>
					</div>
				</div>
			</div>	
			<!-- Footer -->
			<footer class="sticky-footer bg-white static-top shadow">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; GIAT KITA</span>
					</div>
				</div>
			</footer>
	
			<!-- Scroll to Top Button-->
			<a class="scroll-to-top rounded" href="#page-top">
				<i class="bi bi-arrow-up-short" style="font-size:2.5rem"></i>
			</a>
				
			<!-- Bootstrap core JavaScript-->
			<script src="../assets/vendor/jquery/jquery.min.js"></script>
			<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

			<!-- Core plugin JavaScript-->
			<script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

			<!-- Custom scripts for all pages-->
			<script src="../assets/internal/js/sb-admin-2.min.js"></script>
</html>