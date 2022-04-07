<?php
require_once 'contactUsMapper.php';

if (isset($_POST['btn-remove-message'])) {
    $id = $_POST['ID'];
    $mapper = new contactUsMapper();
    $mapper->deleteMessage($id);
    header("Location:../views/dashboard.php");
}
