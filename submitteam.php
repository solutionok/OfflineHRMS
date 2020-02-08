<?php
require 'header.php';

require 'config.php';
$conn= DbConnection();

$sql = "INSERT INTO `team` (`name`) VALUES ('".$_POST['taam']."');";
if ($conn->query($sql) === TRUE) {
    Echo '<br/>'.'Team Created';
}
 else {
echo $conn->error.' Something went Wrong . may be team name already exist. ';    
}



?>