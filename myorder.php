<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Setting</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="style5.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>
     <style type="text/css">
    td,tr{
padding: 30px;
}
 img{
    height: 100px;
    width: 100px;
}
  </style>

    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="mi12.jpg " align="center"></h3>
            </div>

            <ul class="list-unstyled components">
                <p>Menu</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Dashboard</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#"> 2</a>
                        </li>
                        <li>
                            <a href="#"> 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="myorder.php">Order</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Customize</a>
                </li>
            </ul>
            <hr>
                  <input type="text" placeholder="Search.." name="search" style="width: 200px;">
                  <button type="submit"><i class="fa fa-search"></i></button>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index5.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">LogOut</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
             <?php
$conn= mysqli_connect("localhost:3307","root","","hackthon");
if(mysqli_error($conn)) {
    echo "failed";
}
else{
    echo "";
} 

$sql = "SELECT * FROM product";
//$result = $conn->query($sql);
$result = mysqli_query($conn, $sql);  
if ($result->num_rows> 0) {
      echo "<table>";
                while($row = mysqli_fetch_array($result))  
                {  
                      //echo "product name-".$row["pname"]."";
                     // echo '<img src="data:image/jpeg;base64,'.base64_encode($row['photo'] ).'" height="150" width="150" class="img-thumnail" />'; 
                      //echo "<br>";
                    // echo "Price:-".$row["price"]."";
                    //  echo "<br>";
                    //  echo "Price:-".$row["detail"]."";
                      echo "<br>";
                    //  echo "<hr>";
                       $img= '<img src="data:image/jpeg;base64,'.base64_encode($row['photo'] ).'" height="30" width="30" class="img-thumnail" />';
    echo "<tr><td>" . $row["product_id"]. "</td><td> " . $row["pname"]."</td><td> " . $img."</td><td> " . $row["price"]."</td><td> " . $row["detail"]."</td><td> " . $row["payment_method"]. "</td></tr>";
                }  
                echo "</table>";
}
 
else {
    echo "0 results";
}

$conn->close();
?> 

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>