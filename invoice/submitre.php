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

    
    $sql = "INSERT INTO `retailer` (`name`,`address`, `phone`, `state-code`, `pan`, `gstin`) VALUES "
        . "('".$_POST['name']."','".$_POST['add']."', '".$_POST['number']."', '".$_POST['state']."', '".$_POST['pan']."', '".$_POST['gstin']."')";
$i=$i++;
if ($conn->query($sql) === TRUE) {
  echo 'Retailer Added';
} 
 else {
echo $conn->error.' Something went Wrong. '.$error.' Rows are failed   ';    
}



?>
