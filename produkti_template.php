<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KosovaEstate</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login_register.css">
    <link rel="stylesheet" href="css/produkti-template.css">

</head>
<?php
include 'components/header.php';
$item_id = $_GET['id_produkti'] ?? 1;
require_once 'php/produktMapper.php';
$mapper = new produktMapper();
$products = $mapper->getProductByID($item_id);

?>

<body>
    <div class='Produkt_container'>
        <div class="img_container">
            <img id='produkt_img' src="<?php echo $uri = 'data:image/png;base64,' . base64_encode($products['img']); ?>" alt="">
        </div>
        <div class='info_container'>
            <div class='produkti_info_container'>
                <h2 id='emri_produktit' class='text'><?php echo $products['emri'] ?></h2>
                <h4 id='cmimi' class='text'><?php echo $products['cmimi'].'$' ?></h4>
            </div>
            <div class="buy_buttons">
                <button id='btn-buy' class="btn-product">BUY</button>
                <button id='btn-cart' class="btn-product">Add To Cart</button>
            </div>
        </div>


    </div>

</body>

<?php
include 'components/footer.php';
?>