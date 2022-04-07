<?php

require_once 'userMapper.php';
require_once 'produktMapper.php';
require_once 'newsMapper.php';

if (isset($_POST['btn-remove'])) {
    $id = $_POST['ID'];
    $mapper = new userMapper;
    $mapper->deleteUser($id);
    header("Location:../views/dashboard.php");
}
if (isset($_POST['btn-upgrade-role'])) {
    $id = $_POST['ID'];
    $mapper = new userMapper;
    $mapper->upgradeRole($id);
    header("Location:../views/dashboard.php");
}
if (isset($_POST['btn-downgrade-role'])) {
    $id = $_POST['ID'];
    $mapper = new userMapper;
    $mapper->downgradeRole($id);
    header("Location:../views/dashboard.php");
}

if (isset($_POST['btn-remove-produkt'])) {
    $id = $_POST['ID'];
    $mapper = new produktMapper;
    $mapper->deleteProduct($id);
    header("Location:../views/dashboard.php");
}
if (isset($_POST['btn-remove-lajmi'])) {
    $id = $_POST['ID'];
    $mapper = new newsMapper;
    $mapper->removeNews($id);
    header("Location:../views/dashboard.php");
}
