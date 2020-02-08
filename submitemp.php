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
    
 
$sql = "INSERT INTO `employee` (`team`,`promoter_id`, `name`, `dob`, `address`, `city`, `state`, `pincode`, `dt`, `iby`, `idate`, `dnumber`, `pasport`, `documnet`, `cname`, `cmob`, `cr`,`mob`,`joinning`,`dcrt`) VALUES "
        . "('".$_POST['team']."','".$_POST['id']."', '".$_POST['name']."', '".$_POST['dob']."', '".$_POST['add']."', '".$_POST['city']."', '".$_POST['state']."', '".$_POST['pin']."', '".$_POST['typ']."', '".$_POST['ib']."','".$_POST['issued']."', '".$_POST['dnumber']."', '".$_POST['primage']."', '".$_POST['rimage']."', '".$_POST['cname']."', '".$_POST['cmob']."', '".$_POST['cr']."','".$_POST['mob']."','".$_POST['joinning']."','".$_POST['dcrt']."')";

if ($conn->query($sql) === TRUE) {
  echo 'Record Added';
} 
 else {
echo $conn->error.' Something went Wrong. '.$error.' Rows are failed   ';    
}



?>
