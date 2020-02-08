


<?php
error_reporting(0);
require 'header.php';

require 'config.php';
$conn= DbConnection();?>
<h3 >Data  From :<?php echo $_POST['sdate'];?> To : <?php echo $_POST['edate'];?></h3>
<br/>
 <table id="example" class="w3-table-all w3-border w3-responsive" style="width:100%" margin-left= auto; margin-right= auto; >
				<thead>
					
			   <tr class="w3-red" >
        <th>S. No</th>
        <th>Promoter</th>
  
    <th>Y</th> 
    <th>Y-R</th> 
    <th>Duplicate</th> 
    <th>Sale Manday</th> 
    <th>Time Manday</th> 
    <th>Primary</th> 
    <th>Secondary</th> 
    <th>Sampling</th> 
    <th>Total Call</th> 
	<th>Productive Call</th> 	
    
        
                           </tr></thead>
   
    <?php
    $i=1;

    $result1 = $conn->query("SELECT promoter_id from employee where team='".$_POST['team']."'");
    if ($result1->num_rows > 0) {
    // output data of each row
	
	
    
$promoter="";
    while($ro = $result1->fetch_assoc()) {
$sql = "SELECT * FROM emp 
WHERE date >= '".$_POST['sdate']."' 
AND date <= '".$_POST['edate']."' and promoter= '".$ro['promoter_id']."'";
$result = $conn->query($sql);
//echo $sql;
$promoter=$ro['promoter_id'];
$productive_calls=0;
$y=0;
$duplicate=0;
$yr=0;
$sale=0;
$workhour=0;
$time=0.0;
$prim=0;
$secondary=0;
$sampling=0;
$totalcalls=0;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $productive_calls=$productive_calls+$row['productive_calls']*1;    
    $y=$y+$row['y']*1;    
    $yr=$yr+$row['yr']*1;    
   $duplicate=$duplicate+$row['duplicate']*1;    
   $sale=$sale+$row['sale']*1;    
   $time=$time+$row['time']*1.0;    
   $prim=$prim+$row['prim']*1.0;    
   $secondary=$secondary+$row['secondary']*1.0;    
   $sampling=$sampling+$row['sampling']*1.0;    
   $totalcalls=$totalcalls+$row['totalcalls']*1.0;    
     
    }
}else{echo $conn->error;}
   ?>
           <tr calss="w3-gray">
     <td><?php echo $i;  $i++;
    ?></td> 
    
     <td><?php echo $promoter;?></td> 
     
     <td><?php echo $y;?></td> 
     <td><?php echo $yr;?></td> 
    <td><?php echo $duplicate;?></td> 
    
     <td class="w3-yellow"><?php echo $sale;?></td> 
     
     <td class="w3-yellow"><?php echo $time;?></td> 
      <td><?php echo $prim;?></td> 
     <td><?php echo $secondary;?></td> 
     <td><?php echo $sampling;?></td> 
     <td><?php echo $totalcalls;?></td> 
<td><?php echo $productive_calls;?></td> 
     
    
 </tr>
 
 
           
    <?php }}
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
                                                   <th></th>  <th></th>  <th></th>  <th></th>  <th></th> 
					</tr>
				</tfoot>
	
 </table>

<script> function expo() {
    window.open('data:application/vnd.ms-excel,' + $('#example').html());
    e.preventDefault();
}</script>