<?php 

$action = $_GET['act'];

if($action == 'simpan'){
  echo 'Data disimpan';

}

if($action == 'edit'){
  echo 'Data diubah';

}


if($action == 'hapus'){
  echo 'Data dihapus';

}

// header('location: user.php');