<?php
require_once 'newsMapper.php';

if (isset($_POST['news-submit'])) {

    $mapper = new newsMapper;
    $image = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];


    $data = file_get_contents($image);
    $mapper->insertNews($_POST['titulli'], $_POST['lajmi'], $data, $_POST['added_By']);
    header("Location:../news.php");
}
