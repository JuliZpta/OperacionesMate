<?php

  if ($_REQUEST['radio1']=="suma")
  {
    $suma=$_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es:".$suma;
  }

if ($_REQUEST['radio1']=="resta")
 {
  $resta=$_REQUEST['valor1'] - $_REQUEST['valor2'];
   echo "La resta es:".$resta;
 }

  if ($_REQUEST['radio1']=="multiplicacion")
  {
    $multi=$_REQUEST['valor1'] * $_REQUEST['valor2'];
   echo "La multiplicación es:".$multi;
  }

  if ($_REQUEST['radio1']=="division")
  {
    $divi=($_REQUEST['valor1']) / ($_REQUEST['valor2']);
    echo "La división es:".$divi;
  }
  
?>

