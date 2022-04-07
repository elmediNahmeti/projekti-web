<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KosovaEstate</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/login_register.css">
  <link rel="stylesheet" href="css/kontakoni.css">
</head>

<body>
  <?php
  include "components/header.php";
  ?>
  <main style="justify-content: center;">
    <form id="forma_kontakti" action="php/contactUsVerify.php" method="POST" onsubmit="return validateMessage()">
      <label for="">Emri:</label>
      <input type="text" name="emri" class="input input-fields" placeholder=" Shkruaj emrin..." />
      <label for="">Mbiemri:</label>
      <input type="text" name="mbiemri" class="input input-fields" placeholder="Shkruaj mbiemrin..." />
      <label for="">Email:</label>
      <input type="email" name="email" class="input input-fields email" placeholder="Shkruaj emailin..">
      <label for="">Mesazhi:</label>
      <textarea name="mesazhi" class="input input-fields mesazhi" placeholder="Shkruaj mesazhin...."></textarea>
      <input id="submit_contact" name="btn-contact" type="submit" class="input submit" value="Konfirmo" />
    </form>
    <script src="js/validimi_I_Kontaktit.js"></script>
  </main>
  <?php
  include "components/footer.php";
  ?>

</body>

</html>