<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Products</title>
        <script src="../javascript/script.js" defer></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <style>
            ul { list-style-type: square;}
            body{background-color:darkgrey;}
            h1.center{
                text-align: center;

            }
            h3{color:crimson;
                
            }
            .center{
      display:block;
      margin-left:auto;
      margin-right:auto;
      width: 250px;
    }
    p.center{
        text-align:center;
    }
        h3{
            font-size:larger
        }
        ol{
            font-size:larger
        }
            
        </style>
    </head>
    <body>
        <div id="nav-placeholder"></div>
    <script>
    $(function(){
    $("#nav-placeholder").load("navbar.html");
    });
    </script>
        <p>
            <h1 class="center">Products</h1><br>
            <div class="WordsBanner1">
                <h5>Fruits & Vegetables</h5>
                </div>
            <section class="Aisles">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Apples</h3>
                            <a href="Products/Fruits and Vegetables/PP_Apples.php"> <img src =../Images/apples.jpg> </a>
                            $0.79/lb 
                        </br>
                            <a href="Products/Fruits and Vegetables/PP_Apples.php"> More Description on Apples</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Bananas</h3>
                            <a href="Products/Fruits and Vegetables/PP_Bananas.php"><img src="../Images/bananas.jpg"></a>
                            Bananas are on sale! Only $0.79/lb
                        </br>
                            <a href="Products/Fruits and Vegetables/PP_Bananas.php"> More Description on Bananas</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Broccoli</h3>
                            <a href="Products/Fruits and Vegetables/PP_Broccoli.php"><img src="../Images/broccoli.jpg"></a>
                            $1.58/lb
                        </br>
                        <a href="Products/Fruits and Vegetables/PP_Broccoli.php"> More Description on Broccoli</a>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <div class="WordsBanner1">
                <h5>Fish & Seafood</h5>
                </div>
            <section class="Aisles">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Salmon</h3>
                            <a href="Products/Fish and Seafood/PP_Salmon.php"> <img src =../Images/salmon.jpg> </a>
                            $15.00/lb 
                        </br>
                            <a href="Products/Fish and Seafood/PP_Salmon.php"> More Description on Salmon</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Tuna</h3>
                            <a href="Products/Fish and Seafood/PP_Tuna.php"><img src="../Images/tuna.jpg"></a>
                            $3.80/lb
                        </br>
                            <a href="Products/Fish and Seafood/PP_Tuna.php"> More Description on Tuna</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Shrimp</h3>
                            <a href="Products/Fish and Seafood/PP_Shrimp.php"><img src="../Images/shrimp.jpg"></a>
                            $13.99/lb
                        </br>
                        <a href="Products/Fish and Seafood/PP_Shrimp.php"> More Description on Shrimp</a>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <div class="WordsBanner1">
                <h5>Meat & Poultry</h5>
                </div>
            <section class="Aisles">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Beef</h3>
                            <a href="Products/Meat and Poultry/PP_Beef.php"> <img src =../Images/beef.jpg> </a>
                            Beef is on sale! Only $10.00/lb
                        </br>
                            <a href="Products/Meat and Poultry/PP_Beef.php"> More Description on Beef</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Chicken</h3>
                            <a href="Products/Meat and Poultry/PP_Chicken.php"><img src="../Images/chicken.jpg"></a>
                            $3.50/lb
                        </br>
                            <a href="Products/Meat and Poultry/PP_Chicken.php"> More Description on Chicken</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Pork</h3>
                            <a href="Products/Meat and Poultry/PP_Pork.php"><img src="../Images/pork.jpg"></a>
                            $5.56/lb
                        </br>
                        <a href="Products/Meat and Poultry/PP_Pork.php"> More Description on Pork</a>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <div class="WordsBanner1">
                <h5>Dairy & Eggs</h5>
                </div>
            <section class="Aisles">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Milk</h3>
                            <a href="Products/Dairy and Eggs/PP_Milk.php"> <img src =../Images/milk.jpg> </a>
                            $3.61/liter
                        </br>
                            <a href="Products/Dairy and Eggs/PP_Milk.php"> More Description on Milk</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Cheese</h3>
                            <a href="Products/Dairy and Eggs/PP_Cheese.php"><img src="../Images/cheese.jpg"></a>
                            $6.00/lb
                        </br>
                            <a href="Products/Dairy and Eggs/PP_Cheese.php"> More Description on Cheese</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Yogurt</h3>
                            <a href="Products/Dairy and Eggs/PP_Yogurt.php"><img src="../Images/yogurt.jpg"></a>
                            $4.00/pack
                        </br>
                        <a href="Products/Dairy and Eggs/PP_Yogurt.php"> More Description on Yogurt</a>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <div class="WordsBanner1">
                <h5>Beverages</h5>
                </div>
            <section class="Aisles">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Coke</h3>
                            <a href="Products/Beverages/PP_Coke.php"> <img src =../Images/coke.jpg> </a>
                            $4.00/pack
                        </br>
                            <a href="Products/Beverages/PP_Coke.php"> More Description on Coke</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Nestea</h3>
                            <a href="Products/Beverages/PP_Nestea.php"><img src="../Images/nestea.jpg"></a>
                            $2.99/pack
                        </br>
                            <a href="Products/Beverages/PP_Nestea.php"> More Description on Nestea</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Crush</h3>
                            <a href="Products/Beverages/PP_Crush.php"><img src="../Images/crush.jpeg"></a>
                            $1.49/can
                        </br>
                        <a href="Products/Beverages/PP_Crush.php"> More Description on Crush</a>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <div class="WordsBanner1">
                <h5>Bread & Bakery</h5>
                </div>
            <section class="Aisles">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Bread</h3>
                            <a href="Products/Bread and Bakery/PP_Bread.php"> <img src =../Images/Bread.jpg> </a>
                            $2.00/pack
                        </br>
                            <a href="Products/Bread and Bakery/PP_Bread.php"> More Description on Bread</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Burger Buns</h3>
                            <a href="Products/Bread and Bakery/PP_BurgerBuns.php"><img src="../Images/BurgerBuns.jpg"></a>
                            $4.99/pack
                        </br>
                            <a href="Products/Bread and Bakery/PP_BurgerBuns.php"> More Description on Burger Buns</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Baguettes</h3>
                            <a href="Products/Bread and Bakery/PP_Baguettes.php"><img src="../Images/baguette.jpeg"></a>
                            Baguettes are on sale! Only $3.00/pack
                        </br>
                        <a href="Products/Bread and Bakery/PP_Baguettes.php"> More Description on Baguettes</a>
                        </div>
                    </div>
                </div>
            </section>
    </p>
    <br/>

    <!--Footer-->
    <div id="footer" class="footer"></div>
    <script>
        $(function(){
          $("#footer").load("footer.html");
        });
        </script>



    </body>
</html>