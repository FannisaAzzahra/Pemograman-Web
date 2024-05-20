<?php 

include_once('model/bank_soal_model.php');

$action = $_GET['act'];

if($action == 'simpan'){
    $data = [
        'kode_soal' => $_POST['kode_soal'],
        'nama_soal' => $_POST['nama_soal']
    ];

    $insert = new BankSoal();
    $insert->insertData($data);
    header('location: bank_soal.php');
}

if($action == 'edit'){
  $id = $_GET['id'];
  $data = [
    'kode_soal' => $_POST['kode_soal'],
    'nama_soal' => $_POST['nama_soal']
  ];

  $update = new BankSoal();
  $update->updateData($id, $data);

  header('location: bank_soal.php');

}


if($action == 'delete'){
  $id = $_GET['id'];

  $delete = new BankSoal();
  $delete->deleteData($id);
  header('location: bank_soal.php');
}