
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php require 'header.php';
 require './config.php';
$conn =  DbConnection();
?>
<br/><br/><br/>
<div class="w3-container " style=""width="50%">
  <center>  <form class="form-group w3-gray" action="get_pro.php" method="post" >
        <br/><lable>Enter Proforma Number</lable>
        <input type="text" name="ino"  style="width:300px" required class="w3-input">
     
        <div class="row">
        
        <div class="col-lg-6">
        <lable>Select date </lable>
        
        <input type="date" name="idate" style="width:300px"required  class="w3-input">
        <br/>
        </div><div class="col-lg-6">
          <lable>Due date </lable>
        
        <input type="date" name="ddate" style="width:300px"required  class="w3-input">
        <br/>
          </div><div class="col-lg-6">
      
        <lable>Select Distributor </lable>
        <br/>
        <select name="dis" class="w3-select" style="width:300px" required> 
            <option disabled selected>Select Distributor</option>
      <?php 
      $sql = "SELECT * FROM distributor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      ?>
        
            <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
        
        <?php
    }
} else {
    echo "0 results";
}

        
        ?>
        </select>
          </div><div class="col-lg-6">
      
        <br/>
      <lable>Select Retailer </lable>
        <br/>
        <select name="ret" class="w3-select" style="width:300px" required> 
            <option disabled selected>Select Retailer</option>
      
          <?php 
      $sql = "SELECT * FROM retailer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      ?>
        
            <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
        
        <?php
    }
} else {
    echo "0 results";
}

        
        ?>
    
        
        </select>
        
        
        </div>.
       </div> <center> <h3>Please Check product</h3></center>
        <br/>
        <br/>
        <table class="w3-table-all" style="width:50%">
        
            <tr>
                
                <td>Name</td>
                
                <td>QTY</td>
                
                <td>Unit</td>
           
            </tr>
           <?php 
      $sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      ?>
            <tr>
        
            <td><input type="checkbox" value="<?php echo $row['id']; ?>" name="product[]"> <?php echo $row['name']; ?></td>
           <td style="display:none"><input type="hidden" value="<?php echo $row['mrp']; ?> " name="<?php echo $row['id']."mrp"; ?>"></td>
            <td style="display:none"><input type="hidden" value="<?php echo $row['discount']; ?> " name="<?php echo $row['id']."tax"; ?>"></td>
                
           <td><input type="number" value="1"  name="qty[]"></td>
            <td><input type="number" value="1"  name="unit[]"></td>
           
        </tr>
          <?php
    }
} else {
    echo "0 results";
}

        
        ?>
    
      
      
        </table>
        
        <input type="submit" value="Get Data" class="w3-btn w3-blue">
       
        <br/>
      </form></center>
</div>