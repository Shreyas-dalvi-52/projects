<?php
include "admin_dashboard.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<style>
 		table{
					margin-top: 100px;
			}
 				th{
                background-color:  #ee343f;
                color:white;
               }
             td{
                width: 120px;
               }
            tr{
                background-color: #FFB6C1;
                height: 30px;
            }
 	</style>
 </head>
 <body>
<div class="image" style="overflow: scroll;">
        <center><table style="border: 1px solid black;" >
            <th >NAME</th>
            <th>BLOOD GRP</th>
            <th>MOB_NO</th>
            <th>AADHAR NO.</th>
            <th>AADHAR_PIC</th>
            <th>VERIFY</th>
            <th>DELETE</th>
            <?php
                $conn= mysqli_connect("localhost", "root", "", "LS");
                $q= "select * from DONOR where STATUS='NOT VERIFIED'";
                $res= mysqli_query($conn, $q);
                while( $row= mysqli_fetch_assoc($res) ) //associative array
                {
                ?>
                    <tr>
                        <td><?php echo $row['DNAME']?></td>   <!-- for printing a element in table -->
                        <td><?php echo $row['BLOOD_GROUP']?></td>
                        <td><?php echo $row['D_MOB']?></td>
                        <td><?php echo $row['AADHAR']?></td>
                        <td><a href="see_aadhar.php?aadhar=<?php echo $row['AADHAR'];?>&email=<?php echo $row['EMAIL'];?>"style="text-decoration: none;">VIEW</a></td>
                        <td><a href="verify_donor.php?aadhar=<?php echo $row['AADHAR'];?>&email=<?php echo $row['EMAIL'];?>"style="text-decoration: none;">VERIFY</a></td> 
                         <td><a href="delete_donor.php?aadhar=<?php echo $row['AADHAR'];?>&email=<?php echo $row['EMAIL'];?>"style="text-decoration: none;">DELETE</a></td> 
                    </tr>
                
            <?php 
                } 
            ?>
        
        </table>
        </center>
    </div>
        <div class="slogan">
    <p style="color:white; font-family: Verdana; text-align: center;">
        Donate blood and be the reason for someone's existence</p>
    </div>
 </body>
 </html>