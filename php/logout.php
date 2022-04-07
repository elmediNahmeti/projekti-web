<?php

session_start();
session_destroy();
echo 'test';
header('Location: ../index.php');

?>