<?php
session_start();

if($_SESSION["email"] =="")
{
  header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Sports Hub</title>
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

<style>
element.style {
    background: #28a745;
    padding: 11px 31px;
    font-size: 13px;
    letter-spacing: 1px;
    color: #ffffff;
    border-radius: 0px;
    display: inline-block;
    box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -webkit-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -o-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -moz-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -ms-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    border: #fff;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    font-weight: 600;
    text-transform: uppercase;
}

.main-banner {
    height: 200px;
}
    </style>


</head>

<body>

    <!-- mian-content -->
    <div class="main-banner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                    <h1> <a href="home.php">

<img src="images/icon.png" />

</a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li class="active"><a href="home.php">Home</a></li>
                        <li ><a href="mycart.php">Cart</a></li>
                        <li ><a href="history.php">History</a></li>
                        
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
        <!--/banner-->
       
        <!--// banner-inner -->

    </div>
    <!--//main-content-->
    <!--/ab -->
 
    <!-- //ab -->
    <!--/ab -->
    <section class="about py-5">
        <div class="container pb-lg-3">
            <!-- <h3 class="tittle text-center">New Arrivals</h3> -->
            <div class="row">


                                                        
                                    <?php
                                    include 'config.php';
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                    }

                                    $id=$_GET['itemid'];

                                    $sql = "SELECT * FROM products where product_id='$id'";
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

                                        if($row['product_cat'] == "1" or $row['product_cat'] == "2" or $row['product_cat'] == "4")
                                        {
                                         //   echo "mens";
                                            echo  '

                                            <div class="col-md-6 product-men">
                                            <div class="product-shoe-info shoe text-center">
                                                <div class="men-thumb-item">
                                                    <img src="images/' . $row['product_image'] . '" class="img-fluid" alt="" style="height:250px">
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h4>
                                                        <a href="">' . $row['product_title'] . ' </a>
                                                    </h4>
                        
                                                   
                                                   
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-md-6 product-men">
                                                        <div class="item-info-product">
                                                        <h4>
                                                            <a href="">' . $row['product_title'] . ' </a>
                                                        </h4>
                            
                                                        <div class="product_price">
                                                            <div class="grid-price">
                                                                <span class="money">Color : 
                                                                
                                                                <select class="form-control">
                                                                    <option>White<option>
                                                                    <option>Red<option>
                                                                    <option>Blue<option>
                                                                    <option>Pink<option>
                                                                    <option>Black<option>
                                                                </select>
                                                                
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product_price">
                                                            <div class="grid-price">
                                                                <span class="money">Size : 
                                                                
                                                                <select class="form-control">
                                                                <option>XS<option>
                                                                <option>Small<option>
                                                                <option>Medium<option>
                                                                <option>Large<option>
                                                                <option>XL<option>
                                                            </select>
                                                                
                                                                </span>
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="product_price">
                                                            <div class="grid-price">
                                                                <span class="money">Price : $' . $row['product_price'] . '</span>
                                                            </div>
                                                        </div>
        
                                                        <h4>
                                                        <a >Description : ' . $row['product_desc'] . ' </a>
                                                    </h4>
        
                                                    <h4>
                                                    <a >Tags : ' . $row['product_keywords'] . ' </a>
                                                </h4>
                                                    
        
                                                <form action="cart.php">
                                
                                  
                                                <input type="text" class="product-quantity" name="quantity" value="1" size="2"   />
                                                <input type="hidden" name="product_image" value="'.$row['product_image'].'" />
                                                <input type="hidden" name="product_id" value="'.$row['product_id'].'" />
                                                <input type="hidden" name="product_title" value="'.$row['product_title'].'" />
                                                <input type="hidden" name="product_price" value="'.$row['product_price'].'" />
                                                <input type="hidden" name="product_desc" value="'.$row['product_desc'].'" />
                                                <input type="submit" value='.$str1.' class="btn btn-success btn-sm btnAddAction" '.$str.' style="    background: #28a745;
                                                padding: 11px 31px;
                                                font-size: 13px;
                                                letter-spacing: 1px;
                                                color: #fff;
                                                border-radius: 0px;
                                                display: inline-block;
                                                box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
                                                -webkit-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
                                                -o-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
                                                -moz-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
                                                -ms-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
                                                border: #fff;
                                                transition: 0.5s all;
                                                -webkit-transition: 0.5s all;
                                                -moz-transition: 0.5s all;
                                                -o-transition: 0.5s all;
                                                -ms-transition: 0.5s all;
                                                font-weight: 600;
                                                text-transform: uppercase;" / >
                    
                    
                                                </form>
                                                    
                                                       </div>
        
                                        </div>
        
                                            ';


                                        }

                                       else if($row['product_cat'] == "5" )
                                        {
                                            echo  '

                                            <div class="col-md-6 product-men">
                                            <div class="product-shoe-info shoe text-center">
                                                <div class="men-thumb-item">
                                                    <img src="images/' . $row['product_image'] . '" class="img-fluid" alt="" style="height:250px">
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h4>
                                                        <a href="">' . $row['product_title'] . ' </a>
                                                    </h4>
                        
                                                   
                                                   
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-md-6 product-men">
                                                        <div class="item-info-product">
                                                        <h4>
                                                            <a href="">' . $row['product_title'] . ' </a>
                                                        </h4>
                            
                                                        <div class="product_price">
                                                            <div class="grid-price">
                                                                <span class="money">Color : 
                                                                
                                                                <select class="form-control">
                                                                    <option>White<option>
                                                                    <option>Red<option>
                                                                    <option>Blue<option>
                                                                    <option>Pink<option>
                                                                    <option>Black<option>
                                                                </select>
                                                                
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product_price">
                                                            <div class="grid-price">
                                                                <span class="money">Size : 
                                                                
                                                                <select class="form-control">
                                                                <option>6<option>
                                                                <option>7<option>
                                                                <option>8<option>
                                                                <option>9<option>
                                                                <option>10<option>
                                                                <option>11<option>
                                                                <option>12<option>
                                                            </select>
                                                                
                                                                </span>
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="product_price">
                                                            <div class="grid-price">
                                                                <span class="money">Price : $' . $row['product_price'] . '</span>
                                                            </div>
                                                        </div>
        
                                                        <h4>
                                                        <a >Description : ' . $row['product_desc'] . ' </a>
                                                    </h4>
        
                                                    <h4>
                                                    <a >Tags : ' . $row['product_keywords'] . ' </a>
                                                </h4>
                                                    
        
                                                <form action="cart.php">
                                                <input type="text" class="product-quantity" name="quantity" value="1" size="2"   />
                                                <input type="hidden" name="product_image" value="'.$row['product_image'].'" />
                                                <input type="hidden" name="product_id" value="'.$row['product_id'].'" />
                                                <input type="hidden" name="product_title" value="'.$row['product_title'].'" />
                                                <input type="hidden" name="product_price" value="'.$row['product_price'].'" />
                                                <input type="hidden" name="product_desc" value="'.$row['product_desc'].'" />
                                                <input type="submit" value='.$str1.' class="btn btn-success btn-sm btnAddAction" '.$str.' style="    background: #28a745;
                                                padding: 11px 31px;
                                                font-size: 13px;
                                                letter-spacing: 1px;
                                                color: #fff;
                                                border-radius: 0px;
                                                display: inline-block;
                                                box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
                                                -webkit-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
                                                -o-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
                                                -moz-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
                                                -ms-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
                                                border: #fff;
                                                transition: 0.5s all;
                                                -webkit-transition: 0.5s all;
                                                -moz-transition: 0.5s all;
                                                -o-transition: 0.5s all;
                                                -ms-transition: 0.5s all;
                                                font-weight: 600;
                                                text-transform: uppercase;" / >
                    
                    
                                                </form>
                                                    
                                                       </div>
        
                                        </div>
        
                                            ';
                                        }

                                        else{
                                            echo  '

                                            <div class="col-md-6 product-men">
                                            <div class="product-shoe-info shoe text-center">
                                                <div class="men-thumb-item">
                                                    <img src="images/' . $row['product_image'] . '" class="img-fluid" alt="" style="height:250px">
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h4>
                                                        <a href="">' . $row['product_title'] . ' </a>
                                                    </h4>
                        
                                                   
                                                   
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-md-6 product-men">
                                                        <div class="item-info-product">
                                                        <h4>
                                                            <a href="">' . $row['product_title'] . ' </a>
                                                        </h4>
                            
                                                        <div class="product_price">
                                                            <div class="grid-price">
                                                                <span class="money">Color : ' . $row['color'] . '</span>
                                                            </div>
                                                        </div>
                                                        <div class="product_price">
                                                            <div class="grid-price">
                                                                <span class="money">Size : ' . $row['size'] . '</span>
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="product_price">
                                                            <div class="grid-price">
                                                                <span class="money">Price : $' . $row['product_price'] . '</span>
                                                            </div>
                                                        </div>
        
                                                        <h4>
                                                        <a >Description : ' . $row['product_desc'] . ' </a>
                                                    </h4>
        
                                                    <h4>
                                                    <a >Tags : ' . $row['product_keywords'] . ' </a>
                                                </h4>
                                                    
        
                                                <form action="cart.php">
                                
                                  
                                                <input type="text" class="product-quantity" name="quantity" value="1" size="2"   />
                                                <input type="hidden" name="product_image" value="'.$row['product_image'].'" />
                                                <input type="hidden" name="product_id" value="'.$row['product_id'].'" />
                                                <input type="hidden" name="product_title" value="'.$row['product_title'].'" />
                                                <input type="hidden" name="product_price" value="'.$row['product_price'].'" />
                                                <input type="hidden" name="product_desc" value="'.$row['product_desc'].'" />
                                                <input type="submit" value='.$str1.' class="btn btn-success btn-sm btnAddAction" '.$str.' style="    background: #28a745;
                                                padding: 11px 31px;
                                                font-size: 13px;
                                                letter-spacing: 1px;
                                                color: #fff;
                                                border-radius: 0px;
                                                display: inline-block;
                                                box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
                                                -webkit-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
                                                -o-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
                                                -moz-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
                                                -ms-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
                                                border: #fff;
                                                transition: 0.5s all;
                                                -webkit-transition: 0.5s all;
                                                -moz-transition: 0.5s all;
                                                -o-transition: 0.5s all;
                                                -ms-transition: 0.5s all;
                                                font-weight: 600;
                                                text-transform: uppercase;" / >
                    
                    
                                                </form>
                                                    
                                                       </div>
        
                                        </div>
        
                                            ';  
                                        }
                                        
                                    }
                                    } else {
                                    echo "0 results";
                                    }
                                    $conn->close();
                                    ?>


               
               
            </div>

        </div>
    </section>
    <!-- //ab -->
    <!--/testimonials-->
    
    <!--//testimonials-->
    <!--/ab -->
   
    <!-- //ab -->
    <!-- brands -->
 
    <!-- brands -->
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
