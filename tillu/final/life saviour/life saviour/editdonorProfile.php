
<html>
<head>
<title>Edit Donor Profile Page</title>
</head>

<style>

    body{font: 76% arial,sans-serif; padding: 20px;}
    .h1
    {
       background:url("lifesaviourLogo.png") no-repeat left top;
       background-size: 27%;
       margin-right: 20px;
       background-color: bisque; 
       color: firebrick;
       border-radius: 12px;
       height:190px;
       width: 800px;
       border-bottom-style: solid;
       text-align: center;
    }
 </style>
<body>
  <center>

 <div class="h1">
  <br>
  <br>
  <h1>Wel-Come</h1>
  <h2>To</h2>
  <h1>LifeSaviour</h1>
 </div>
<br><br>
<form method="POST">
    <blockquote style="font-size: 20px; color:darkred;">YOUR BLOOD DONATION COUNT :</blockquote>
    <input type="text" name="count" id="count" style="height:90px; width: 90px; border:2px; border-style: solid; font-size: 70px; text-align: center; background-color: floralwhite;" value="0"readonly />
     <br><br></center>
     <br>
     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

     <label for="donorid" style="font-size:18px;color:darkred;"> DONOR ID :</label>
     &nbsp; &nbsp; &nbsp; 
     <input type="text" name="donorid" id="donorid" style="height:px; width: 90px; text-align:center; font-size: 18px;" readonly/>

     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

     <label for="name" style="font-size:18px;color:darkred;">DONOR NAME :</label>  &nbsp; &nbsp; &nbsp; 
     <input type="text" name="name" id="name" style="width:200px; font-size: 18px;"/>
     <br><br><br>

     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

     <label for="DOB" style="font-size:18px;color:darkred;"> DONOR DOB :</label> 
     <input type="date" name="DOB" id="DOB" style="text-align:center; font-size: 18px;"/>

     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; 

     <label for="Email" style="font-size:18px;color:darkred;">DONOR EMAIL-ID :</label>
     <input type="email" name="Email" id="Email" style="width:200px; font-size: 18px;"/> 

     <br><br><br><br>
     <center>
     <input type="submit" name="submit" id="submit" value="VIEW PROFILE" style="background-color:firebrick; color: white;font-size:18px;" />
    </center>
    </div>
</form>
</body>
<?php
if (isset($_POST['submit'])) 
      {
          echo "<script> window.location.href='donorProfile.php'</script>";
       }
?>
</html>