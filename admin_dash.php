<!DOCTYPE html>
<html>
<?php
// error_reporting(0);
session_start();
include "connection.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require ("PHPMailer\Exception.php");
require ("PHPMailer\SMTP.php");
require ("PHPMailer\PHPMailer.php");
function sendBirthMail($email)
{
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {                    
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'dhamanechinmay@gmail.com';                     //SMTP username
        $mail->Password   = 'ofsqopvvptollivo';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('dhamanechinmay@gmail.com', 'Life saviour');
        $mail->addAddress($email);               //Name is optional
       
    
        //Attachments
       // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Life Saviour';
        $mail->Body    = 'We wish you a very happy Birthday! Consider celebrating by donating blood and spreading love to those in need. Your kindness could save lives. Have a wonderful day!';

        $mail->send();
        // echo "sent";
        Return true;
    } catch (Exception $e) {
         //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        Return false;
    }
}

if(isset($_POST['otp'])) {
    $_SESSION['otp'] = $_POST['otp'];
    $otp = $_SESSION['otp'];
} else {
    $otp = $_SESSION['otp'];
}

$email = $_SESSION['email'];
$pass = $_SESSION['pass'];

$query = "select * from ADMIN where EMAIL='$email' and PASSWORD='$pass' and OTP='$otp'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
if ($row > 0) {
    $today = date('Y-m-d');
    require("admin_dash.html");
    $query_mail = "select * from DONOR where DOB='$today'";
    $result_mail = mysqli_query($conn, $query_mail);
    while($row_mail = mysqli_fetch_assoc($result_mail))
    {
        sendBirthMail($row_mail['EMAIL']);
                // echo $row_mail['EMAIL'];
    }
    $query_update_camp="update camp set RUN_STATUS='OVER' WHERE c_date1<CURRENT_DATE() and STATUS='APPROVED'";
        $res_update_camp=mysqli_query($conn,$query_update_camp);
        $query_update_camp2="update camp set RUN_STATUS='ACTIVE' WHERE c_date1>=CURRENT_DATE() and STATUS='APPROVED'";
        $res_update_camp2=mysqli_query($conn,$query_update_camp2);

} 
else {
    echo "<script>alert('Invalid OTP');window.location.href='admin_login.php'</script>";
}


$start_date = date('Y-m-d', strtotime('-1 week'));
$end_date = date('Y-m-d', strtotime('-1 day'));

// Create a calendar table
$calendar = [];
$date = $start_date;
$i = 0;
while (strtotime($date) <= strtotime($end_date)) {
    $calendar[] = $date;
    $date = date('Y-m-d', strtotime('+1 day', strtotime($date)));

    $query = "select * from DONATE_BLOOD where DATE='$date' and DONATION_STATUS='COMPLETED'";
    $res = mysqli_query($conn, $query);
    $a[$i] = mysqli_num_rows($res);

    $query = "select * from hospitalemergency where Date='$date' and STATUS='APPROVED'";
    $res = mysqli_query($conn, $query);
    $a1[$i] = mysqli_num_rows($res);
    $i++;
}
$query_ = "select * from hospitalemergency where STATUS='UNSEEN'";
$res_ = mysqli_query($conn, $query_);
$request0 = mysqli_num_rows($res_);
$query_ = "select * from CAMP where STATUS='UNSEEN'";
$res_ = mysqli_query($conn, $query_);
$request1 = mysqli_num_rows($res_);

$query_ = "select * from DONATE_BLOOD where STATUS='UNSEEN'";
$res_ = mysqli_query($conn, $query_);
$donation0 = mysqli_num_rows($res_);
$query_ = "select * from DONATE_BLOOD where DONATION_STATUS='UNSEEN' and STATUS='APPROVED'";
$res_ = mysqli_query($conn, $query_);
$donation1 = mysqli_num_rows($res_);
$query_ = "select * from DONATE_BLOOD where DONATION_STATUS='INITIATED'";
$res_ = mysqli_query($conn, $query_);
$donation2 = mysqli_num_rows($res_);

$query_ = "select * from DONOR where STATUS='COMPLETED'";
$res_ = mysqli_query($conn, $query_);
$donor0 = mysqli_num_rows($res_);



?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script>
        var request0=<?php echo $request0;?>;
        var request1=<?php echo $request1; ?>;
        var  donation0=<?php echo $donation0; ?>;
        var  donation1=<?php echo $donation1; ?>;
        var   donation2=<?php echo $donation2; ?>;
        var donor0= <?php echo $donor0; ?>;
        if(request0>0 || request1>0)
        {
            document.getElementById("requesti").style.color="red";
            document.getElementById("requesti").style.display="inline-block";

        }
        if(donation0>0 || donation1>0 || donation2>0)
        {
            document.getElementById("donationi").style.color="red";
            document.getElementById("donationi").style.display="inline-block";

        }
        if(donor0>0)
        {
            document.getElementById("donori").style.color="red";
            document.getElementById("donori").style.display="inline-block";

        }
    </script>
    <script type = "text/javascript" > 
		function preventBack(){window.history.forward();} 
		setTimeout("preventBack()", 0); 
		window.onunload=function(){null}; 
		</script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var a = <?php echo json_encode($a); ?>;
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Day');
            data.addColumn('number', 'Donations');

            // Add data for last week
            var today = new Date();
            var oneWeekAgo = new Date();
            oneWeekAgo.setDate(today.getDate() - 7);
            var day = oneWeekAgo;

            for (var i = 0; i < a.length; i++) {
                data.addRow([day.toISOString().slice(0, 10), a[i]]);
                day.setDate(day.getDate() + 1);
            }

            var options = {
                title: 'Last Week Donations',
                curveType: 'function',
                legend: {position: 'bottom'}
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }

        function drawChart1() {
            var a1 = <?php echo json_encode($a1); ?>;
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Day');
            data.addColumn('number', 'Blood request fulfilled');

            // Add data for last week
            var today = new Date();
            var oneWeekAgo = new Date();
            oneWeekAgo.setDate(today.getDate() - 7);
            var day = oneWeekAgo;

            for (var i = 0; i < a1.length; i++) {
                data.addRow([day.toISOString().slice(0, 10), a1[i]]);
                day.setDate(day.getDate() + 1);
            }

            var options = {
                title: 'Last Week Blood requests',
                curveType: 'function',
                legend: {position: 'bottom'}
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div1'));
            chart.draw(data, options);
        }
    </script>
</head>

<body onload="drawChart();drawChart1()">
<div id="chart_div" style="width: 100%; height: 500px; margin: auto"></div>
<div id="chart_div1" style="width: 100%; height: 500px; margin: auto"></div>
</body>

</html>
