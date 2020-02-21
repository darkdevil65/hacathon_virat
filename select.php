<!DOCTYPE html>
<html>
<head><title>Order</title></head>
<body>

<?php
$conn= mysqli_connect("localhost:3307","root","","hackthon");
if(mysqli_error($conn)) {
	echo "failed";
}
else{
	echo "";
} 

$sql = "SELECT pname,photo,price,detail FROM product";
//$result = $conn->query($sql);
$result = mysqli_query($conn, $sql);  
if ($result->num_rows > 0) {
     
                while($row = mysqli_fetch_array($result))  
                {  
                	  echo "product name-".$row["pname"]."";
                      echo '<img src="data:image/jpeg;base64,'.base64_encode($row['photo'] ).'" height="150" width="150" class="img-thumnail" />'; 
                      echo "<br>";
                     echo "Price:-".$row["price"]."";
                      echo "<br>";
                      echo "Price:-".$row["detail"]."";
                      echo "<br>";
                      echo "<hr>";
                }  
}
 else {
    echo "0 results";
}

$conn->close();
?> 
</body>
</html>