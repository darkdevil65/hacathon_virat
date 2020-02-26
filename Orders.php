

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Orders</title>
      <!--   Favicon -->
      <link rel="shortcut icon" href="./Images/Cow_icon.ico" />
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
      <style type="text/css">
         a, a:hover, a:focus {
        color: inherit;
         text-decoration: none;
}
a.download:hover{
    color: red;
}
a.download {
    color:black;
    text-align: center;
    font-size: 20px;
}
         .io {
         border: 1px solid black;
         border-radius: 15px;
         padding-left: 14px;
         padding-right: 14px;
         padding-top: 0px;
         background-color: #D6EAF8;
         }
         .gh {
         background-color: #F8F8F8;

         }
         .nav-pills .nav-link.active,
         .nav-pills .show>.nav-link {
         color: #808080;
         background-color: #f4f1f1;
         }
         td,th{
         padding:20px;

         }
         th{
            color:#696969;
         }
         body {
         font-family: 'Muli', sans-serif;
         }

         @media only screen and (max-width: 756px) {
  td,th{
    display: block;


  }



hr {
  -moz-border-bottom-colors: none;
  -moz-border-image: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-color: #EEEEEE -moz-use-text-color #FFFFFF;
  border-style: solid none;
  border-width: 1px 0;
  margin: 18px 0;
}

}
      </style>
   </head>
   <body class="hold-transition sidebar-mini">
      <div class="wrapper">
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
               </li>
            </ul>
            <div class="input-group md-form form-sm form-2 pl-0">
  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
  <div class="input-group-append">
    <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
        aria-hidden="true"></i></span>
  </div>
</div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="Settings.php">HOME</a>
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
                    </div></nav>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <span class="dropdown-header">15 Notifications</span>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                     <i class="fas fa-envelope mr-2"></i> 4 new messages
                     <span class="float-right text-muted text-sm">3 mins</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                     <i class="fas fa-users mr-2"></i> 8 friend requests
                     <span class="float-right text-muted text-sm">12 hours</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                     <i class="fas fa-file mr-2"></i> 3 new reports
                     <span class="float-right text-muted text-sm">2 days</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fas fa-th-large"></i></a>
               </li>
            </ul>
         </nav>
         <!-- /.navbar -->
         <!-- Main Sidebar Container -->
         <aside class="main-sidebar gh elevation-4">
            <div style="  padding: 20% 30% 10% 30%; margin-left: 13px; ">
               <img src="./images/sacred-cow.png">
            </div>
            <div>
               <i class="   glyphicon glyphicon-home"></i>
            </div>
            <div class="sidebar">
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                     <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                           <i><img src="./images/home-white-24dp/1x/outline_home_black_24dp.png"></i>
                           <p style="">
                              Dashboard
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                      
                  </ul>
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                     <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                           <i class="nav-icon"><img src="./images/file (1).png"></i>
                           <p style>
                              Pages
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Team</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Orders</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Settings</p>
                              </a>
                           </li>
                           </li>
                        </ul>
                  </ul><br><br>
                   
        
<br>
<br>
<hr>
                  
        </nav><hr>

                  </li>
                  <br>
               </nav>
               <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
         </aside>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row m-1   ">
                     <div class="col-md-6">
                        <h1 class="m-0 text-dark">Orders</h1>
                     </div>
                     <!-- /.col -->
                     <div class="col-md-6">
                        <!-- <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Orders</a></li>
                           <li class="breadcrumb-item active">Starter Page</li>
                        </ol> -->
                     
                     </div>
                     <!-- /.col -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row m-2">
                     <div class="col-md-2">
                        <h4>All&nbsp<span class="badge badge-pill badge-primary">305</span></h4>
                     </div>
                     <!-- /.col -->
                     <div class="col-md-2">
                        <h4>Pending&nbsp<span class="badge badge-pill badge-primary">30</span></h4>
                     </div>
                     <div class="col-md-2">
                        <h4>Processing&nbsp<span class="badge badge-pill badge-primary">5</span></h4>
                     </div>
                     <div class="col-md-2">
                        <h4>Refunded&nbsp<span class="badge badge-pill  badge-primary">35</span></h4>
                     </div>

                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.container-fluid -->
            </div>
            <div class="row m-4 ">
               <div class="container-fluid">
                  <div class="card card-outline-primary ">
                     <div class="card-header bg-transparent border col-md-12">
                        <form class="form-inline">
                            <button class="btn" type="submit">
                     <i class="fas fa-search " aria-hidden="true" style="margin-left: -13px;"></i>
                 </button>
                     <input class="form-control form-control-navbar" type="search" style="border:none;width: 96%;" placeholder="Search" aria-label="Search">

                     </form>

                 </div>


<table>
    <tr style="border-bottom:2px solid #f0f0f0;">
<th>

<!-- Default unchecked -->
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
    <label class="custom-control-label" for="defaultUnchecked"></label>
</div>
</th>
<th>Order&nbsp<i class="fas fa-sort"></i></th>
<th>Product&nbsp<i class="fas fa-sort"></i></th>
<th>Product Image&nbsp<i class="fas fa-sort"></i></th>
<th>Date&nbsp<i class="fas fa-sort"></i></th>
<th>Total&nbsp<i class="fas fa-sort"></i></th>
<th>Payment Method&nbsp<i class="fas fa-sort"></i></th>

</tr>
<?php  

$conn= mysqli_connect("localhost:3307","root","","hackthon");
if(mysqli_error($conn)) {
    echo "failed";
}
else{
    echo "";
} 

$sql = "SELECT *  FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = mysqli_fetch_array($result))   {?>

<tr style="border-bottom:2px solid #f0f0f0;">



<td>

<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input">
    <label class="custom-control-label"></label>
</div>
</td>

<td>    
<?php 
echo "#".$row["product_id"];
 ?>

</td>

<td>    
<?php 
echo $row["pname"];
 ?>
</td>

<td>    
<?php 
echo '<img src="data:image/jpeg;base64,'.base64_encode($row['photo'] ).'" height="140" width="140" class="img-thumnail" /> ';
 ?>
</td>


<td>    
<?php 
echo $row["price"];
 ?>
</td>

<td>    
<?php 
echo $row["detail"];
 ?>
</td>


<td>  

<?php 
echo $row["payment_method"];
 ?>
</td>

</tr>


  <?php 
   }
  echo "";
} else {
  echo "0 results";
}

$conn->close();

?>
 
                        </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- REQUIRED SCRIPTS -->
      <!-- jQuery -->
      <script src="plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="dist/js/adminlte.min.js"></script>
   </body>
</html>