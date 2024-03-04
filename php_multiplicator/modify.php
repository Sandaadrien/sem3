<!DOCTYPE html>
<html>
  <head>
    <title>Modify</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <?php
      $indice = $_GET['m'];
    ?>
    <h1>Formulaire de modification</h1>
    <form method="get" action="fichier.php">
      <span>
      <label for="a">nombre 1 :</label>
      <input required id="a" class="input" type="number" name="m1">
      </span>
     <span>
      <label for="b">nombre 2 :</label>
      <input required id="b" class="input" type="number" name="m2">
    </span>
      <input type="hidden" value="">
      <?php
        echo "<input type=\"hidden\" value=\"$indice\" name=\"mi\">";
      ?>
      <input class="envoyer" type="submit" value="Allez au table">
    </form> 
    <img class="setting" src="./setting.png" alt="#">
  </body>
</html>
