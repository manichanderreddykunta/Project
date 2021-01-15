                           
                                    <?php
                                    include 'config.php';
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                    }

                                    //search ki
                                   // $sql = "SELECT * FROM products where product_title='Nike Shoes' ";

                                    //brands ki
                                    $sql = "SELECT * FROM brands";

    $teams_res = mysqli_query($conn,$sql);
    $rows = array();
    //output
    while($row = mysqli_fetch_assoc($teams_res)) {
   
    
   //  $rows[] = array('product_id' => $row['product_id'],'product_cat' => $row['product_cat'],
   //  'product_brand' => $row['product_brand']
   //  ,'product_title' => $row['product_title'],'product_price' => $row['product_price']
   //  ,'product_image' => $row['product_image'],'product_desc' => $row['product_desc']
   //  ,'product_keywords' => $row['product_keywords'],'quantity' => $row['quantity']
   //  ,'size' => $row['size'],'color' => $row['color']);
   //  }

   $rows[] = array('brand_id' => $row['brand_id'],'brand_title' => $row['brand_title']
    );
   }

    echo json_encode($rows);
    //Json End

 $conn->close();
 ?>

