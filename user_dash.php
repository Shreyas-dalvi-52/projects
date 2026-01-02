<?php
session_start();
include "connection.php";
$email=$_SESSION['email'];
$pass=$_SESSION['pass'];
$query="select * from DONOR where EMAIL='$email' and PASSWORD='$pass'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$id=$row['ID'];
$mail=$row['EMAIL'];
if($row>0)
{
    if($row['STATUS']=="APPROVED")
      { require("user_dash.html");}  // echo "welcome ".$row['EMAIL'];
    else
        echo "<script>window.location.href='user_profile.php?id=$id'</script>";
}
else
{
    echo "<script>alert('Invalid Email or password');window.location.href='user_login.php'</script>";
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
?>
<html>
  <head>
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
