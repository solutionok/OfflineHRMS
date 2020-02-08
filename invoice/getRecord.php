


<?php

require 'header.php';

require 'config.php';
$conn= DbConnection();?>
<h3 >Data  From :<?php echo $_POST['sdate'];?> To : <?php echo $_POST['edate'];?></h3>
 <table id="example" class="w3-table-all w3-border w3-responsive" style="width:100%" >
				<thead>
					
			   <tr class="w3-red" >
        <th>S. No</th>
   <th>Date</th>
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
        
                           </tr></thead>
   
    <?php
$sql = "SELECT * FROM emp 
WHERE date >= '".$_POST['sdate']."' 
AND date <= '".$_POST['edate']."' and promoter IN (SELECT promoter_id from employee where team='".$_POST['team']."')";
$result = $conn->query($sql);
$i=1;
//echo $sql;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
           <tr calss="w3-gray">
     <td><?php echo $i++;
    ?></td> 
     <td><?php echo $row['date'];?></td> 
    
     <td><?php echo $row['promoter'];?></td> 
     
     <td><?php echo $row['productive_calls'];?></td> 
     <td><?php echo $row['y'];?></td> 
     <td><?php echo $row['yr'];?></td> 
    <td><?php echo $row['duplicate'];?></td> 
    
     <td class="w3-yellow"><?php echo $row['sale'];?></td> 
     
     <td><?php echo $row['workhour'];?></td> 
     <td class="w3-yellow"><?php echo $row['time'];?></td> 
      <td><?php echo $row['prim'];?></td> 
     <td><?php echo $row['secondary'];?></td> 
     <td><?php echo $row['sampling'];?></td> 
     <td><?php echo $row['totalcalls'];?></td> 

    
 </tr>
 
 
           
           <?php 
    }
}
?>
 <tfoot>
					<tr class="w3-red">
						<th style="text-align:right">Total:</th>
						<th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                  <th></th> 
                                                   <th></th>  <th></th>  <th></th>  <th></th>  <th></th>  <th></th>  <th></th>
					</tr>
				</tfoot>
	
 </table>
<input type="button" id="exd" onclick="expo" >

<script> function expo() {
    window.open('data:application/vnd.ms-excel,' + $('#example').html());
    e.preventDefault();
}</script>