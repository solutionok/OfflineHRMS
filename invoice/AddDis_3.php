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
<br/><br/><br/><br/>
<form action="submitemp.php" method="post">
   <center> <div class="w3-container w3-gray w3-round" style="
    width: 532px;
">

   <tabel>
       <tr>
        
   
        <td>
    <lable >Distributor Name</lable>
    <input style="width: 500px" type="text" name="name" placeholder="Enter name" class="w3-input"> 
        </td>
  
        <td>
    <lable >Address Line 1</lable>
    <input style="width: 500px" type="text" name="add" placeholder="Enter Address" class="w3-input"> 
        </td>
		
		<td>
    <lable >Address Line 2</lable>
    <input style="width: 500px" type="text" name="add" placeholder="Enter Address" class="w3-input"> 
        </td>
        <td>
    <lable >city</lable>
    <input  style="width: 500px" type="text" name="city" placeholder="Enter city" class="w3-input"> 
   
        </td>
        <td>
    
    </tr>
      <tr>
        <td>
    <lable >Enter Reg. State code</lable>
    <input  style="width: 500px" type="text" name="state" placeholder="Enter State Code" class="w3-input"> 
        </td>
        <td>
    <lable >Enter Pincode</lable>
    <input  style="width: 500px" type="text" name="pin" placeholder="Enter Pincode" class="w3-input"> 
   
        </td>
           <td>
    <lable >GSTIN No</lable>
    <input  style="width: 500px" type="text" name="gstin" placeholder="Enter GSTIN NO" class="w3-input"> 
   
        </td>
        <td>
        <lable >RS Pan Number</lable>
    <input  style="width: 500px" type="text" name="pan" placeholder="Enter RS Pan" class="w3-input"> 
   
        </td>
   
        <td>
    <lable >Phone Number</lable>
    <input  style="width: 500px" type="tel" name="number" placeholder="Enter  Number" class="w3-input"> 
   
        </td>
        
    
        <td>
    <lable >Vehicle name</lable>
    <input  style="width: 500px" type="text" name="vname" placeholder="Enter  Vehicle Name" class="w3-input"> 
   
        </td>
        
        <td>
    <lable >Beat name</lable>
    <input  style="width: 500px" type="text" name="bname" placeholder="Enter  Beat Name" class="w3-input"> 
   
        </td>
        <td>
    <lable >Ref  Number</lable>
    <input  style="width: 500px" type="text" name="rnumber" placeholder="Enter Ref Number" class="w3-input"> 
   
        </td>
        
    </tr>
   <tr>
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