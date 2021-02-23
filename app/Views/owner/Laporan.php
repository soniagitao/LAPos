<!doctype html>
<html lang="en">
  <head>
  	<title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url('assets1/css/style.css') ?>">

        <!-- grafik -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets3/bootstrap/css/bootstrap.min.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets3/font-awesome/css/font-awesome.min.css') ?>" />

        <script type="text/javascript" src="<?php echo base_url('assets3/js/jquery-1.10.2.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets3/bootstrap/js/bootstrap.min.js') ?>"></script>
        <!-- end -->
    </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(assets1/images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="<?= base_url('/indexowner'); ?>" >Kelola Menu</a>
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
	              <a href="<?= base_url('/karyawan'); ?>">Data Karyawan</a>
	          </li>
	          <li>
                <a href="<?= base_url('/operasional'); ?>">Data Operasional</a>
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
              <li>
              <a href="<?= base_url('/bahan'); ?>">Data Bahan Baku</a>
	          </li>
	          <li>
              <a href="<?= base_url('/menu'); ?>">Data Menu & Resep</a>
	          </li>
	          <li>
              <a href="<?= base_url('/stok'); ?>">Stok Menu</a>
              </li>
              <li class="active">
              <a href="<?= base_url('/laporan'); ?>">Laporan Transaksi</a>
              </li>
              <li>
              <a href="<?= base_url('/top'); ?>">Top Menu</a>
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

        <h2 class="mb-4" style="text-align:center" >Laporan Transaksi</h2>
        <div class="search-container">

        <!-- Bootstrap Charts - START -->
            <!-- <div class="container"> -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading">
                                <h3>Line Series</h3>
                            </div> -->
                            <div class="panel-body">
                                <div id="chart1"></div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>Polar Series</h3>
                            </div>
                            <div id="chart2" class="panel-body">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>Area Series</h3>
                            </div>
                            <div class="panel-body">
                                <div id="chart3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>StepLine Series</h3>
                            </div>
                            <div id="chart4" class="panel-body">
                            </div>
                        </div>
                    </div>
                </div>    -->
            </div>

            <!-- you need to include the shieldui css and js assets in order for the charts to work -->
            <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
            <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

            <script type="text/javascript">
                jQuery(function ($) {
                    var data1 = [12, 3, 4, 2, 12, 3, 4, 17, 22, 34, 54, 67];
                    var data2 = [3, 9, 12, 14, 22, 32, 45, 12, 67, 45, 55, 7];
                    var data3 = [23, 19, 11, 134, 242, 352, 435, 22, 637, 445, 555, 57];
                    var data4 = [13, 19, 112, 114, 212, 332, 435, 132, 67, 45, 55, 7];
                        
                    $("#chart1").shieldChart({
                        exportOptions: {
                            image: false,
                            print: false
                        },
                        axisY: {
                            title: {
                                text: "Break-Down for selected quarter"
                            }
                        },
                        dataSeries: [{
                            seriesType: "line",
                            data: data1
                        }]
                    });

                    $("#chart2").shieldChart({
                        exportOptions: {
                            image: false,
                            print: false
                        },
                        axisY: {
                            title: {
                                text: "Break-Down for selected quarter"
                            }
                        },
                        dataSeries: [{
                            seriesType: "polarbar",
                            data: data2
                        }]
                    });

                    $("#chart3").shieldChart({
                        exportOptions: {
                            image: false,
                            print: false
                        },
                        axisY: {
                            title: {
                                text: "Break-Down for selected quarter"
                            }
                        },
                        dataSeries: [{
                            seriesType: "area",
                            data: data3
                        }]
                    });

                    $("#chart4").shieldChart({
                        exportOptions: {
                            image: false,
                            print: false
                        },
                        axisY: {
                            title: {
                                text: "Break-Down for selected quarter"
                            }
                        },
                        dataSeries: [{
                            seriesType: "stepline",
                            data: data4
                        }]
                    });
                });
            </script>
            <!-- Bootstrap Charts - END -->
            </div>

    <script src="<?php echo base_url('assets1/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets1/js/popper.js') ?>"></script>
    <script src="<?php echo base_url('assets1/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets1/js/main.js') ?>"></script>
  </body>
</html>