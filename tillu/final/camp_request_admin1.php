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
        <center><table style="border: 1px solid black;" >
            <th>SR NO.</th>
            <th >NAME</th>
            <th>CITY</th>
            <th>FROM_DATE</th>
            <th>TO_DATE</th>
          <th>MOB_NO</th>
          <th>REASON</th>
          <th>PERMISSION</th>
          <th>APPROVE</th>
          <th>REJECT</th>
            <?php
                $conn= mysqli_connect("localhost", "root", "", "LS");
                $q= "select * from CAMP where STATUS='UNSEEN' and MOB_NO>=6000000000";
                $res= mysqli_query($conn, $q);
                $sr=1;
                while( $row= mysqli_fetch_assoc($res) ) //associative array
                {
                ?>
                    <tr>
                        <td  style="width: 60px;text-align: center"><?php echo $sr++;?></td>
                        <td><?php echo $row['NAME']?></td>   <!-- for printing a element in table -->
                        <td><?php echo $row['CITY']?></td>
                        <td><?php echo $row['FROM_DATE']?></td> 
                         <td><?php echo $row['TO_DATE']?></td> 
                          <td><?php echo $row['MOB_NO']?></td> 
                           <td><?php echo $row['REASON']?></td> 
                           <td><a href="see_permission.php?id=<?php echo $row['ID'] ?>&email=<?php echo $row['EMAIL'] ?>" style="text-decoration: none;">VIEW</a></td> 
                        <td><a href="approve_camp_request.php?id=<?php echo $row['ID'] ?>&email=<?php echo $row['EMAIL'] ?>" style="text-decoration: none;">APPROVE</a></td> 
                        <td><a href="reject_camp_request.php?id=<?php echo $row['ID'] ?>&email=<?php echo $row['EMAIL'] ?>"style="text-decoration: none;">REJECT</a></td> 
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