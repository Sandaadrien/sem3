
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./css/stylePHP.css" >
  <title>Table</title>
</head>
<body>
  
<?php
  
session_start();
/*------------------------------------------*/
  /// Les valeurs de la borneA et la borneB
  if(!isset($_SESSION['BorneA'])){
    $_SESSION['BorneA'] = $_GET['a'];
  }
  if(!isset($_SESSION['BorneB'])){
    $_SESSION['BorneB'] = $_GET['b'];
  }
  $A=$_SESSION['BorneA'];
  $B=$_SESSION['BorneB'];
/*------------------------------------------*/
  /// Pour Les lignes qui ont été supprimer
  if(!isset($_SESSION['tabDelete'])){
    $_SESSION['tabDelete']=array();
  }
  $D=$_GET['d'];
  $_SESSION['tabDelete'][]=$D;
 
/*------------------------------------------*/
  /// Pour les lignes qui ont été modifier
  if(!isset($_SESSION['tabModify'])){
    $_SESSION['tabModify']=array();
  }
  $m1=$_GET['m1'];
  $m2=$_GET['m2'];
  $mi=$_GET['mi'];

  $LineModify=array($mi,$m1,$m2);
  
  $_SESSION['tabModify'][]=$LineModify;
  /*---------------------------------------------*/
  /// L'affichage du tableau
  echo "<table>";

  for($i=0;$i<=$B;$i++){
    $misyChange=0;
    $ligne=array();

    foreach($_SESSION['tabModify'] as $elt){
      if($elt[0]==$i){
        $ligne=$elt;
        $misyChange=1;
      }
    }
    
    $c=$A*$i;
    $ilYA=0;
    foreach($_SESSION['tabDelete'] as $elt){
      if($i==$elt)
        $ilYA=1;
      
    }
    if($misyChange!=1){
      if($i%2==0 && $ilYA!=1){
    
        echo "<tr style=\"background-color: #15F5BA;\">";
        echo "<td>$A</td>";
        echo "<td>x</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo "<td>$c</td>";
        echo "<td class=\"modify\"><a href=\"http://www.mitip.com/modify.php?m=$i\"><img class=\"iconm\" src=\"http://www.mitip.com/eraser.svg\"></a></td>";
        echo "<td><a href=\"http://www.mitip.com/fichier.php?d=$i\"><img class=\"icon\" src=\"http://www.mitip.com/delete.svg\"></a></td>";
        echo "</tr>";
      }
      else if($i%2!=0 && $ilYA!=1){
  
  
        echo "<tr style=\"background-color: #836FFF;\">";
        echo "<td>$A</td>";
        echo "<td>x</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo "<td>$c</td>";
        echo "<td class=\"modify\"><a href=\"http://www.mitip.com/modify.php?m=$i\"><img class=\"iconm\" src=\"http://www.mitip.com/eraser.svg\"></a></td>";
          echo "<td><a href=\"http://www.mitip.com/fichier.php?d=$i\"><img class=\"icon\" src=\"http://www.mitip.com/delete.svg\"></a></td>";
        echo "</tr>";
      }
  
    } else{
      if($i%2==0 && $ilYA!=1){
    
        echo "<tr style=\"background-color: #15F5BA;\">";
        echo "<td>$ligne[1]</td>";
        echo "<td>x</td>";
        echo "<td>$ligne[2]</td>";
        echo "<td>=</td>";
        $c=$ligne[1]*$ligne[2];
        echo "<td>$c</td>";
        echo "<td class=\"modify\"><a href=\"http://www.mitip.com/modify.php?m=$i\"><img class=\"iconm\" src=\"http://www.mitip.com/eraser.svg\"></a></td>";
          echo "<td><a href=\"http://www.mitip.com/fichier.php?d=$i\"><img class=\"icon\" src=\"http://www.mitip.com/delete.svg\"></a></td>";
        echo "</tr>";
      }
      else if($i%2!=0 && $ilYA!=1){
  
  
        echo "<tr style=\"background-color: #836FFF;\">";
        echo "<td>$ligne[1]</td>";
        echo "<td>x</td>";
        echo "<td>$ligne[2]</td>";
        echo "<td>=</td>";
        $c=$ligne[1]*$ligne[2];
        echo "<td>$c</td>";
        echo "<td class=\"modify\"><a href=\"http://www.mitip.com/modify.php?m=$i\"><img class=\"iconm\" src=\"http://www.mitip.com/eraser.svg\"></a></td>";
        echo "<td><a href=\"http://www.mitip.com/fichier.php?d=$i\"><img class=\"icon\" src=\"http://www.mitip.com/delete.svg\"></a></td>";
        echo "</tr>";
      }
  
    }
  }

  echo "</table>";
?>

  <img src="./icons/delete.svg" alt="">

</body>
</html>
