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
                <h5>Fish & Seafood</h5>
                </div>
            <section class="Aisles">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Salmon</h3>
                            <a href="Fish and Seafood/PP_Salmon.php"> <img src =../../Images/salmon.jpg> </a>
                            $15.00/lb 
                        </br>
                            <a href="Fish and Seafood/PP_Salmon.php"> More Description on Salmon</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Tuna</h3>
                            <a href="Fish and Seafood/PP_Tuna.php"><img src="../../Images/tuna.jpg"></a>
                            $3.80/lb
                        </br>
                            <a href="Fish and Seafood/PP_Tuna.php"> More Description on Tuna</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Shrimp</h3>
                            <a href="Fish and Seafood/PP_Shrimp.php"><img src="../../Images/shrimp.jpg"></a>
                            $13.99/lb
                        </br>
                            <a href="Fish and Seafood/PP_Shrimp.php"> More Description on Shrimp</a>
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