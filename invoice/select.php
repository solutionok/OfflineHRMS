<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php require 'header.php';
require 'config.php';
$conn= DbConnection();?>
<br/><br/><br/>
<div class="w3-container " width="50%">
    <center>  <form class="form-group w3-red" action="add_record.php" method="post" >
            <br/><lable>Select Promoter</lable><br/>
        <input type="hidden" value="<?php echo $_POST["date"] ?> " name="date">
        
          <?php
$sql = "SELECT promoter_id FROM employee where team='".$_POST['team']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
    
    <?php echo $row['promoter_id']?>    <input type="checkbox" name="promoter_id[]"  checked  value="<?php echo $row['promoter_id']?>"style="width:300px" class="" ><br/>
        
<?php }}?>
      
        
        
    <br/>
        <input type="submit" value="Get Form" class="w3-btn w3-blue">
       
        <br/>
      </form></center>
</div>