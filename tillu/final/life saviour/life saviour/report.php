<?php
include "admin_dashboard.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Report</title>
	<style>
        .rep_title input{
            border:none;
            background: transparent;
        }
        input[type="button"]
        {
            margin-top: 25px;
            background: #343a40;
            color: #bdb8d7;
            width: 90px;
            height: 40px;
        }
        input[type="button"]:hover
        {
            
            background-color: #594f8d;
            color: #fff;
        }
        input[type="submit"]
        {
             background: #343a40;
            color: #bdb8d7;
        }
         input[type="submit"]:hover
        {
            
            background-color: #594f8d;
            color: #fff;
        }
 		table{
				margin-top: 50px;
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
            @media print{
                body{
                    visibility: hidden;
                }
                .tables{
                    visibility: visible;
                    position: absolute;
                }
                .rep_title{
                    visibility: visible;
                    margin-top: 0px;
                    margin-left: 75px;
                }
                .rep_title input{
                    visibility: visible;
                    margin-top: 0px;
                    font-size: 17px;
                    width: 100px;
                    font-style: bold;
                }
            }
 	</style>
   
</head>
<body >
    
    <div class="rep_title"style="height: 0px;">
        <p>Report of <input type="text" name="t1" id="t1" value="<?php echo $type ?>">From <input type="text" name="t2" id="t2" >To <input type="text" name="t3" id="t3" ><p>
    </div>
	<div class="image" style="overflow: scroll;">
		<form method="POST">
		<div style="margin-top: 75px;">
		 <label>From Date</label>
         <input type="date" id="fromdate" name="fromdate" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label>To Date</label>&nbsp;&nbsp;&nbsp;
         <input type="date" id="todate" name="todate" required ><br><br>
         <label for="s1">Select type</label>
         <select name="s1" id="s1" >
         	<option value="" disabled selected>--SELECT--</option>
         	<option value="donations">Donations</option>
         	<option value="camps">Camps</option>
         	<option value="requisition">Requisition</option>
            <option value="staff">Staff added</option>
         </select>
         <input type="submit" name="submit" value="SUBMIT">
         
     </div>
 </form>

 <?php
if(isset($_POST['submit']))
{
	$type=$_POST['s1'];
	$from_date=$_POST['fromdate'];
	$to_date=$_POST['todate'];
    $new_from=date("Y-m-d",strtotime($from_date));
    $new_to=date("Y-m-d",strtotime($to_date));
    echo"<script>document.getElementById('fromdate').value = '$new_from';
    document.getElementById('todate').value = '$new_to';
    selectElement('s1','$type'))</script>";

	if($from_date<$to_date)
	{
		if($type=="camps")
		{
			?>
			
			<center><table class="tables"style="border: 1px solid black;">
            <th>SR NO.</th>
            <th >NAME</th>
            <th>CITY</th>
            <th>FROM_DATE</th>
            <th>TO_DATE</th>
          <th>MOB_NO</th>
          <th>REASON</th>
          <th>STATUS</th>
            <?php
                $conn= mysqli_connect("localhost", "root", "", "LS");
                $q= "select * from CAMP where `FROM_DATE`  between '$from_date' and '$to_date'";
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
                         <td><?php echo $row['STATUS']?></td> 
                          
                    </tr>
                
            <?php 
                } 
            ?>
        
        </table>
        <input type="button" value="PRINT" onclick="p()">
        </center>
        <?php
		}
		elseif($type=="donations")
		{
		?>
			<center>
            <table class="tables"style="border: 1px solid black;" >
            <th >NAME</th>
            <th>DOB</th>
            <th>BLOOD GRP</th>
            <th>GENDER</th>
            <th>DISTRICT</th>
            <th>MOB_NO</th>
            <th>DATE</th>
            <th>STATUS</th>
            <?php
            $conn= mysqli_connect("localhost", "root", "", "LS");
            if(isset($_POST['bg']))
            {
                $bg=$_POST['bg'];
                 $q= "select * from DONATE_BLOOD where `BLOOD_GROUP`='$bg' and `DATE`  between '$from_date' and '$to_date'";
                $res= mysqli_query($conn, $q);
            }
            else
            {
                  $q= "select * from DONATE_BLOOD where `DATE`  between '$from_date' and '$to_date'";
                $res= mysqli_query($conn, $q);
            }
                
              
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
                        <td><?php echo $row['DONATION_STATUS']?></td> 
                        
                    </tr>
                
            <?php 
                } 
            ?>
        
        </table>
        <input type="button" value="PRINT" onclick="p()">
        </center>

		<?php 
	    }
	    elseif ($type=="requisition")
	     {
	     ?>
	    	<center>
           <table border 1px class="tables">
 
<TH>PATIENT NAME</TH>
<TH>HOSPITAL NAME</TH>
<TH>BLOOD GROUP</TH>
<TH>BLOOD QUANTITY</TH>
<TH>DATE</TH>
<TH>REASON</TH>
<th>STATUS</th>



 
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
<td><?php echo $row["status"];?></td>

</tr>

<?php
}
?>
 
 
</table>
<input type="button" value="PRINT" onclick="p()">
    </center>
        


	    <?php
	    }
        elseif ($type=="staff") {
            ?>
                <center><table class="tables"style="border: 1px solid black;">
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
        

        </table>
        <input type="button" value="PRINT" onclick="p()">
    </center>

            <?php
        }
	}
	else
	{
		echo"<script>alert('Enter valid dates')</script>";
	}
}


?>
	</div>
    
	 <div class="slogan">
    <p style="color:white; font-family: Verdana; text-align: center;">
        Donate blood and be the reason for someone's existence</p>
    </div>
    <script>
        function p()
        {
            var a = "<?php echo $type; ?>"
            var b= "<?php echo $from_date?>"
            var c= "<?php echo $to_date?>"
            document.getElementById('t1').value=a;
             document.getElementById('t2').value=b;
              document.getElementById('t3').value=c;
            window.print();
        }

    
    </script>
</body>
</html>

