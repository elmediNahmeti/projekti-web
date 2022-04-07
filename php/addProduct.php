<?php
require_once 'produktMapper.php';

if (isset($_POST['product-submit'])) {

    $mapper = new produktMapper;
    $image = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];


    $data = file_get_contents($image);
    //$image = base64_encode($data);
    // echo $image;
    // $imgData = addslashes(file_get_contents($_FILES['file']['tmp_name']));

    //echo $file;
    //echo $image;
    //echo $_POST['name'].'emri  '. $_POST['cmimi']. 'cmimi ' . $_POST['added_By'];
    $mapper->insertProduct($_POST['name'], $_POST['cmimi'], $data, $_POST['added_By']);
    header("Location:../products.php");
}
