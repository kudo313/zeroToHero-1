<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Receiving Input</title>
  </head>
  <body>
    <font size=5>Thank You: Got Your Input.</font>
    <?php
      $email = $_POST["email"];
      $contact = $_POST["contact"];
      print ("<br>Your email address is $email");
      print ("<br> Contact preference is $contact");
     ?>
  </body>
</html>
