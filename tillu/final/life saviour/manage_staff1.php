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
<div class="image">
    <center><table style="border: 1px solid black;">
            <th >ID</th>
            <th>NAME</th>
            <th>MOB_NO</th>
            <th>   DOB   </th>
            <th>JOIN_DATE</th>
            <th>DESIGNATION</th>
            <th>SHIFT</th>
            <th>SALARY</th>
            <th>EDIT</th>
            <th>DELETE</th>
            <?php
                $conn= mysqli_connect("localhost", "root", "", "LS");
                $q= "select * from addstaff;";
                $res= mysqli_query($conn, $q);
                while( $row= mysqli_fetch_assoc($res) ) //associative array
                {
                         
                
                ?>
                    <tr>
                        <td><?php echo $row['ID']?></td>   <!-- for printing a element in table -->
                        <td><?php echo $row['NAME']?></td>
                        <td><?php echo $row['MOB_NO']?></td> 
                        <td><?php echo $row['DOB']?></td>
                        <td><?php echo $row['JOINDATE']?></td>
                        <td><?php echo $row['DESIGNATION']?></td>
                        <td><?php echo $row['SHIFT']?></td>
                        <td><?php echo $row['SALARY']?></td> 
                        <td><a href="editstaff.php?id=<?php echo $row['ID'] ?>" style="text-decoration: none;">EDIT</a></td> 
                        <td><a href="deletestaff.php?id=<?php echo $row['ID'] ?>" style="text-decoration: none;">DELETE</a></td>
                    </tr>
                
            <?php 
                } 
            ?>
        </center>
        </table>
</div>
        <div class="slogan">
    <p style="color:white; font-family: Verdana; text-align: center;">
        Donate blood and be the reason for someone's existence</p>
    </div>
 </body>
 </html>