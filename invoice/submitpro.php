<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'header.php';

require 'config.php';
$conn= DbConnection();
$i=0;
$error=0;
   $sql = "INSERT INTO `product` (`name`, `hsnno`, `mrp`, `upc`, `baserate`,`discount`) VALUES "
        . "('".$_POST['name']."','".$_POST['hsn']."', '".$_POST['mrp']."', '".$_POST['upc']."', '".$_POST['pin']."', '".$_POST['pdp']."')";
$i=$i++;
if ($conn->query($sql) === TRUE) {
  echo 'Product Added';
} 
 else {
echo $conn->error.' Something went Wrong. '.$error.' Rows are failed   ';    
}



?>
