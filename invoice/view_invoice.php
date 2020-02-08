

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php require 'header.php';
?>
<br/><br/><br/>
<div class="w3-container  w3-card" style=""width="50%">
  
   <div class="row "> 
    
    
    <div class="col-lg-4 w3-light-gray">
        <h3>Generate Proforma invoice</h3>
        
    <center>  <form class="form-group " action="get_pro.php" method="get" >
       
  
            <lable>Enter Proforma Number</lable>
        
            <input type="text" class="w3-input" name="id" placeholder="Enter Proforma Invoice Number">
            <input type="submit" value="Submit" class="w3-submit">
        
        </form></center>
    </div>
       
       <div class="col-lg-4 w3-light-gray">
              <h3>Generate  invoice</h3>
     
    <center>  <form class="form-group " action="get_pro_1.php" method="get" >
       
  
            <lable>Enter Invoice  Number</lable>
        
            <input type="text" class="w3-input" name="id" placeholder="Enter  Invoice Number">
            <input type="submit" value="Submit" class="w3-submit">
        
        </form></center>
    </div>
        <div class="col-lg-4 w3-light-gray">
               <h3>Convert Proforma to invoice</h3>
     
    <center>  <form class="form-group " action="cnoino.php" method="post" >
       
  
            <lable>Enter Invoice  Number</lable>
        
            <input type="text" class="w3-input" name="ino" placeholder="Enter  Invoice Number">
            <lable>Enter Proforma   Number</lable>
        
            <input type="text" class="w3-input" name="pno" placeholder="Enter Proforma  Invoice Number">
        <lable>P.O. NUMBER </lable>
        
        <input type="number" name="pnu" style="width:300px"required  class="w3-input">
      
       <lable>P.O. Date </lable>
        
        <input type="date" name="pdate" style="width:300px"required  class="w3-input">
       
        <input type="submit" value="Submit" class="w3-submit">
        
        </form></center>
    </div>
   </div>
   
   </div></body></html>