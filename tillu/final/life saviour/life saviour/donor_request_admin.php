<!DOCTYPE html>
<html>
<head>
	<title>LIFE SAVIOUR</title>
	<style>
		div.image{
      width:85%;
      overflow: auto;
      height:570px;
      
      float: right;
    
			}
				table{
					margin-top: 100px;
			}
 						th{
                background-color:  #ee343f;
                color:white;
                width:30px;
            }
            td{
            	width:30px;
            }
            tr{
                background-color: #FFB6C1;
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
        		
			</div>
		

<div class="wrapper">
    <div class="sidebar">
        
        <ul>
        	<li><a style="text-decoration:none;" href="admin_dash_f.php">Home</a></li>
            <li><a style="text-decoration:none;" href="/admin-donor">Blood Requests</a></li>
            <li><a style="text-decoration:none;" href="donor_request_admin.php">Donation Requests</a></li>
            <li><a style="text-decoration:none;" href="/admin-request">Staff Management</a></li>
            <li><a style="text-decoration:none;" href="/admin-request-history">Camp Requests</a></li>
            <li><a style="text-decoration:none;" href="/admin-request-history">Stock</a></li>
            <li><a style="text-decoration:none;" href="/admin-request-history">Report</a></li>
        </ul> 
	</div>
</div>
	<div class="image">
		<center><table style="border: 1px solid black; font-size: 20px;" border="2px" width="70%" >
            <th >NAME</th>
            <th>DOB</th>
            <th>BG</th>
            <th>GENDER</th>
            <th>DISTRICT</th>
            <th>ADDRESS</th>
            <th>MOB_NO</th>
            <th>EMAIL</th>
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
                        <td><?php echo $row['ADDRESS']?></td>
                        <td><?php echo $row['MOB_NO']?></td>
                        <td><?php echo $row['EMAIL']?></td>
                        <td><?php echo $row['DATE']?></td> 
                         <td><?php echo $row['HISTORY']?></td> 
                        <td><a href="approve_donation_request.php?id=<?php echo $row['ID'] ?>"style="text-decoration: none;">APPROVE</a></td> 
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