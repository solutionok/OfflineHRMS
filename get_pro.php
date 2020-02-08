



<?php

require 'header.php';

require 'config.php';
$conn= DbConnection();?><br/><br/><br/>
 <table width="100%" border="1" style="width:100%" class="w3-table-all w3-hoverable w3-striped w3-border ">
       
    <?php
$sql = "SELECT * FROM employee 
WHERE promoter_id= '".$_POST['pid']."'";
$result = $conn->query($sql);
$i=1;
if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc()) {
       // print_r($row);
        
       ?> 
     <label>Team Name:</label>  <?php echo $row['team'];?>
     <tr calss="w3-gray">
             <td class="w3-red">Promoter ID</td>
     <td><?php echo $row['promoter_id'];?></td> 
      <td class="w3-red">Promoter name</td>
     <td><?php echo $row['name'];?></td> 
      <td class="w3-red">Address</td>
     <td><?php echo $row['address'];?></td> 
	<td class="w3-red">City</td>
     <td><?php echo $row['city'];?></td> 
   
           </tr>
     
    <tr calss="w3-gray">
       <td class="w3-red">State</td>
     <td><?php echo $row['state'];?></td> 
      <td class="w3-red">Pincode</td>
     <td><?php echo $row['pincode'];?></td> 
    <td class="w3-red">Work Mobile Number</td>
     <td><?php echo $row['mob'];?></td> 
	 <td class="w3-red">Date of Joining</td>
    
   
     <td><?php echo $row['joinning'];?></td> 
   
           </tr>
     
    <tr calss="w3-gray">
             <td class="w3-red">Document type</td>
     <td><?php echo $row['dt'];?></td> 
      <td class="w3-red">Document number</td>
     <td><?php echo $row['dnumber'];?></td> 
      <td class="w3-red">Issued by</td>
     <td><?php echo $row['iby'];?></td> 
	
     <td class="w3-red">Issued On</td>
     <td><?php echo $row['idate'];?></td> 
   
           </tr>
     
    <tr calss="w3-gray">
      <td class="w3-red">Passport photo</td>
      <td><img src="<?php echo $row['pasport'];?>" width="200px"></td> 
      <td class="w3-red">Document</td>
     <td><img src="<?php echo $row['documnet'];?>" width="200px"></td> 
   
           </tr>
     
       
    <tr calss="w3-gray">
             <td class="w3-red">Contact person name</td>
     <td><?php echo $row['cname'];?></td> 
      <td class="w3-red">Contact person mobile number</td>
     <td><?php echo $row['cmob'];?></td> 
      <td class="w3-red">Relation</td>
     <td><?php echo $row['cr'];?></td> 
      <td class="w3-red">Date of CRT/Field Training</td>
     <td><?php echo $row['dcrt'];?></td> 
    
           </tr>
  
    
 
           
           <?php 
    }
}
?>