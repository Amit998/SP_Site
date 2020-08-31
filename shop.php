

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="productList.css">
    <link rel="stylesheet" href="style3.css">
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js" integrity="sha256-kiFgik3ybDpn1VOoXqQiaSNcpp0v9HQZFIhTgw1c6i0=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <!-- NAVBAR -->

  <nav class="navbar navbar-expand-lg fixed-top py-3">
    <a href="./index3.html" class="navbar-brand">AMT</a>
    <button
      class="navbar-toggler custom-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a href="./index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="./services" class="nav-link">Services</a>
        </li>

        <li class="nav-item">
          <a href="./shop.html" class="nav-link">Shop</a>
        </li>


        <li class="nav-item">
          <a href="./blog.html" class="nav-link">Blog</a>
        </li>
        <li class="nav-item">
          <a href="#contact" class="nav-link">Contact </a>
        </li>
        <li class="nav-item login-lin">
          <a href="./form.html" class="nav-link k">Login <i class="fa fa-user"></i></a>
        </li>
      </ul>

      <ul class="navbar-nav mx-auto">
        <form class="form-inline d-none d-sm-block" action="FullPost.php?id=<?php $searchQueryParameter ?>">
          <div class="form-group">
            <input class="form-control mr-2" name="search" type="text" placeholder="Search Here.." />
            <button class="btn" name="searchBtn" type="submit">Search</button>
          </div>
        </form>
      </ul>
    </div>
  </nav>
  <br>

  <!-- NAV BAR END -->

    <section class="shop-section">
        <div class="container">
            <h3 class="text-center">Our Product</h3>
            <div class="border"></div>
            <!--div class="row"-->
            
                    <div class="row">
                        <div class="col-xs-4 product-grid">      
                      <!--div class="col-md-6 col-md-offset-3"-->
                      <form action="" method="POST">
                          <table class="table table-striped" style="width: 100%;">
                              <tbody>
                                  <tr>
                                      <td>
                                  <div class="image">
                                  <a href="">
                                  <img src="img/1.jpg" alt="" class="w-100">
                                
                                  <div class="overlay">
                                    <div class="detail"><span class="">VIEW DETAILS</span></div>
                                  </div>
                                  </a>
                                  </div>
                                  
                                  <p class="text-center"><b>Name Of The Product<br>
                                  Price<br>
                                  Amount Available<br>
                                  Raiting:<br></b></p>
                                  
                        <!--a href="" type="submit" class="btn cartBtn" id="addToCart" >ADD TO CART</a-->
                        <input type="checkbox" name="object1">Select this
                        <input type="number" name="quantity1">obj1
                        <!--a href="" class="btn buy">BUY</a-->
                    <!--/div--></td>
                                 
                                    <td>
                  <!--div class="col-md-4 product-grid" -->
                        <div class="image">
                            <a href="">
                                <img src="img/1.jpg" alt="" class="w-100">
                                
                                <div class="overlay">
                                    <div class="detail"><span class="">VIEW DETAILS</span></div>
                                </div>
                            </a>
                        </div>
                        <p class="text-center"><b>Name Of The Product<br>
                          Price<br>
                          Amount Available<br>
                          Raiting:<br></b></p>
                        <!--a href="" type="submit" class="btn cartBtn" id="addToCart" >ADD TO CART</a-->
                        <input type="checkbox" name="object2">Select this
                        <input type="number" name="quantity2">obj2<!--a href="" class="btn buy" >BUY</a-->
                    <!--/div--></td>
    
                    <!--div class="col-md-4 product-grid" -->
                        <td>
                        <div class="image">
                            <a href="">
                                <img src="img/1.jpg" alt="here" class="w-100">
                                
                                <div class="overlay">
                                    <div class="detail"><span class="">VIEW DETAILS</span></div>
                                </div>
                            </a>
                        </div>
                        <p class="text-center"><b>Name Of The Product<br>
                          Price<br>
                          Amount Available<br>
                          Raiting:<br></b></p>
                        <!--a href="" type="submit" class="btn cartBtn" id="addToCart" >ADD TO CART</a-->
                        <input type="checkbox" name="object3">Select This
                        <input type="number" name="quantity3">obj3
                        <!--a href="" class="btn buy">BUY</a-->
                    <!--/div--></td></tr>
    
    
                        <tr>
                    <!--div class="col-md-4 product-grid" -->
                    <td>
                        <div class="image">
                            <a href="">
                                <img src="img/1.jpg" alt="" class="w-100">
                                
                                <div class="overlay">
                                    <div class="detail"><span class="" >VIEW DETAILS</span></div>
                                </div>
                            </a>
                        </div>
                        <p class="text-center"><b>Name Of The Product<br>
                          Price<br>
                          Amount Available<br>
                          Raiting:<br></b></p>
                        <!--a href="" type="submit" class="btn cartBtn" id="addToCart" >ADD TO CART</a-->
                        <input type="checkbox" name="object4">
                        <input type="number" name="quantity4">obj4
                        <!--a href="" class="btn buy">BUY</a-->
                    <!--/div-->
                        </td>
                  </tr>
                </tbody>
              </table><br>
              Email:<input type="text" name="id" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
              Phone:<input type="text" name="phn" required="true" pattern=".{10, }"><br>
               Name:<input type="text" name="name1" required="true"><br>
              <input type="hidden" name="form_submitted" value="1">
             
              <input type="submit" name="btn">
              <?php
                if(isset($_POST["form_submitted"]) and isset($_POST['btn'])){
                  $email= $_POST["id"];
                  $phn= $_POST["phn"];
                  $name1=$_POST["name1"];
                  
                ?>
              </form>
              <?php
                     
                    if(isset($_POST['btn'])){
                        if(!empty($_POST['object1'])){
                            $object1=$_POST['quantity1'][0];
                        }
                        if(!empty($_POST['object2'])){
                            $object2=$_POST['quantity2'][0];
                        }
                        if(!empty($_POST['object3'])){
                            $object3=$_POST['quantity3'][0];
                        }
                        if(!empty($_POST['object4'])){
                            $object4=$_POST['quantity4'][0];
                        }
                    }
                    if(empty($object1)){
                        $object1=0;
                    }
                    if(empty($object2)){
                        $object2=0;
                    }
                    if(empty($object3)){
                        $object3=0;
                    }
                    if(empty($object4))
                    {
                        $object4=0;
                    }
                    
                    $to="annukri26@gmail.com";
                    $subject="Asking for Quotation";
                    
                    $message="Mail from:".$email."\n"."Name:".$name1."\n"."Phn number=".$phn."\n"."Object1 quantity=".$object1."\n"."Object2 quantity=".$object2."\n"."Object3 quantity=".$object3."\n"."Object4 quantity=".$object4;                    
                    
                    if(mail($to,$subject,$message)){
                        ?>
            <script>alert("successful");</script>
                    <?php
                        //header('location: index.php');
                    } else{
                        ?>
            <script>alert("unsuccessful");</script>
                        <?php  
                            }
                    }
                        ?>
            </div>
          </div>
        </div>
      </div>
        <a href="#" class="viewCart"><i class="fa fa-cart-plus"></i></a>
    </section>

    

    <!-- Footer -->

    <div class="footer">
      <div class="inner-footer">
        <div class="footer-items">
          <h1>Computerts & Codes</h1>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis ut accusantium et veritatis suscipit,
            consequuntur omnis ab ratione debitis? Quasi voluptate laborum dolorum, quo voluptates quis beatae. Maiores,
            dolorum provident!
          </p>
        </div>

        <div class="footer-items">
          <h2>Our Works</h2>
          <div class="footer-border"></div>
          <ul>
            <a href=""><li>Work 1</li></a>
            <a href=""><li>Work 2</li></a>
            <a href=""><li>Work 3</li></a>
            <a href=""><li>Work 4</li></a>
          </ul>
        </div>

        <div class="footer-items">
          <h2>Our Portfolio</h2>
          <div class="footer-border"></div>
          <ul>
            <a href=""><li>Portfolio 1</li></a>
            <a href=""><li>Portfolio 2</li></a>
            <a href=""><li>Portfolio 3</li></a>
          </ul>
        </div>

        <div class="footer-items">
          <h2>Contact</h2>
          <div class="footer-border"></div>
          <ul>
            <li><i class="fa fa-map-marker" aria-hidden="true"></i> xyx street</li>
            <li>
              <i class="fa fa-phone" aria-hidden="true"></i>
              9798798678
            </li>
            <li>
              <i class="fa fa-envelope" aria-hidden="true"></i>
              vjhcc@gmail.com
            </li>
          </ul>

          <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">Copyright &copy; Computer & Codes 2020. All Rights Reserved</div>
    </div>

    
    
    <script src="./js/main.js"></script>
    
    
</body>
</html>