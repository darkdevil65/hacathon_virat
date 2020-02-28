<?php

  $dbhost='localhost:3307';
  $username='root';
  $password='';

  $conn = mysqli_connect("$dbhost","$username","$password",'hackthon');
  if ($conn->connect_error) {
    die('Connection Failed : '.$conn->connect_error);
  }

  $rs=mysqli_query($conn,"SELECT * FROM  orders");

    if ($rs->num_rows<1) {
      echo "no data...";
    }
    $arr="";
        while ($row=mysqli_fetch_array($rs)) 
      {
        $arr= $arr."{y:".$row["order_amount"].",label:'".$row["product_name"]."'},";
        
      }

    

?>





<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer1", {
  theme: "dark1", // "light1", "light2", "dark1", "dark2"
  backgroundColor:"#DFDFDF",
  exportEnabled: true,
  animationEnabled: true,
  title: {
    text: "Orders"
  },
  data: [{
    type: "area",
    startAngle: 25,
    toolTipContent: "<b>{label}</b>: {y}k",
    //showInLegend: "true",
    //legendText: "{label}",
    indexLabelFontSize: 16,
    indexLabel: "${y}k",
    dataPoints: [
<?php echo "$arr" ?>
    ]
  }]
});
chart.render();
// Chart -2
var chart = new CanvasJS.Chart("chartContainer2", {
  //theme: "light1", // "light1", "light2", "dark1", "dark2"
  backgroundColor:"#DFDFDF",
  exportEnabled: true,
  animationEnabled: true,
  title: {
    text: "Orders"
  },
  data: [{
    type: "doughnut",
    startAngle: 25,
    toolTipContent: "<b>{label}</b>: {y}",
    //showInLegend: "true",
    //legendText: "{label}",
    indexLabelFontSize: 16,
    indexLabel: "{label} - {y}₹",
    dataPoints: [
<?php echo "$arr" ?>
    ]
  }]
});
chart.render();

}
</script>
</head>
<body>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> 
  <div id="chartContainer1" style="height:100%; width:55%;display: inline-block;"></div>
  <div id="chartContainer2" style="height:100%; width:40%;display: inline-block;margin-left: 25px;"></div>
  <!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
</body>
</html>