<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../css/style.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Products</title>
        <script src="../../javascript/script.js" defer></script>
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
        $("#nav-placeholder").load("../navbar.html");
        });
        </script>
        <main>
        <p>
            <div class="WordsBanner1">
                <h5>Fruits & Vegetables</h5>
                </div>
            <section class="Aisles">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Apples</h3>
                            <a href="Fruits and Vegetables/PP_Apples.php"> <img src =../../Images/apples.jpg> </a>
                            $0.79/lb 
                        </br>
                            <a href="Fruits and Vegetables/PP_Apples.php"> More Description on Apples</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Bananas</h3>
                            <a href="Fruits and Vegetables/PP_Bananas.php"><img src="../../Images/bananas.jpg"></a>
                            Bananas are on sale! Only $0.79/lb
                        </br>
                            <a href="Fruits and Vegetables/PP_Bananas.php"> More Description on Bananas</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Broccoli</h3>
                            <a href="Fruits and Vegetables/PP_Broccoli.php"><img src="../../Images/broccoli.jpg"></a>
                            $1.58/lb
                        </br>
                            <a href="Fruits and Vegetables/PP_Broccoli.php"> More Description on Broccoli</a>
                        </div>
                    </div>
                </div>
            </section>
        
        </p>
        
    <br/>
</main>
    <!--Footer-->
    <div id="footer" class="footer"></div>
    <script>
        $(function(){
          $("#footer").load("../footer.html");
        });
        </script>



    </body>
</html>