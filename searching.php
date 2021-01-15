<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>SportsHub</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Bootie Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <!-- //Fonts -->

</head>

<body>

    <!-- mian-content -->
    <div class="main-banner inner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                 <!-- nav -->
                 <nav class="py-4">
                    <div id="logo">
                        <h1> <a href="index.php">

                        <img src="images/icon.png" />

                        </a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="signin.html">SignIn</a></li>
                        <li><a href="admin/index.php">ADMIN</a></li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->

    </div>
    <!--//main-content-->
    <!---->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="home.php">Home</a>
        </li>
       
    </ol>
    <!---->
    <!-- banner -->
    <section class="ab-info-main py-md-5 py-4">
        <div class="container py-md-3">
            <!-- top Products -->
            <div class="row">
                <!-- product left -->
                <div class="side-bar col-lg-4">

                    <div class="search-bar w3layouts-newsletter">
                        <h3 class="sear-head">Search Here..</h3>
                        <form action="search.php" method="get" class="d-flex">
                            <input type="search" placeholder="Product name..." name="search" class="form-control" required="">
                            <button class="btn1"><span class="fa fa-search" aria-hidden="true"></span></button>
                        </form>
                    </div>
                    <!--preference -->
                    <div class="left-side my-4">
                        <h3 class="sear-head">Categories</h3>
                        <ul class="w3layouts-box-list">

                                   
                        <?php


                        // $un = $_SESSION["un"];
                        //echo $_SESSION["un"];

                        include 'config.php';


                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM categories";
                        $result = $conn->query($sql);

                        if ($result) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                        echo  '

                                 <li>
                         
                                    <span class="span"><a href="categories1.php?cid=' . $row['cat_id'] . '" style="font-size: 14px;">' . $row['cat_title'] . '</a></span>
                                 </li>
                
                      
                        ';
                        }
                        } else {
                        echo "0 results";
                        }
                        $conn->close();
                        ?>


                           
                        </ul>
                    </div>
                    <!-- // preference -->
                    <!-- discounts -->
                    <div class="left-side">
                        <h3 class="sear-head">Brands</h3>
                        <ul class="w3layouts-box-list">
                                       
                        <?php


                       

                            include 'config.php';


                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM brands";
                            $result = $conn->query($sql);

                            if ($result) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                            echo  '

                                    <li>
                            
                                        <span class="span"><a href="products1.php?bid=' . $row['brand_id'] . '" style="font-size: 14px;">' . $row['brand_title'] . '</a></span>
                                    </li>


                            ';
                            }
                            } else {
                            echo "0 results";
                            }
                            $conn->close();
                            ?>

                        </ul>
                    </div>
                    <!-- //discounts -->
                    <!-- reviews -->
             

                </div>
                <!-- //product left -->
                <!-- product right -->
                <div class="left-ads-display col-lg-8">

                <div class="row">

                                                            
                            <?php


                             $s = $_GET["search"];
                            //echo $_SESSION["un"];

                            include 'config.php';


                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM products where product_title='$s' ";
                            $result = $conn->query($sql);

                            if ($result) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                           $status=$row['quantity'];
                            if($status==0)
                            {
                                $str="disabled";
                                $str1="OutOfStock";
                            }
                            else{
                                $str="enable";
                                $str1="AddToCart";
                            }
                            echo  '

                            
                            <script>
                            function alertcart()
                            {
                                    alert("Please login");
                            }

                        </script>


                            <div class="col-md-4 product-men">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                <a href="itemdetails.php?itemid=' . $row['product_id'] . '">   
                                    <img src="images/' . $row['product_image'] . '" class="img-fluid" alt="" style="width:100%;height:150px">
                                    <span class="product-new-top">New</span>
                                </a>    
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="#">' . $row['product_title'] . ' </a>
                                    </h4>
        
                                    <div class="product_price">
                                        <div class="grid-price">
                                            <span class="money">$' . $row['product_price'] . '</span>
                                        </div>
                                    </div>
                                  
                                    <div class="ban-buttons">

                                  

                                      
                          
                                    </div>
                                </div>

                               
                            </div>
                        </div>


                            ';
                            }
                            } else {
                            echo "<h1> results</h1>";
                            }
                            $conn->close();
                            ?>








                            </div>


                            </div>
                            </div>



                
                    <!-- <div class="grid-img-right mt-4 text-right">
                        <span class="money">Flat 50% Off</span>
                        <a href="shop-single.html" class="btn">Shop Now</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row footer-top">
                <div class="col-lg-4 footer-grid_section_w3layouts">
                    <h2 class="logo-2 mb-lg-4 mb-3">
                        <a href="index.html">SportsHub</a>
                    </h2>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <h4 class="sub-con-fo ad-info my-4">Catch on Social</h4>
                    <ul class="w3layouts_social_list list-unstyled">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank" class="w3pvt_facebook">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="https://twitter.com/LOGIN" target="_blank" class="w3pvt_twitter">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-lg-8 footer-right">
                    
                
                    <div class="cpy-right text-left row">
                        <p class="col-md-10">© 2020 SportsHub. All rights reserved | Design by
                            <a href="#"> SportsHub.</a>
                        </p>
                        <!-- move top icon -->
                        <a href="#home" class="move-top text-right col-md-2"><span class="fa fa-long-arrow-up" aria-hidden="true"></span></a>
                        <!-- //move top icon -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
</body>

</html>
