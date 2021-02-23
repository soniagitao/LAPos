<!doctype html>
<html lang="en">
  <head>
  	<title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url('assets1/css/style.css') ?>">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(assets1/images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="<?= base_url('/kelolamenu'); ?>">Kelola Menu</a>
	            <!-- <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
	            </ul> -->
	          </li>
	          <li>
	              <a href="<?= base_url('/karyawancontroller'); ?>">Data Karyawan</a>
	          </li>
	          <li>
              <a href="<?= base_url('/operasionalcontroller'); ?>">Data Operasional</a>
              <!-- <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
              </ul> -->
	          </li>
            <li class="active">
              <a href="<?= base_url('/bahancontroller'); ?>">Data Bahan Baku</a>
	          </li>
	          <li>
              <a href="<?= base_url('/menucontroller'); ?>">Data Menu & Resep</a>
	          </li>
	          <li>
              <a href="<?= base_url('/stokcontroller'); ?>">Stok Menu</a>
              </li>
              <li>
              <a href="<?= base_url('/laporancontroller'); ?>">Laporan Transaksi</a>
              </li>
              <li>
              <a href="<?= base_url('/topcontroller'); ?>">Top Menu</a>
	          </li>
	        </ul>

	        <div class="footer">
	        	<!-- <p>Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div> -->
          </div>
        </nav>

        <h2 class="mb-4" style="text-align:center" >Data Bahan Baku</h2>
        <a class="btn btn-primary" href="#" role="button">Tambah</a>
        <div class="card-body table-full-width table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <th>No</th>
                    <th>Bahan</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tepung Terigu</td>
                        <td>5kg</td>
                        <td><a class="btn btn-primary" href="#" role="button">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
		</div>

    <script src="<?php echo base_url('assets1/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets1/js/popper.js') ?>"></script>
    <script src="<?php echo base_url('assets1/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets1/js/main.js') ?>"></script>
  </body>
</html>