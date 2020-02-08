<?php
require 'header.php';

require 'config.php';
$conn= DbConnection();
$i=0;
$error=0;
foreach($_POST['pro'] as $pro ){
    
    if(isset($_POST['pro'])&&!empty($_POST['pro'])&&$_POST['pro']!=""){
	$pc=$_POST['y'][$i]+$_POST['yr'][$i]*1;
	$tc=$_POST['y'][$i]+$_POST['yr'][$i]+$_POST['duplicate'][$i]*1;
$sql = "INSERT INTO `emp` "
        . "(`promoter`, `productive_calls`, `y`, `yr`, `duplicate`, `sale`, `workhour`, `time`, `prim`, `secondary`, `sampling`, `totalcalls`, `st`, `et`, `Date`) VALUES "
        . "('".$_POST['pro'][$i]."', '".$pc."', '".$_POST['y'][$i]."', '".$_POST['yr'][$i]."', '".$_POST['duplicate'][$i]."', '".$_POST['sale'][$i]."', '00000', '".$_POST['time'][$i]."', '".$_POST['primary'][$i]."', '".$_POST['seco'][$i]."', '".$_POST['samp'][$i]."','".$tc."', "
        . "'0000', '0000','".$_POST['date']."')";
$i++;
if ($conn->query($sql) === TRUE) {
 
} else {
   $error++;
}}}
if($error==0)
{
    Echo '<br/><br/><br/><br/><br/>'.'Data Inserted';
}
 else {
echo $conn->error.' Something went Wrong. '.$error.' Rows are failed   ';    
}



?>