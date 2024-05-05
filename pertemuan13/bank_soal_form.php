<?php 
  $menu = 'bank_soal';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bank Soal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once('layouts/header.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once('layouts/sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bank Soal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bank Soal</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <?php 
        $action = isset($_GET['act'])? $_GET['act'] : '';

        if($action == 'tambah'){
    ?>

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tambah Data Soal</h3>

          <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <form action="bank_soal_action.php?act=simpan" method="post">
                <div class="form-group">
                    <label for="soal">Kode Soal</label>
                    <input name="kode_soal" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="soal">Soal</label>
                    <textarea name="soal" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="bank_soal.php" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
      </div>

    <?php  } else if($action == 'edit'){ ?>
        <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Data Soal</h3>

          <div class="card-tools"></div>
        </div>
        <div class="card-body">
        <form action="bank_soal_action.php?act=edit" method="post">
                <div class="form-group">
                    <label for="soal">Kode Soal</label>
                    <input name="kode_soal" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="soal">Soal</label>
                    <textarea name="soal" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="bank_soal.php" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
      </div>

        <?php } else if($action == 'hapus'){?>
             <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Hapus Data Soal</h3>

          <div class="card-tools"></div>
        </div>
        <div class="card-body">
            Hapus Data
        </div>
      </div>
        <?php } else { ?>
 <!-- Default box -->
 <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tambah Data Soal</h3>

          <div class="card-tools"></div>
        </div>
        <div class="card-body">
            Data tidak diketahui
        </div>
      </div>
        <?php }?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include_once('layouts/footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
