<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $fitur; ?> | <?php echo $title; ?></title>
  <link rel="shortcut icon" href="<?php echo $urluploadurl; ?>/upload/logo/<?php echo $favicon; ?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $urlassets; ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $urlassets; ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $urlassets; ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
  <!--link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"-->
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo $urlassets; ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo $urlassets; ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo $urlassets; ?>/plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $urlassets; ?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
  @-webkit-keyframes blinks {
    0% {
      border: 3px solid red;
    }

    25% {
      border: 3px solid green;
    }

    50% {
      border: 3px solid blue;
    }

    75% {
      border: 3px solid yellow;
    }

    100% {
      border: 3px solid red;
    }
  }

  @keyframes blink {
    0% {
      /*box-shadow: 0 0 20px #EC7A44;*/
      box-shadow: 0 0 20px red;
    }

    50% {
      box-shadow: none;
    }

    100% {
      box-shadow: 0 0 20px red;
    }
  }

  @-webkit-keyframes blink {
    0% {
      box-shadow: 0 0 20px red;
    }

    50% {
      box-shadow: 0 0 0;
    }

    100% {
      box-shadow: 0 0 20px red;
    }
  }

  @keyframes blinkyellow {
    0% {
      /*box-shadow: 0 0 20px #EC7A44;*/
      box-shadow: 0 0 20px #ffc107;
    }

    25% {
      box-shadow: none;
    }

    50% {
      box-shadow: 0 0 20px #ffc107;
    }

    75% {
      box-shadow: none;
    }

    100% {
      box-shadow: 0 0 20px #ffc107;
    }
  }

  @-webkit-keyframes blinkyellow {
    0% {
      /*box-shadow: 0 0 20px #EC7A44;*/
      box-shadow: 0 0 20px #ffc107;
    }

    25% {
      box-shadow: none;
    }

    50% {
      box-shadow: 0 0 20px #ffc107;
    }

    75% {
      box-shadow: none;
    }

    100% {
      box-shadow: 0 0 20px #ffc107;
    }
  }

  @keyframes blinkyellowss {
    0% {
      /*box-shadow: 0 0 20px #EC7A44;*/
      box-shadow: 0 0 20px #ffc107;
      border-left: 10px solid orange;
    }

    25% {
      box-shadow: none;
      border-left: 10px solid red;
    }

    50% {
      box-shadow: 0 0 20px #ffc107;
      border-left: 10px solid orange;
    }

    75% {
      box-shadow: none;
      border-left: 10px solid red;
    }

    100% {
      box-shadow: 0 0 20px #ffc107;
      border-left: 10px solid orange;
    }
  }

  @-webkit-keyframes blinkyellowss {
    0% {
      /*box-shadow: 0 0 20px #EC7A44;*/
      box-shadow: 0 0 20px #ffc107;
      border-left: 10px solid orange;
    }

    25% {
      box-shadow: none;
      border-left: 10px solid red;
    }

    50% {
      box-shadow: 0 0 20px #ffc107;
      border-left: 10px solid orange;
    }

    75% {
      box-shadow: none;
      border-left: 10px solid red;
    }

    100% {
      box-shadow: 0 0 20px #ffc107;
      border-left: 10px solid orange;
    }
  }

  .blinking {
    -webkit-animation: blink 1s infinite;
    -moz-animation: blink 1s infinite;
    -ms-animation: blink 1s infinite;
    border-radius: 5px;
    border: black 1px solid;
  }

  .blinkingyellow {
    -webkit-animation: blinkyellow 2s infinite;
    -moz-animation: blinkyellow 2s infinite;
    -ms-animation: blinkyellow 2s infinite;
    border-radius: 5px;
    border: black 1px solid;
  }

  .blinkingyellowss {
    -webkit-animation: blinkyellowss 2s infinite;
    -moz-animation: blinkyellowss 2s infinite;
    -ms-animation: blinkyellowss 2s infinite;
    border-radius: 5px;
    border: black 1px solid;
  }

  .borderprint {
    border-bottom: 5px solid #e83e8c !important;
    border-radius: 5px !important;
  }

  .bordergudangsku {
    border-right: 5px solid orange !important;
    border-radius: 5px !important;
  }

  .borderred {
    border: 3px solid red;
  }

  .borderorange {
    border: 4px solid orange;
  }

  .borderblue {
    border: 4px solid blue;
  }

  .bordergreen {
    border: 3px solid green;
  }

  .borderyellow {
    border: 3px solid yellow;
  }

  .dataTables_wrapper .table-bordered td,
  .dataTables_wrapper .table-bordered th {
    border: 0;
  }

  .dt-button.active {
    border: 2px solid #666;
    background-color: #D6EAF8 !important;
    box-shadow: inset 1px 1px 5px #999999;
  }

  .direct-chat-img.selected {
    box-shadow: 0px 0px 20px 2px #007bff;
  }

  .direct-chat-img.unread {
    border: 3px solid red;
  }

  .direct-chat-img.notread {
    border: 3px solid orange;
  }

  .forcecenterdiv {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 10px;
  }
</style>

<!-- jQuery -->
<script src="<?php echo $urlassets; ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $urlassets; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo $urlassets; ?>/plugins/chart.js/Chart.min.js"></script>
<!-- DataTables -->
<script src="<?php echo $urlassets; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $urlassets; ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $urlassets; ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $urlassets; ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo $urlassets; ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo $urlassets; ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo $urlassets; ?>/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $urlassets; ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $urlassets; ?>/dist/js/demo.js"></script>
<?php
if ($usedatatable == true) {
  //donothing
} else {
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
}
?>
<script>
  var akid = '<?php echo $akid; ?>';
  var akuser = '<?php echo $akuser; ?>';
  var aknama = '<?php echo $aknama; ?>';
  var akgroup = '<?php echo $akgroup; ?>';
  var cekfitur = '<?php echo $fitur; ?>';
  id = "menux3"

  function menuactive() {
    if (cekfitur == 'Dashboard') {
      $('#menu1').addClass('active');
    } else if (cekfitur == 'Idea Product') {
      $('#menu1a').addClass('active');
    } else if (cekfitur == 'Request Pembayaran') {
      $('#menu1b').addClass('active');
    } else if (cekfitur == 'Daftar Materi Produk') {
      $('#menux2').addClass('menu-open');
      $('#menux2 ul').show();
      $('#menu2').addClass('active');
      $('#menu21b').addClass('active');
      $('.creative .listmateriproduk').addClass('active');
    } else if (cekfitur == 'Daftar Form Produk') {
      $('#menux2').addClass('menu-open');
      $('#menux2 ul').show();
      $('#menu2').addClass('active');
      $('#menu21').addClass('active');
      $('.creative .listform, .cs .listform').addClass('active');
    } else if (cekfitur == 'FB Pixel') {
      $('#menux2').addClass('menu-open');
      $('#menux2 ul').show();
      $('#menu2').addClass('active');
      $('#menu21b').addClass('active');
    } else if (cekfitur == 'Analisa Produk') {
      $('#menux2').addClass('menu-open');
      $('#menux2 ul').show();
      $('#menu2').addClass('active');
      $('#menu21c').addClass('active');
    } else if (cekfitur == 'Dashboard Creative') {
      $('#menux2').addClass('menu-open');
      $('#menux2 ul').show();
      $('#menu2').addClass('active');
      $('#menu21d').addClass('active');
      $('.creative .dashboard').addClass('active');
    } else if (cekfitur == 'Tambah Form Produk') {
      $('#menux2').addClass('menu-open');
      $('#menux2 ul').show();
      $('#menu2').addClass('active');
      $('#menu22').addClass('active');
      $('.creative .addform').addClass('active');
    } else if (cekfitur == 'Ubah Form Produk') {
      $('#menux2').addClass('menu-open');
      $('#menux2 ul').show();
      $('#menu2').addClass('active');
      $('#menu23').addClass('active');
      $('.creative .chgform').addClass('active');
    } else if (cekfitur == 'Manage Order') {
      $('#menux3').addClass('menu-open');
      $('#menux3 ul').show();
      $('#menu3').addClass('active');
      $('#menu31').addClass('active');
      $('.cs .order').addClass('active');
    } else if (cekfitur == 'NinjaVan') {
      $('#menux3').addClass('menu-open');
      $('#menux3 ul').show();
      $('#menu3').addClass('active');
      $('#menu31b').addClass('active');
    } else if (cekfitur == 'WA Chat') {
      $('#menux3').addClass('menu-open');
      $('#menux3 ul').show();
      $('#menu3').addClass('active');
      $('#menu31bc').addClass('active');
      $('.cs .wachat').addClass('active');
    } else if (cekfitur == 'FollowUp') {
      $('#menux3').addClass('menu-open');
      $('#menux3 ul').show();
      $('#menu3').addClass('active');
      $('#menu31bb').addClass('active');
      $('.cs .followup').addClass('active');
    } else if (cekfitur == 'Log Form') {
      $('#menux3').addClass('menu-open');
      $('#menux3 ul').show();
      $('#menu3').addClass('active');
      $('#menu31ba').addClass('active');
      $('.cs .logform').addClass('active');
    } else if (cekfitur == 'Konfirmasi Payment') {
      $('#menux3').addClass('menu-open');
      $('#menux3 ul').show();
      $('#menu3').addClass('active');
      $('#menu31c').addClass('active');
      $('.cs .konfirmpayment').addClass('active');
    } else if (cekfitur == 'Request Deposit Gudang') {
      $('#menux3').addClass('menu-open');
      $('#menux3 ul').show();
      $('#menu3').addClass('active');
      $('#menu33').addClass('active');
    } else if (cekfitur == 'Manage Validasi') {
      $('#menux4').addClass('menu-open');
      $('#menux4 ul').show();
      $('#menu4').addClass('active');
      $('#menu41').addClass('active');
    } else if (cekfitur == 'Biaya Operasional') {
      $('#menux4').addClass('menu-open');
      $('#menux4 ul').show();
      $('#menu4').addClass('active');
      $('#menu42').addClass('active');
    } else if (cekfitur == 'Validasi Deposit Gudang') {
      $('#menux4').addClass('menu-open');
      $('#menux4 ul').show();
      $('#menu4').addClass('active');
      $('#menu43').addClass('active');
    } else if (cekfitur == 'Validasi Pembayaran') {
      $('#menux4').addClass('menu-open');
      $('#menux4 ul').show();
      $('#menu4').addClass('active');
      $('#menu44').addClass('active');
      $('.admin .validasibayar').addClass('active');
    } else if (cekfitur == 'NinjaVan Advance') {
      $('#menux4').addClass('menu-open');
      $('#menux4 ul').show();
      $('#menu4').addClass('active');
      $('#menu45').addClass('active');
      $('.admin .ninjahitung').addClass('active');
    } else if (cekfitur == 'JNE Hitung') {
      $('#menux4').addClass('menu-open');
      $('#menux4 ul').show();
      $('#menu4').addClass('active');
      $('#menu45c').addClass('active');
      $('.admin .jnehitung').addClass('active');
    } else if (cekfitur == 'SAP Hitung') {
      $('#menux4').addClass('menu-open');
      $('#menux4 ul').show();
      $('#menu4').addClass('active');
      $('#menu45d').addClass('active');
      $('.admin .saphitung').addClass('active');
    } else if (cekfitur == 'Sicepat Hitung') {
      $('#menux4').addClass('menu-open');
      $('#menux4 ul').show();
      $('#menu4').addClass('active');
      $('#menu45b').addClass('active');
      $('.admin .sicepathitung').addClass('active');
    } else if (cekfitur == 'Rekapan') {
      $('#menux4').addClass('menu-open');
      $('#menux4 ul').show();
      $('#menu4').addClass('active');
      $('#menu46').addClass('active');
    } else if (cekfitur == 'Gaji dan Bonus') {
      $('#menux4').addClass('menu-open');
      $('#menux4 ul').show();
      $('#menu4').addClass('active');
      $('#menu47').addClass('active');
    } else if (cekfitur == 'Setting Akun & Card') {
      $('#menux4').addClass('menu-open');
      $('#menux4 ul').show();
      $('#menu4').addClass('active');
      $('#menu47b').addClass('active');
      $('.admin .akuncardsetting').addClass('active');
    } else if (cekfitur == 'Nota') {
      $('#menux4').addClass('menu-open');
      $('#menux4 ul').show();
      $('#menu4').addClass('active');
      $('#menu47c').addClass('active');
    } else if (cekfitur == 'Laporan Keuangan') {
      $('#menux4').addClass('menu-open');
      $('#menux4 ul').show();
      $('#menu4').addClass('active');
      $('#menu48').addClass('active');
      $('.admin .laporankeuangan').addClass('active');
    } else if (cekfitur == 'Manage Gudang') {
      $('#menux5').addClass('menu-open');
      $('#menux5 ul').show();
      $('#menu5').addClass('active');
      $('#menu52').addClass('active');
    } else if (cekfitur == 'Manage User') {
      $('#menux5').addClass('menu-open');
      $('#menux5 ul').show();
      $('#menu5').addClass('active');
      $('#menu53').addClass('active');
    } else if (cekfitur == 'Setting Template WA') {
      $('#menux5').addClass('menu-open');
      $('#menux5 ul').show();
      $('#menu5').addClass('active');
      $('#menu54').addClass('active');
    } else if (cekfitur == 'Setting Template Page') { //
      $('#menux5').addClass('menu-open');
      $('#menux5 ul').show();
      $('#menu5').addClass('active');
      $('#menu54b').addClass('active');
    } else if (cekfitur == 'Rule Keuangan') {
      $('#menux5').addClass('menu-open');
      $('#menux5 ul').show();
      $('#menu5').addClass('active');
      $('#menu54e').addClass('active');
    } else if (cekfitur == 'Sicepat Destination') {
      $('#menux5').addClass('menu-open');
      $('#menux5 ul').show();
      $('#menu5').addClass('active');
      $('#menu54c').addClass('active');
    } else if (cekfitur == 'Laporan Kas & Bank') {
      $('#menux5').addClass('menu-open');
      $('#menux5 ul').show();
      $('#menu5').addClass('active');
      $('#menu54a').addClass('active');
    } else if (cekfitur == 'FB Conversion API') {
      $('#menux5').addClass('menu-open');
      $('#menux5 ul').show();
      $('#menu5').addClass('active');
      $('#menu54d').addClass('active');
    } else if (cekfitur == 'Setting General') {
      $('#menux5').addClass('menu-open');
      $('#menux5 ul').show();
      $('#menu5').addClass('active');
      $('#menu55').addClass('active');
    } else if (cekfitur == 'Packing List') {
      $('#menux6').addClass('menu-open');
      $('#menux6 ul').show();
      $('#menu6').addClass('active');
      $('#menu61').addClass('active');
      $('.cs .packinglist').addClass('active');
    } else if (cekfitur == 'Product Stock') {
      $('#menux6').addClass('menu-open');
      $('#menux6 ul').show();
      $('#menu6').addClass('active');
      $('#menu62').addClass('active');
      $('.cs .productstock').addClass('active');
    } else if (cekfitur == 'SKU - Stok') {
      $('#menux7').addClass('menu-open');
      $('#menux7 ul').show();
      $('#menu7').addClass('active');
      $('#menu71').addClass('active');
    } else if (cekfitur == 'Permintaan Pengiriman') {
      $('#menux7').addClass('menu-open');
      $('#menux7 ul').show();
      $('#menu7').addClass('active');
      $('#menu72').addClass('active');
    } else if (cekfitur == 'Informasi Paket') {
      $('#menux7').addClass('menu-open');
      $('#menux7 ul').show();
      $('#menu7').addClass('active');
      $('#menu73').addClass('active');
    } else if (cekfitur == 'Invoice') {
      $('#menux7').addClass('menu-open');
      $('#menux7 ul').show();
      $('#menu7').addClass('active');
      $('#menu74').addClass('active');
    }


  }


  //global//
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });
</script>

<body class="text-sm hold-transition sidebar-mini layout-fixed">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="<?php echo $urluploadurl; ?>/upload/logo/<?php echo $favicon; ?>"
          alt="<?php echo $title; ?> Logo"
          class="brand-image">
        <span class="brand-text font-weight-light"><?php echo $title; ?></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo $urluploadurl; ?>/upload/image/akun/<?php echo $akid; ?>.jpg" class="img-circle elevation-2" onerror="this.onerror=null;this.src='https://dummyimage.com/80x80/dbfbff/0077ff.png&text=<?php echo $akid; ?>';">
          </div>
          <div class="info">
            <a href="<?php echo base_url(); ?>panel/profile" class="d-block"><?php echo ucwords($akuser); ?> (<?php echo ucwords($aknama); ?>)</a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li id="menux1" class="nav-item has-treeview">
              <a id="menu1" href="<?php echo base_url(); ?>product" class="nav-link">
                <i class="nav-icon fas fa-list-ul"></i>
                <p>
                  Manage Product
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <nav class="mt-2" style="border-top: 1px solid #4f5962; padding-top:10px">
          <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview">
              <a href="<?php echo base_url(); ?>panel/logout" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>