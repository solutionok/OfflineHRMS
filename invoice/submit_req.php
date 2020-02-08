<?php
require 'header.php';

require 'config.php';
$conn= DbConnection();
$i=0;
$error=0;
foreach($_POST['pro'] as $pro ){
    
    if(isset($_POST['pro'])&&!empty($_POST['pro'])&&$_POST['pro']!=""){
$sql = "INSERT INTO `emp` "
        . "(`promoter`, `productive_calls`, `y`, `yr`, `duplicate`, `sale`, `workhour`, `time`, `prim`, `secondary`, `sampling`, `totalcalls`, `st`, `et`, `Date`) VALUES "
        . "('".$_POST['pro'][$i]."', '".$_POST['procall'][$i]."', '".$_POST['y'][$i]."', '".$_POST['yr'][$i]."', '".$_POST['duplicate'][$i]."', '".$_POST['sale'][$i]."', '".$_POST['workh'][$i]."', '".$_POST['time'][$i]."', '".$_POST['primary'][$i]."', '".$_POST['seco'][$i]."', '".$_POST['samp'][$i]."', '".$_POST['tc'][$i]."', "
        . "'0000', '0000','".$_POST['date']."')";
$i=$i++;
if ($conn->query($sql) === TRUE) {
 
} else {
   $error++;
}}}
if($error==0)
{
    Echo '<br/>'.'Data Inserted';
}
 else {
echo $conn->error.' Something went Wrong. '.$error.' Rows are failed   ';    
}



?>