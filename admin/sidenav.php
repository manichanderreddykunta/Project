<!doctype html>
<html lang="en">

<head>
  <title>Hello, world!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="assets/css/Material+Icons.css" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link href="assets/css/black-dashboard.css" rel="stylesheet" />
  

<style>

.sidebar, .off-canvas-sidebar {
    height: calc(100vh - 90px);
    width: 230px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1;
    background-size: cover;
    background-position: center center;
    display: block;
    background: #1da1f2;
    box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.6);
    margin-top: 80px;
    margin-left: 20px;
    border-radius: 5px;
}

  </style>

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" style="background-color:1da1f2">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
     
        </a>
      </div>
      <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="3a8db1f4-24d8-4dbf-85c9-4f5215c1b29a">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="productlist.php">
              <i class="material-icons">list</i>
              <p>Product List</p>
            </a>
            
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="orders.php">
              <i class="material-icons">library_books</i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="addproduct.php">
              <i class="material-icons">add</i>
              <p>Add Products</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="adddiscounts.php">
              <i class="material-icons">add</i>
              <p>Add Discount Products</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="manageuser.php">
              <i class="material-icons">edit_user</i>
              <p>Manage User</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../logout.php">
              <i class="material-icons">logout</i>
              <p>Logout</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    
    