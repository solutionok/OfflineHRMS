<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'header.php';
require 'config.php';
$conn= DbConnection();
?>
<br/>
<form action="submitemp.php" method="post">
   <center> <div class="w3-container w3-gray w3-round" style="
    width: 532px;
">
   
   <tabel>
       <tr>
        
    <td>
    <lable >Select Team</lable>
    <select required  name="team" class="w3-input" >
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
   </td>
  
   
        <td>
    <lable >Employee ID</lable>
    <input required style="width: 500px" type="text" name="id" placeholder="Enter ID" class="w3-input"> 
        </td>
     
        <td>
    <lable >Enter Name(As per KYC Document)</lable>
    <input style="width: 500px" type="text" name="name" placeholder="Enter Name" class="w3-input"> 
        </td>
		<td>
    <lable >Enter Date of CRT/Field Training</lable>
    <input  style="width: 500px" type="date" name="dcrt" placeholder="Enter Date of CRT/Field Training" class="w3-input"> 
   
        </td>
<td>
    <lable >Enter Date of Joining</lable>
    <input  style="width: 500px" type="date" name="joinning" placeholder="Enter Date of Joining" class="w3-input"> 
   
        </td>
        <td>
    <lable >DOB(As per KYC Document)</lable>
    <input  style="width: 500px" type="date" name="dob" placeholder="Enter DOB" class="w3-input"> 
   
        </td>
        <td>
    <lable >Full Address(As per KYC Document)</lable>
    <input type=text  style="width: 500px"name="add" placeholder="Enter Address" class="w3-input">
        </td>
        <td>
    <lable >City</lable>
    <input  style="width: 500px" type="text" name="city" placeholder="Enter  City" class="w3-input"> 
   
        </td>
       <td>
    <lable >Work Phone Number</lable>
    <input type=number style="width: 500px" type="text" name="mob" placeholder="Enter Mobile number" class="w3-input"> 
        </td>
    
    
    </tr>
      <tr>
        <td>
    <lable >Enter State</lable>
    <input  style="width: 500px" type="text" name="state" placeholder="Enter State" class="w3-input"> 
        </td>
        <td>
    <lable >Enter Pincode</lable>
    <input  style="width: 500px" type="text" name="pin" placeholder="Enter Pincode" class="w3-input"> 
   
        </td>



	
	<td>
        <td>
    <lable >KYC Document Type</lable>
    <select  style="width: 500px" name='typ' class="w3-input">
        <option selected disabled value="not Selected">Select Document  Type</option>
        <option value="Ration Card">Ration Card</option>
        <option value="Voter Id Card">Voter Id Card</option>
        <option value="Aadhar card">Aadhar card </option>
        <option value="Other">Other</option>
        
    </select>
        </td>
        <td>
    <lable >Document Number</lable>
    <input  style="width: 500px" type="text" name="dnumber" placeholder="Enter Document Number" class="w3-input"> 
   
        </td>
        
    
    </tr>
   <tr>
   <td>
    <lable >Issued Date</lable>
    <input style="width: 500px" type="date" name="issued" placeholder="Enter Name" class="w3-input"> 
        </td>
        <td>
    <lable >Issued by</lable>
    <input  style="width: 500px" type="text" name="ib" placeholder="Enter Issued By" class="w3-input"> 
   
        </td>
        <td>
    <lable >Upload Document[pasport size image]</lable>
   
   <img src="img/default.jpg" class="w3-img"id="pdp" alt=" photo" style="height:100px ;width: 100px">
                                        <input onchange="pimageUpload()" type="file" name="prp" accept="image/x-png,image/jpeg" id="prp">
                                        <input type="hidden" value="1"name="primage" id="primage">
                                        <div style="color:red"id="pri">
                                        </div>
   
   </td>
        <td>
     <lable >Upload Document[KYC Document]</lable>
  
       
    <img src="img/default.jpg" class="w3-img"id="dp" alt=" photo" style="height:100px ;width: 100px">
                                        <input onchange="imageUpload()" type="file" name="rp" accept="image/x-png,image/jpeg" id="rp">
                                        <input type="hidden" value="1"name="rimage" id="rimage">
                                        <div style="color:red"id="ri">
                                        </div>
   
   
   </td>
        
    
    </tr>
         
        
        
        
    </tr>
    <h4 class="w3-red">Emergency Contact number </h4><br/>
      <input style="width: 500px" type="text" name="cname" placeholder="Enter Name" class="w3-input"> 
    <input style="width: 500px" type="tel" name="cmob" placeholder="Enter contact number" class="w3-input"> 
    <input style="width: 500px" type="text" name="cr" placeholder="Enter Relation" class="w3-input"> 
  <br/><br/>
        <input type='submit' class='w3-btn w3-blue w3-round' value='Add Record'>
        
        
        </tabel></div>
        
</form>
 <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
   
<script>
         function imageUpload()
                                            {
                                                $('#ri').html('loading..');

                                                var data = new FormData();
                                                jQuery.each(jQuery('#rp')[0].files, function (i, file) {

                                                    data.append('file', file)
                                                });
                                                $.ajax(
                                                        {
                                                            url: 'file.php',
                                                            data: data,
                                                            cache: false,
                                                            contentType: false,
                                                            processData: false,
                                                            method: 'POST',
                                                            type: 'POST',
                                                              beforeSend: function () {
                                                                $("#loader").show();
                                                            },
                                                            complete: function () {
                                                                $("#loader").hide();
                                                            },
                                                          
                                                            success: function (data) {
                                                                // var img='<img src="../'+data+'" width="50px" height="50px" alt="'+data+'"';
                                                                // $('#ri').html(img);
                                                                $('#ri').html('Image Uploaded Succesfully.');
                                                                $('#rimage').val(data);
                                                                $("#dp").attr("src",data);
                                                           
                                                            }
                                                        }
                                                );



                                            }
                                              function pimageUpload()
                                            {
                                                $('#pri').html('loading..');

                                                var data = new FormData();
                                                jQuery.each(jQuery('#prp')[0].files, function (i, file) {

                                                    data.append('file', file)
                                                });
                                                $.ajax(
                                                        {
                                                            url: 'file.php',
                                                            data: data,
                                                            cache: false,
                                                            contentType: false,
                                                            processData: false,
                                                            method: 'POST',
                                                            type: 'POST',
                                                              beforeSend: function () {
                                                                $("#loader").show();
                                                            },
                                                            complete: function () {
                                                                $("#loader").hide();
                                                            },
                                                          
                                                            success: function (data) {
                                                                // var img='<img src="../'+data+'" width="50px" height="50px" alt="'+data+'"';
                                                                // $('#ri').html(img);
                                                                $('#pri').html('Image Uploaded Succesfully.');
                                                                $('#primage').val(data);
                                                                $("#pdp").attr("src",data);
                                                           
                                                            }
                                                        }
                                                );



                                            }
                                          
    
                                          
    
    </script>