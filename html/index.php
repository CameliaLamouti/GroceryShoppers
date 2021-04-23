<?php
include "../php/connection.php";
require ('../database/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Store</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../javascript/script.js" defer></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
    <div id="nav-placeholder"></div>
    
    <script>
    $(function(){
      $("#nav-placeholder").load("navbar.html");
    });
    </script>
    
    <div class="banner">
        <img class="banner-image" src="../Images/vegetables_fruits.jpg">
    </div>
    


    <main>
    
    <div class="WordsBanner">
    <h5>Weekly Deals</h5>
    </div>

    <section class="Aisles">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="Products/Fruits and Vegetables/PP_Bananas.php"><img src="../Images/bananas.jpg">Shop now for bananas</a>
                </br>
                <h6 style="color: red;">$0.79/lb<br><s style="color: black;">$1.49/lb</s></h6>

                </div>
                <div class="col-md-4">
                    <a href="Products/Bread and Bakery/PP_Baguettes.php"><img src="../Images/baguette.jpeg">Shop now for Baguettes</a>
                    <h6 style="color: red;">$3.00/pack<br><s style="color: black;">$4.00/pack</s></h6>
                </div>
                <div class="col-md-4">
                    <a href="Products/Meat and Poultry/PP_Beef.php"><img src="../Images/beef.jpg">Shop now for Beef</a>
                </br><h6 style="color: red;">$10.00/lb<br><s style="color: black;">$16.79/lb</s></h6>
                </div>
            </div>
        </div>
    </section>

    <div class="WordsBanner">
        <h5>Choose Aisle</h5>
    </div>

    <section class="Aisles">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="Products/FruitsAndVegetables.php"><img src="../Images/fruits-veggies.jpg">Fruits and Vegetables</a>
                </div>
                <div class="col-md-4">
                    <a href="Products/DairyAndEggs.php"><img src="../Images/dairy-eggs.jpg">Dairy and Eggs</a>
                </div>
                <div class="col-md-4">
                    <a href="Products/Beverages.php"><img src="../Images/beverages.jpg">Beverages</a>
                </div>
                <div class="col-md-4">
                    <a href="Products/FishAndSeafood.php"><img src="../Images/fish-seafood.jpg">Fish and Seafood</a>
                </div>
                <div class="col-md-4">
                    <a href="Products/MeatAndPoultry.php"><img src="../Images/meat-poultry.jpg">Meat and Poultry</a>
                 </div>
                 <div class="col-md-4">
                    <a href="Products/BreadAndBakery.php"><img src="../Images/breads-bakery.jpg">Bread and Bakery</a>
                 </div>
            </div>
    
        </div>
        </section>

    </main>
   

    <!--Footer-->
    <div id="footer" class="footer"></div>
    <script>
        $(function(){
          $("#footer").load("footer.html");
        });
        
        </script>
    
</body>
</html>