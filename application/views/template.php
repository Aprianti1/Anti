<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EGIStore</title>
    <!-- Bootstrap Styles-->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="<?php echo base_url() ?>/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="<?php echo base_url() ?>/assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="<?php echo base_url() ?>/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div>
        <nav class="navbar navbar-default top-navbar">
         
                <a class="navbar-brand">EGISTORE</a>
                 <ul class="nav" id="main-menu">
                    <li>
                        <a href="<?php echo base_url() ?>">Nama Kelompok</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'kategori'?>"> Kategori Barang</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'barang'?>">Data Barang</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'operator'?>">Operator Kasir</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'transaksi'?>">Transaksi </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'transaksi/laporan'?>">Laoran</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'transaksi/excel'?>">Laporan Excel</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'transaksi/pdf'?>" target="_blank">Laporan PDF</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'auth/logout'?>">Keluar</a>
                    </li>
                </ul>

        </nav>
        <div >
        
            <?php echo $contents; ?>
  
        </div>

    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="<?php echo base_url() ?>/assets/js/jquery.js"></script>
      <!-- Bootstrap Js -->
    <script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="<?php echo base_url() ?>/assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url() ?>/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <!-- Morris Chart Js -->
    <script src="<?php echo base_url() ?>/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="<?php echo base_url() ?>/assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
