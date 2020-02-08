<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php require 'header.php';
 require 'config.php';
 $conn=DbConnection();
?>
<br/><br/><br/>
<div class="w3-container " width="50%">
    <center>  <form class="form-group w3-gray" action="getRecord.php" method="post" >
        <br/><lable>Select Start Date</lable>
        <input type="date" name="sdate"  style="width:300px" class="w3-input">
     <lable>Select End Date</lable>
        <input type="date" name="edate"  style="width:300px" class="w3-input">
     
        <br/>
        
         <lable >Select Team</lable>
      <select name="team" class="w3-input" style="width:300px" required>
        <option selected disabled>Select Team</option>
        <?php
$sql = "SELECT name FROM Team";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
    
        <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
<?php }}?>
        
    </select>
    
        
        
        <input type="submit" value="Get Data" class="w3-btn w3-blue">
       
        <br/>
      </form></center>
</div>