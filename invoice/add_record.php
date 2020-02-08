<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$date=$_POST['date'];
require 'header.php';
require 'config.php';
$conn= DbConnection();

?>
<div calss="">
    <form action="submit_req.php" method="post">
         <h4 class="w3-red"></h4>
         <input type ="text" readonly value="<?php echo $date?>" name="date" class="w3-red w3-input">
<table width="100%" border="1" style="width:100%" class="w3-table-all w3-hoverable w3-striped w3-border w3-responsive">
    <tr class="w3-red" >
        <th>S. No</th>
  <th>Promoter</th> 
  
    <th>Productive Call</th> 
    <th>Y</th> 
    <th>Y-R</th> 
    <th>Duplicate</th> 
    <th>Sale Manday</th> 
    <th>Work Hour</th> 
    <th>Time Manday</th> 
    <th>Primary</th> 
    <th>Secondary</th> 
    <th>Sampling</th> 
    <th>Total Call</th> 
        
 </tr>
  <?php  $i=1; foreach($_POST['promoter_id'] as $per) {
    ?>   
    
 <tr calss="w3-gray">
     <td><?php echo $i++;?></td> 
     
     <td><input type="text" readonly required name="pro[]" value="<?php echo $per ?>"style="width:150px" class="w3-input"></td> 
     
     <td><input type="number" min="0" name="procall[]"  class="w3-input"></td> 
     <td><input type="number" min="0" name="y[]" class="w3-input"></td> 
     <td><input type="number" min="0"name="yr[]" class="w3-input"></td> 
    <td><input type="number" min="0"name="duplicate[]" class="w3-input"></td> 
    
     <td class="w3-yellow"><input type="number" min="0" name="sale[]" class="w3-input"></td> 
     
     <td><input type="number" min="0" name="workh[]" class="w3-input"></td> 
     <td class="w3-yellow"><input type="number" min="0" name="time[]" class="w3-input"></td> 
     <td><input type="number" min="0" required name="primary[]" class="w3-input"></td> 
     <td><input type="number" min="0" name="seco[]" class="w3-input"></td> 
     <td><input type="number" min="0"name="samp[]" class="w3-input"></td> 
     <td><input type="number" min="0"name="tc[]" class="w3-input"></td> 
   
    
 </tr>
 
 
<?php } ?>
</table><br/><br/><center><input type="submit" class="w3-btn w3-blue w3-round" value="Add Record" ></center></form>
</div>