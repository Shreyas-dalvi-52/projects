<?php
    $id=$_GET['id'];
    require('connection.php');
    ?>
<html>
<head>
  <title>Camp Organization</title>
  </head>
  <style>
body
{
  margin-top: 30px;
  background-size:100% 120%;
  background-repeat: no-repeat;
  font-size: 15px;
  color: white;
}
.header{
  color:white;
  width: fit-content;
  margin-left: 20%;
}
label{ margin-left: 10px; }
.container{
  position:absolute;
  top: 50%;
  left: 50%;
  padding-top: 20px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 20px;
  transform: translate(-50%,-50%);
  max-width: 650px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  background: #D30000;

  border-radius: 7px;
  text-align:left;
  font-size: 10px;
}
.container form .input-box{
  height: 50px;
  margin: 25px 30px;
}
    input[type=text] 
    {

          height: 40px;
          width: 33%;
          outline: none;
          padding: 0 15px;
          font-size: 17px;
          font-weight: 400;
          color: #333;
          border: 1.5px solid #C7BEBE;
          border-bottom-width: 2.5px;
          border-radius: 6px;
          transition: all 0.3s ease;
      }
    input[type=radio]
    {

          height: 15px;
         
          outline: none;
          padding: 0 15px;
          font-size: 17px;
          font-weight: 400;
          color: #333;
          border: 1.5px solid #C7BEBE;
          border-bottom-width: 2.5px;
          border-radius: 6px;
          transition: all 0.3s ease;
      }
        input[type=date],input[type=time] {

        height: 40px;
          width: 28%;
          outline: none;
          padding: 0 15px;
          font-size: 17px;
          font-weight: 400;
          color: #333;
          border: 1.5px solid #C7BEBE;
          border-bottom-width: 2.5px;
          border-radius: 6px;
          transition: all 0.3s ease;
      }

      input[type=submit] {
        width:15%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid black;
        box-sizing: border-box;
        font-size: 15px;
        background-color: green;
        color:white;
      }
      
body input[type="text"],input[type="number"],input[type="date"],input[type="tel"],select:focus{
   outline: none;
}
body input[type="submit"]{
   background-color:  #343a40;
  color: #bdb8d7;
border-radius: 12px;
}
    
 form input[type="submit"]:hover {
  color: #fff;
background-color: #594f8d;
}
  </style>
  <body>
    
    <form method="POST" id="f2">

      <div class="container" style="font-size: 17px;">
      <div class="header">
        <center>
        <br><br><h1><center>Camp Organization Form</h1>
        Please complete the form below to apply for a camp organise</center>
      </div>
    <br>
    <br>

        &nbsp;&nbsp;<label><b>From Date</b><font color="red">*</font></label>
        <input type="date" id="c_date" name="c_date" style="height:40px;" required/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <label><b>To Date</b><font color="red">*</font></label>
        <input type="date" id="c_date1" name="c_date1" required/>
        <br><br>
           &nbsp;&nbsp;<label><b>Time</b><font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="time" id="c_time" name="c_time" style="height:40px;" required/>
        <br><br>


        <label><b>Is the area where the camp is organized clean, ventilated and with adequate &nbsp;&nbsp;lighting?</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='radio' id='y1' name='c_yn' value='yes' required /><label for ='y1'>Yes</label>
        <input type='radio' id='n1' name='c_yn' value='no'/><label for ='n1'>No</label>
        <br>
<label><b>Is there drinking water system?</b><font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='radio' id='y2' name='c_yn1' value='yes' required /><label for ='y2'>Yes</label>
        <input type='radio' id='n2' name='c_yn1' value='no'/><label for ='n2'>No</label>
        <br><br>        
       
<label><b>Is there facility of full time power supply?</b><font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='radio' id='y3' name='c_yn2' value='yes' required /><label for ='y3'>Yes</label>
        <input type='radio' id='n3' name='c_yn2' value='no'/><label for ='n3'>No</label>
        <br><br>      
  
<label><b>Is there a communication system between the camp site and blood bank?</b><font color="red">*</font></label><br>
        <input type='radio' id='y4' name='c_yn3' value='yes' required /><label for ='y4'>Yes</label>
        <input type='radio' id='n4' name='c_yn3' value='no'/><label for ='n4'>No</label>
        <br><br>      

     <label><b>Is there adequate arrangement for health screening of blood donors?</b><font color="red">*</font></label><br>
        <input type='radio' id='y5' name='c_yn4' value='yes' required /><label for ='y5'>Yes</label>
        <input type='radio' id='n5' name='c_yn4' value='no'/><label for ='n5'>No</label>
        <br><br>      
 <label><b>Is there a waste disposal system?</b><font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='radio' id='y6' name='c_yn5' value='yes' required /><label for ='y6'>Yes</label>
        <input type='radio' id='n6' name='c_yn5' value='no'/><label for ='n6'>No</label>
        <br><br>  
         <label><b>Is there a hand washing facility for blood bank staff?</b><font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='radio' id='y7' name='c_yn6' value='yes' required /><label for ='y7'>Yes</label>
        <input type='radio' id='n7' name='c_yn6' value='no'/><label for ='n7'>No</label>
        <br><br>  
        <input type="hidden" id="flag1" name="flag1">
        <center>
        <input type="submit" id="submit" name="submit" value="SUBMIT" onclick="sub()">
        <input type="submit" name="back" id="back" class="btn"  value="BACK"  onclick="a()" /></center>
        </center>

      </div>
    </center>
    </form>
    <script>
        form=document.getElementById('f2');
        function validate_form()
        {
        // alert('submit')
        from_date=new Date(document.getElementById("c_date").value);
        to_date=new Date(document.getElementById("c_date1").value);
        var today_3=new Date();
        today_3.setDate(today_3.getDate()+3);
    
        var flag=0;

        // org_patt=/^([a-zA-Z]{2,}\s)*([a-zA-Z]{2,})$/;
        // org_name_patt=/^([a-zA-Z]{2,}\s)+([a-zA-Z]{2,})$/;
        // // c_place_patt=/^[a-zA-Z]{2,}$/;
        // mob_pat=/^[6-9][0-9]{9}$/;
        // email_patt=/^[a-zA-Z0-9#&*_]{1,}@[a-zA-Z]{1,}\.[a-z]{1,}$/;

        if(from_date > today_3){}
        else{flag=1;alert("From date must be 3 days after today");event.preventDefault();}

        if(to_date > from_date){}
        else{flag=1;alert("To date must be greater than From date");event.preventDefault();}

        // if(org_name_patt.test(org_name)){}
        // else{flag=1;alert("Enter valid organizers name");event.preventDefault();}

        // if(mob_pat.test(mobno)){}
        // else{flag=1;alert("Enter valid mob no.");event.preventDefault();}

        // if(email_patt.test(email)){}
        // else{flag=1;alert("Enter valid email");event.preventDefault();}

        document.getElementById('flag1').value=flag;
        // if(c_place_patt.test(c_place)){}
        // else{alert("Enter valid venue");event.preventDefault();}

        // if(c_place_patt.test(org_address)){}
        // else{alert("Enter valid organization address");event.preventDefault();}
     
        }
    function a()
    {
        // alert('back')
      document.getElementById('c_date').required=false;
      document.getElementById('c_date1').required=false;
      document.getElementById('c_time').required=false;
      document.getElementById('y1').required = false;
      document.getElementById('y2').required = false;
      document.getElementById('y3').required = false;
      document.getElementById('y4').required = false;
      document.getElementById('y5').required = false;
      document.getElementById('y6').required = false;
      document.getElementById('y7').required = false;
      form.removeEventListener('submit',validate_form);
    }
    
    form.addEventListener('submit',validate_form);
    // function sub()
    // {
    //    var c_d=document.getElementById('c_date').value;
    //    var c_d1=document.getElementById('c_date1').value;
    //    var inputDate = new Date($c_d); 
    //    var currentDate = new Date($c_d1);
    //    var date=new Date();
    //    date=date.getDate()+3;

    //    var dates = c_d.datepicker({
    //         defaultDate: "+1w",
    //         changeMonth: true,
    //         numberOfMonths: 1,
    //         minDate: dateToday,
    //         onSelect: function(selectedDate)
    //          {
    //             var option = this.id == "from" ? "minDate" : "maxDate",
    //                 instance = $(this).data("datepicker"),
    //                 date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
    //             dates.not(this).datepicker("option", option, date);
    //         }
    //     });
    //   if (currentDate<date)
    //    {
          
    //       alert("Enter the date period upto 3 days");
    //     } 
    //   else 
    //     {
    //        alert("Successful");
    //     }
    // }
 
</script>
<?php
  if(isset($_POST['back']))
{
    $sql="delete from camp where id=$id";
    $res=mysqli_query($conn,$sql);
    if($res)
    echo"<script>window.location.href='camp_org_final.php'</script>";
    else
    die("Error in deleting".mysqli_error);
    
}
if(isset($_POST['submit']) && $_POST['flag1']==0)
    {
      // $a=$_POST["org"];
      // $b=$_POST["c_place"];
      // $c=$_POST["org_name"];
      // $d=$_POST["org_address"];
      // $e=$_POST["mobno"];
      $f=$_POST["c_date"];
      $fa=$_POST["c_date1"];
      $g=$_POST["c_time"];
      $h=$_POST["c_yn"];
      $i=$_POST["c_yn1"];
      $j=$_POST["c_yn2"];
      $k=$_POST["c_yn3"];
      $l=$_POST["c_yn4"];
      $m=$_POST["c_yn5"];
      $n=$_POST["c_yn6"];

      $conn=mysqli_connect("localhost","root","","CPE");
      
      $sql="UPDATE camp
      SET c_date='$f', c_date1='$fa', c_time='$g', c_yn='$h', c_yn1='$i', c_yn2='$j', c_yn3='$k', c_yn4='$l', c_yn5='$m', c_yn6='$n'
      WHERE id=$id";
      
      $res=mysqli_query($conn,$sql);
      echo "<script>alert('form submitted');window.location='index.php'</script>";
    } 
?>
  </body>
</html>