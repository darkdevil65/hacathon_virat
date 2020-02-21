<!DOCTYPE html>
<html>
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
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        //echo " pname: ". $row["pname"]. " photo".$row['photo']." ".$row["price"] ."<br>";
    }
}
 else {
    echo "0 results";
}

$conn->close();
?> 
</body>
</html>