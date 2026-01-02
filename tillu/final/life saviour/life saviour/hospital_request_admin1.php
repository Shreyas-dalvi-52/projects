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
 
<TH>PATIENT NAME</TH>
<TH>HOSPITAL NAME</TH>
<TH>BLOOD GROUP</TH>
<TH>BLOOD QUANTITY</TH>
<TH>DATE</TH>
<TH>REASON</TH>
<th>REQ. FROM</th>
<TH>APPROVE</TH>
<TH>REJECT</TH>


 
 <?php
    $conn= mysqli_connect("localhost", "root", "", "LS");
  $q="select * from hospitalemergency WHERE status='UNSEEN'";
  $res=mysqli_query($conn,$q);//res is array
  
  
while($row=mysqli_fetch_assoc($res))
 {
     
?>
<tr>

<td><?php echo $row["Patientname"];?></td>
<td><?php echo $row["Hospitalname"];?></td>

<td><?php echo $row["Bloodgroup"];?></td>
<td><?php echo $row["BloodQuantity"];?></td>
<td><?php echo $row["Date"];?></td>
<td><?php echo $row["Reason"];?></td>
<td><a href="see_requi.php?id=<?php echo $row['ID'];?>&email=<?php echo $row['Email']?> "style="text-decoration: none;">VIEW</a></td>
<td><a href="approve_hospital_request.php?id=<?php echo $row['ID'] ?>
    &email=<?php echo $row['Email']?> "style="text-decoration: 
none;">APPROVE</a></td>  
<td><a href="reject_hospital_request.php?id=<?php echo $row['ID'] ?>&email=<?php echo $row['Email'] ?>"style="text-decoration: none;">REJECT</a></td> 

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