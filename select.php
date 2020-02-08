
<?php require 'header.php';
require 'config.php';
$conn= DbConnection();

?>
<br/>
<div class="w3-container " width="100%">
<?php $farma= date("d-m-Y", strtotime($_POST["date"]));

$image = file_get_contents('E:/VijayaAdvertising/HUL_MD_Report/'. $_POST['team'].'/'. $farma.'.jpeg'); 
$image_codes = base64_encode($image);

?>
<center><image src="data:image/jpg;charset=utf-8;base64,<?php echo $image_codes; ?>" alt="data"  width="90%" height="100%"/></center>

</div>
<br/><br/>
<div class="w3-container "  width="100%" style="overflow: scroll;">
    <center>  <form class="form-group w3-red" action="add_record.php" method="post" >
           <br/>
		  
			<input type="hidden" value="<?php echo $_POST["date"] ?> " name="date">
			
			<input type="hidden" value="<?php echo  'D:/VijayaAdvertising/HUL_MD_Report/'. $_POST['team'].'/'. $farma.'.jpeg' ?> " name="data_image">
        
          <?php
$sql = "SELECT promoter_id FROM employee where team='".$_POST['team']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
    
  <font size="+2">  <?php echo $row['promoter_id']?>    <input type="checkbox" name="promoter_id[]"  value="<?php echo $row['promoter_id']?>"" width="25px" style="overflow: scroll;"  ></font><br/>
        
<?php }}?>
      
        
        
    <br/>
        <input type="submit" value="Get Form" class="w3-btn w3-blue">
       
        <br/>
      </form></center>
</div>