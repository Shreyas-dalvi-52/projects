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
            <th>DOB</th>
            <th>BLOOD GRP</th>
            <th>GENDER</th>
            <th>DISTRICT</th>
            <th>MOB_NO</th>
            <th>DATE</th>
            <th>HISTORY</th>
            <th>APPROVE</th>
            <?php
                $conn= mysqli_connect("localhost", "root", "", "LS");
                $q= "select * from DONATE_BLOOD where DONATION_STATUS='UNSEEN'";
                $res= mysqli_query($conn, $q);
                while( $row= mysqli_fetch_assoc($res) ) //associative array
                {
                         
                
                ?>
                    <tr>
                        <td><?php echo $row['NAME']?></td>   <!-- for printing a element in table -->
                        <td><?php echo $row['DOB']?></td>
                        <td><?php echo $row['BLOOD_GROUP']?></td> 
                        <td><?php echo $row['GENDER']?></td> 
                        <td><?php echo $row['DISTRICT']?></td>
                        <td><?php echo $row['MOB_NO']?></td>
                        <td><?php echo $row['DATE']?></td> 
                         <td><?php echo $row['HISTORY']?></td> 
                        <td><a href="donation_approve.php?id=<?php echo $row['ID'] ?>&tomail=<?php echo $row['EMAIL'] ?>"style="text-decoration: none;">APPROVE</a></td> 
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