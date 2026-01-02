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
 		<center>
           <table border 1px >
 
<TH>A+</TH>
<TH>A-</TH>
<TH>B+</TH>
<TH>B-</TH>
<TH>AB+</TH>
<TH>AB-</TH>
<TH>O+</TH>
<TH>O-</TH>


 
 <?php
    $conn= mysqli_connect("localhost", "root", "", "LS");
  $q="select * from STOCK";
  $res=mysqli_query($conn,$q);//res is array
  
  
while($row=mysqli_fetch_assoc($res))
 {
     
?>
<tr>

<td><?php echo $row["A+"];?></td>
<td><?php echo $row["A-"];?></td>
<td><?php echo $row["B+"];?></td>
<td><?php echo $row["B-"];?></td>
<td><?php echo $row["AB+"];?></td>
<td><?php echo $row["AB-"];?></td>
<td><?php echo $row["O+"];?></td>
<td><?php echo $row["O-"];?></td>
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