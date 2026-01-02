      <html> 
      <head>
        <style>
            th{
                background-color: firebrick;
                color:white;
                font-size: 20px;
                width:30px;
            }
            tr{
                background-color: #FFB6C1;
            }
        </style>
      </head>        

       <form method="POST">
        <center><h1><u>
            <img src="lifesaviourLogo.png" height="200" width="200" style="padding:"><br>ALL STAFF INFORMATION IN BLOOD BANK</u></h1></center><br><br>
            <center><table style="border: 1px solid black; font-size: 20px;" border="2px" width="70%" >
            <th >Emp_id</th>
            <th>Fullname</th>
            <th>Mobile_no</th>
            <th>Email</th>
            <th>   DOB   </th>
            <th>Join_date</th>
            <th>Designation</th>
            <th>Shift</th>
            <th>Salary</th>
            <th>Delete</th>
            <th>Edit</th>
            <?php
                $conn= mysqli_connect("localhost", "root", "", "life_saviour");
                $q= "select * from addstaff;";
                $res= mysqli_query($conn, $q);
                while( $row= mysqli_fetch_assoc($res) ) //associative array
                {
                         
                
                ?>
                    <tr>
                        <td><?php echo $row['empid']?></td>   <!-- for printing a element in table -->
                        <td><?php echo $row['fname']?></td>
                        <td><?php echo $row['mobileno']?></td> 
                        <td><?php echo $row['email']?></td> 
                        <td><?php echo $row['dob']?></td>
                        <td><?php echo $row['joindate']?></td>
                        <td><?php echo $row['designation']?></td>
                        <td><?php echo $row['shift']?></td>
                        <td><?php echo $row['salary']?></td> 
                        <td><a href="deleteaddStaff.php?id=<?php echo $row['empid'] ?>">delete</a></td> 
                        <td><a href="editaddStaff.php?id=<?php echo $row['empid'] ?>">edit</a></td>
                    </tr>
                
            <?php 
                } 
            ?>
        </center>
        </table>
    </form>
        </html>