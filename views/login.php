<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login_register.css">
    <title>Login</title>
    <?php include '../php/loginverify.php' ?>
</head>

<body>

    <div class="back-button">
        <a href="../index.php" id="btn-back">Kthehu Mbrapa</a>
    </div>

    <div class="container">

        <div class="btn-container">
            <button id="btn-login">Login</button>
            <button id="btn-register">Register</button>
        </div>

        <form id="form-login" action="../php/loginverify.php" method="POST" onsubmit="return validate()">
            <div class="login forms form-style ">
                <label for="">Username:</label>
                <input type="text" name="username" class="input input-field" placeholder="username..." />
                <label for="">Password:</label>
                <input type="password" name="password" class="input input-field" placeholder="password..." />
                <input id="login_submit" name="btn-login" type="submit" class="input submit" value="Login" />
            </div>
        </form>

        <form id="form-reg" action="../php/loginverify.php" method="POST" onsubmit="return validateRegister()">
            <div class="register forms hidden">
                <label for="">Username:</label>
                <input type="text" name="username" class="input input-field" placeholder="username..." />
                <label for="">Email:</label>
                <input type="email" name="email" class="input input-field" placeholder="Email..." />
                <label for="">Password:</label>
                <input type="password" name="password1" class="input input-field" placeholder="password..." />
                <label for="">Confirm Password:</label>
                <input type="password" name="password" class="input input-field" placeholder="password..." />
                <input id="register_submit" name='register-btn' type="submit" class="input submit" value="Register" />
            </div>
        </form>
    </div>

    <script src="../js/validimi_login_register.js"></script>

</body>

</html>