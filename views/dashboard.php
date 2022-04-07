<?php
session_start();
if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/dashboard.css">
        <title>Dashboard</title>
    </head>

    <body>
        <div class="back-button">
            <a href="../index.php" id="btn-back">Kthehu Mbrapa</a>
        </div>
        <?php
        require_once '../php/contactUsMapper.php';
        $mapperMessages = new contactUsMapper();
        $messages = $mapperMessages->getAllMessages();
        require_once '../php/userMapper.php';
        $mapperUser = new UserMapper();
        $users = $mapperUser->getAllUsers();
        require_once '../php/produktMapper.php';
        $mapperProdukt = new produktMapper();
        $produktet = $mapperProdukt->getAllProducts();
        require_once '../php/newsMapper.php';
        $mapperNews = new newsMapper();
        $news = $mapperNews->getAllNews();
        ?>

        <div class='btn_dashboard_container'> 
            <button id="btn-users" class="btn">Users</button>
            <button id="btn-contactUs" class="btn">Contact Us</button>
            <button id="btn-products" class="btn">Products</button>
            <button id="btn-news" class="btn">News</button>
        </div>
        <div class="users tables ">
            <table class="content-table-users">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Emri I user</th>
                        <th>Imella</th>
                        <th>Roli</th>
                        <th>Fshij Userin</th>
                        <th>Bej Admin</th>
                        <th>Hek Admin</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $useri) { ?>
                        <tr>
                            <td><?php echo $useri['user_id']; ?></td>
                            <td><?php echo $useri['username']; ?></td>
                            <td><?php echo $useri['email']; ?></td>
                            <td><?php echo $useri['role']; ?></td>
                            <form action="../php/DashboardUser.php" method="POST">
                                <input type="text" name="ID" hidden value="<?php echo $useri['user_id']; ?>"></input>
                                <td><input id="remove" name="btn-remove" type="submit" class="input submit" value="remove" /></td>
                            </form>
                            <form action="../php/DashboardUser.php" method="POST">
                                <input type="text" name="ID" hidden value="<?php echo $useri['user_id']; ?>"></input>
                                <td><input id="upgrade-role" name="btn-upgrade-role" type="submit" class="input submit" value="upgrade role" /></td>
                            </form>
                            <form action="../php/DashboardUser.php" method="POST">
                                <input type="text" name="ID" hidden value="<?php echo $useri['user_id']; ?>"></input>
                                <td><input id="upgrade-role" name="btn-downgrade-role" type="submit" class="input submit" value="downgrade role" /></td>
                            </form>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="messages tables hidden">
            <table class="table-messages">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Emri</th>
                        <th>Mbiemri</th>
                        <th>Email</th>
                        <th>Mesazhi</th>
                        <th>Fshij Mesazhin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($messages as $mesazhet) {
                    ?>
                        <tr>
                            <td><?php echo  $mesazhet['message_ID']; ?></td>
                            <td><?php echo $mesazhet['emri']; ?></td>
                            <td><?php echo $mesazhet['mbiemri']; ?></td>
                            <td><?php echo $mesazhet['email']; ?></td>
                            <td><?php $string = $mesazhet['message'];
                                if (strlen($string) > 50) {
                                    $split = explode(" ", $string);
                                    for ($i = 0; $i < sizeof($split); $i++) {
                                        if ($i != 0 && $i % 10 == 0) {
                                            echo $split[$i] . "</br>";
                                        } else {
                                            echo $split[$i] . " ";
                                        }
                                    }
                                } else {
                                    echo $string;
                                }
                                ?></td>
                            <form action="../php/DashboardMessage.php" method="POST">
                                <input type="text" name="ID" hidden value="<?php echo $mesazhet['message_ID']; ?>"></input>
                                <td><input id="remove" name="btn-remove-message" type="submit" class="input submit" value="remove" /></td>
                            </form>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="products tables hidden">
            <table class="content-table-users">
                <thead>
                    <tr>
                        <th>ID_produkti</th>
                        <th>Emri Produkti</th>
                        <th>Cmimi</th>
                        <th>Foto</th>
                        <th>Fshij Produktin</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($produktet as $produkti) { ?>
                        <tr>
                            <td><?php echo $produkti['id_produkti']; ?></td>
                            <td><?php echo $produkti['emri']; ?></td>
                            <td><?php echo $produkti['cmimi']; ?></td>
                            <td> <img src="<?php echo ('data:image/png;base64,' . base64_encode($produkti['img'])); ?>" id='img_produkti_dashboard'> </img></td>

                            <form action="../php/DashboardUser.php" method="POST">
                                <input type="text" name="ID" hidden value="<?php echo $produkti['id_produkti']; ?>"></input>
                                <td><input id="remove" name="btn-remove-produkt" type="submit" class="input submit" value="Delete" /></td>
                            </form>


                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="news tables hidden">
            <table class="content-table-users">
                <thead>
                    <tr>
                        <th>ID_Lajmi</th>
                        <th>Titulli</th>
                        <th>Lajmi</th>
                        <th>Foto</th>
                        <th>Fshij Lajmin</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($news as $new) { ?>
                        <tr>
                            <td><?php echo $new['id_lajmi']; ?></td>
                            <td><?php echo $new['titulli']; ?></td>
                            <td><?php echo $new['lajmi']; ?></td>
                            <td> <img src="<?php echo ('data:image/png;base64,' . base64_encode($new['img'])); ?>" id='img_produkti_dashboard'> </img></td>

                            <form action="../php/DashboardUser.php" method="POST">
                                <input type="text" name="ID" hidden value="<?php echo $new['id_lajmi']; ?>"></input>
                                <td><input id="remove" name="btn-remove-lajmi" type="submit" class="input submit" value="Delete" /></td>
                            </form>


                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </body>
                        <script src="../js/dashboard.js"></script>
    </html>
<?php } else {
    header("Location:../index.php");
} ?>