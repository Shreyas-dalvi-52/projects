<!DOCTYPE html>
<html>
<head>
	<title>LIFE SAVIOUR</title>
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />

	<style>
		div.image{
      width:85%;
      overflow: auto;
      height:570px;
     margin-left: 15%;
      float: right;
    
			}
			.fa-sharp{
  display: none;
}
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
div.title{
      background-color: #ee343f;
      width:100%;
      height:50px;
      text-align: left;
      position: fixed;
    }
    .slogan{
      background-color: grey;
      position: relative;
      width: 85%;
      height:86px;
      float: right;
    }
    div.slogan p{
      margin-top: 35px;
    }
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  width: 15%;
  height:885px;
   float:left;
   position: fixed;
   margin-top: 50px;
}

.wrapper .sidebar{
  width: 100%;
  height: 100%;
  background:   #343a40;
  padding: 30px 0px;
  float: left;
}


.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}


.wrapper .sidebar ul li:hover{
  background-color: #594f8d;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}


	</style>
</head>
<body>
	<form method="post">
		<div class="title">
        	<span style="margin-top: 10px;"><font size="6" style="color:white">LIFE SAVIOUR</font></span>
        		<p align="right" style="float:right; margin-top:15px"><a style="color:white;" href="admin_logout.php">&nbsp;<font size="4">Logout</font>&nbsp;&nbsp;&nbsp;&nbsp;</a>	
        		
			</div>
		

<div class="wrapper">
    <div class="sidebar">
        
        <ul>
        	<li><a style="text-decoration:none;" href="admin_dash_f.php">Home</a></li>
            <li><a style="text-decoration:none;" href="hospital_request_admin.php">Blood Requests    (Hospital)<i class="fa-sharp fa-solid fa-bell" style="float:right;color: #ee343f;" id="blood_request_hos_noti"></i></a></li>
             <li><a style="text-decoration:none;" href="disaster_request_admin.php">Blood Requests    (Disaster)<i class="fa-sharp fa-solid fa-bell" style="float:right;color: #ee343f;" id="blood_request_dis_noti"></i></a></li>

            <li><a style="text-decoration:none;" href="donation_request_admin.php">Donation Requests<i class="fa-sharp fa-solid fa-bell" style="float:right;color: #ee343f;"id="donation_request_noti"></i></a></li>

            <li><a style="text-decoration:none;" href="donor_health_table.php">Health checkup</a></li>

            <li><a style="text-decoration:none;" href="addStaff.php">Add staff</a></li>
            <li><a style="text-decoration:none;" href="manage_staff.php">Manage staff </a></li>
           

             <li><a style="text-decoration:none;" href="/admin-request-history">Stock<i class="fa-sharp fa-solid fa-bell" style="float:right;color: #ee343f;"id="stock_noti"></i></a></li> 

            <li><a style="text-decoration:none;" href="/admin-request-history">Report</a></li>
        </ul> 
	</div>
</div>
	<div class="image">
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
                $q= "select * from DONATE_BLOOD where STATUS='UNSEEN'";
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
	<br><br><br><br>
		<div class="slogan">
    <p style="color:white; font-family: Verdana; text-align: center;">
		Donate blood and be the reason for someone's existence</p>
	</div>
	</form>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","LS");

 $query= "select *from DONATE_BLOOD where STATUS='UNSEEN'";
  $q=mysqli_query($conn,$query);
  $cnt=mysqli_num_rows($q);
  if($cnt>0)
  {
    echo"<script>document.getElementById('donation_request_noti').style.display='block'</script>";
  }

   $query= "select *from hospitalemergency where status='UNSEEN'";
  $q=mysqli_query($conn,$query);
  $cnt=mysqli_num_rows($q);
  if($cnt>0)
  {
    echo"<script>document.getElementById('blood_request_hos_noti').style.display='block'</script>";
  }


    $query= "select *from disasteremergency where status='UNSEEN'";
  $q=mysqli_query($conn,$query);
  $cnt=mysqli_num_rows($q);
  if($cnt>0)
  {
    echo"<script>document.getElementById('blood_request_dis_noti').style.display='block'</script>";
  }
?>