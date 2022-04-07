<?php
session_start();
if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../css/createProduct.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New Product</title>
    </head>

    <body>
        <?php

        include_once '../php/userMapper.php';
        //include_once '../php/AdminUser.php';
        ?>
        <div class="back-button">
            <a href="../products.php" id="btn-back">Kthehu Mbrapa</a>
        </div>
    </body>
    <div class="container">

        <div class="btn-container">
            <H1> Te dhenat e produktit :</H1>
        </div>

        <form id="form-login" action="../php/addProduct.php" method="POST" enctype="multipart/form-data" onsubmit='return validimi()'>
            <div class="login forms form-style ">
                <label for="">Emri:</label>
                <input type="text" name="name"  class="input input-field" />
                <label for="">Cmimi:</label>
                <input type="number" name="cmimi" class="input input-field" />
                <input type="text" name="added_By" hidden value="<?php $temp =  $_SESSION["name"];
                                                                    //$temp = $this->getUsername();
                                                                    //var_dump($temp) ;
                                                                    $mapper = new userMapper;
                                                                    $result = $mapper->getUserByID($temp);

                                                                    echo $result['username'] ?>">
                <input type="file" id="img" name="file" accept="image/*">
                <input id="login_submit" name="product-submit" type="submit" class="input submit" value="Add Product" />
            </div>
        </form>
    </div>
    <script src="../js/validim_lajmi_produkti.js"></script>
    </html>
<?php } else {
    header("Location:../index.php");
} ?>