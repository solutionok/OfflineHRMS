<?php
require 'config.php';
$conn= DbConnection();
$data=array();
if($_POST['ino']!=null)
{
      $sql = "SELECT * FROM invoice where bill_id='".$_POST['pno']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $d = $result->fetch_assoc();
        $data=json_decode($d['data']);
        $data->ino=$_POST['ino'];
        $data->pno=$_POST['pnu'];
        $data->pdate=$_POST['pdate'];
   
        $sql = "INSERT INTO `invoice1` (`bill_id`, `data`) VALUES ( '".$_POST['ino']."', '".json_encode($data)."')";

    
    
    
    
    
    
if($conn->query($sql)===TRUE)
{
    ?><Script>alert('Proforma Converted to invoice');window.location="view_invoice.php";</script><?php
    
}

      
}else{
    echo '<h2>Bill Number not found.......</h2>';die;
}
   
}else
{
    
       ?><script>alert('Invoice number ');window.location="view_invoice.php";</script><?php
 
    
}