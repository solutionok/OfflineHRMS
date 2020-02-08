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
    
$sql = "INSERT INTO `distributor` (`name`, `address`, `city`, `pincode`, `gst`, `rspan`, `salesman`, `beat`, `state`, `refno`, `vehiclename`,`mob`) VALUES "
        . "('".$_POST['name']."','".$_POST['add']."', '".$_POST['city']."', '".$_POST['pin']."', '".$_POST['gstin']."', '".$_POST['pan']."', '".$_POST['sname']."', '".$_POST['bname']."', '".$_POST['state']."', '".$_POST['rnumber']."', '".$_POST['vname']."', '".$_POST['number']."')";
$i=$i++;
if ($conn->query($sql) === TRUE) {
  echo 'Distributor Added';
} 
 else {
echo $conn->error.' Something went Wrong. '.$error.' Rows are failed   ';    
}



?>
