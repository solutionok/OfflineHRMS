<?php

error_reporting(0);
require 'config.php';
$conn= DbConnection();
$data=array();
if($_POST['ino']!=null)
{
    
    $data=$_POST;
    $sql = "INSERT INTO `invoice1` (`bill_id`, `data`) VALUES ( '".$data['ino']."', '".json_encode($data)."')";

$conn->query($sql);

}else
{
     $sql = "SELECT * FROM invoice1 where bill_id='".$_GET['id']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $d = $result->fetch_assoc();
        $data=json_decode($d['data']);
      
}
else
{
    echo '<h2>Bill Number not found.......</h2>';die;
    
}
//echo $_GET['id'];
 // print_r($d);
      //  die;
   
}
function getcor($number)
{
    
    
  //  $number = 190908100.25;
   $no = floor($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
  
  if($points==null){
  $points="zero";}
  return $result . "Rupees  " . $points . " Paise";

    
}
  // var_dump($data);
   $data1 = json_decode(json_encode($data),True);
$data=array();
$data=$data1;


  $sql = "SELECT * FROM distributor where id='".$data['dis']."'";
$result = $conn->query($sql);
$dis=array();
$ret=array();
$qty=$data['qty'];

$unit=$data['unit'];

if ($result->num_rows > 0) {
  $dis = $result->fetch_assoc();
        
}
$sql = "SELECT * FROM retailer where id='".$data['ret']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $ret = $result->fetch_assoc();
        
}
$i=1;
$csv=0;
$pcsv=0;
$disc=0;
$ta=0;
$cg=0;
$sg=0;
$na=0;
$aj=0;

$invoice=array();
?>
<html>
<title>Emp Bill</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<style>b{color:#008080;}</style>
<body>

<div class="w3-container">
  <table class="w3-table w3-bordered" >
    <tr>
      <td colspan="3"style="text-align:right;"><h4>
              <h3>  <b>INVOICE <?php echo $data['ino'];?></b></h3><br/>
<b>Date </b>  <?php echo $data['idate'];?><br/>
<b>Due Date </b>   <?php echo $data['ddate'];?><br/>
<b>P.O. Number </b> <?php echo $data['pno'];?><br/>
<b>P.O. Date </b>  <?php echo $data['pdate'];?>
</b>
	  </h4></td>
    </tr>
    <tr>
        
        
        
        
        
        
      <td>
	  <h4>
	  <b><?php echo $dis['name'];?></b><br/>
	 <?php echo $dis['address'];?><br/>
 <?php echo $dis['AddL2'];?>,
PIN Code  <?php echo $dis['pincode'];?>, India<br/>
 <?php echo $dis['mob'];?>
<br/>
Promoting Intelligence...!<br/>
GSTIN:  <?php echo $dis['gst'];?>
	  </h4></td>
      <td>  <h4>
	  <b>Ship to: </b><br/>
           <?php echo $ret['name'];?>
	  <?php echo $ret['address'];?><br/>
 <?php echo $ret['AddL2'];?>, <?php echo $ret['state-code'];?>
, India<br/>
 <?php echo $ret['phone'];?><br/>
GSTIN:  <?php echo $ret['gstin'];?><br/>
PANNO: <?php echo $ret['pan'];?>
	  </h4></td>
      <td>  <h4>
	  <b>Bill to :</b><br/>
	 <?php echo $ret['name'];?>
	  <?php echo $ret['address'];?><br/>
 <?php echo $ret['AddL2'];?>, <?php echo $ret['state-code'];?>
, India<br/>
 <?php echo $ret['phone'];?><br/>
  </h4></td>
    </tr>
    <tr>
      <td colspan="3">
	  <table class="w3-table w3-fg" width="100%" >
    <tr><td>NO </td><td>PRODUCT / SERVICE NAME </td><td> HSN/SAC </td><td> QTY </td><td> UNIT </td><td> PRICE </td><td>CGST </td><td>SGST </td><td>AMOUNT</tr>
	
    <?php 
    $r=0;
$sgst=0;
$cgst=0;
$total=0;
$mrp=0;
                     foreach ($data['product'] as $product){
                         
                         
                     $sql = "SELECT * FROM product where id='".$product."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $sgst+=((int)$data[$row['id'].'tax']*(int)$data[$row['id'].'mrp'])/100;
    $cgst+=((int)$data[$row['id'].'tax']*(int)$data[$row['id'].'mrp'])/100;
    $total+=($sgst+$cgst+(int)$data[$row['id'].'mrp']);
   $mrp+=(int)$data[$row['id'].'mrp']; 
        
    
                     ?>
                     
                     
    
    
    
    <tr><td><?php echo $i++; ?> </td><td><?php echo $row['name']; ?> </td><td> <?php echo $row['hsnno']; ?> </td><td> <?php echo $qty[$i-2]; ?> </td><td><?php echo $unit[$i-2]; ?>  </td><td>   <?php echo (int)$data[$row['id'].'mrp']; ?></td><td> <?php echo (((int)$data[$row['id'].'tax']*(int)$data[$row['id'].'mrp'])/100); ?> </td><td><?php echo (((int)$data[$row['id'].'tax']*(int)$data[$row['id'].'mrp'])/100); ?> </td><td><?php echo (((((int)$data[$row['id'].'tax']*(int)$data[$row['id'].'mrp'])/100)*2)+(int)$data[$row['id'].'mrp']); ?></td></tr>
                     <?php }}} ?> 
    
    
    <tr style="border-bottom: 0;"><td> </td><td> </td><td> Total </td><td> <?php array_sum($qty);?> </td><td> <?php array_sum($unit); ?> </td><td> <?php echo $mrp ?> </td><td> <?php echo $cgst ?></td><td><?php echo $sgst ?> </td><td><?php echo $total ?></tr>
	  
	  
	</table>  
	  </td>
    
    </tr>
	<tr style="border-bottom: 0;"> <td>Total: ₹ <?php echo getcor($total); ?><br/>
	<br/><b>AUTHORIZED SIGNATORY</b>
	</td><td style="text-align:right"> TOTAL BEFORE TAX<br/>
TOTAL TAX AMOUNT<br/>

TOTAL AMOUNT</td>

<td> 
<?php echo $mrp ?><br/>
<?php echo (1*$sgst+$cgst*1); ?><br/><?php echo $total ; ?>
 
</td></tr>
  </table>
</div>

</body>
</html>
