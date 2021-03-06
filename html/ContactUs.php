<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../javascript/contactJS.js" defer></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <style>
       h1.center{
           margin: 20px;
           text-align: center;           
           color: black;
       }
       h5.blah{
           margin: 20px;
           padding: 20px;
           text-align: center;
           background-color: blue;
           color: white;
       }
       p{
            margin: 20px;
           text-align: center;
           padding: 10px;
           font: caption;
           font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
           font-size: large;
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
    <main>

    <h1 class="center">Contact Us</h1>
    <h5 class="blah">Notice! : Please be aware that we are currently receiving an enormous amount of messages. We are prioritizing COVID-19 messages. Thank you for understanding
        and will try to answer as quick as possible.
    </h5>
    <p><b>We're here and we're listening! If you have any questions or concerns regarding prices for in-store or online, please fill out the form below and we will 
        answer as soon as possible! If you have any comments or suggestions please fill out the form below as well!</b></p>
    

    <div class="form">
        <form action="PHPScript.php" method="POST">
        <input type="radio" name="agree" value="Website">
        <label for="website">Website</label></br>
        <input type="radio" name="agree" value="Mobile Application">        
        <label for="mobile application"> Mobile Application</label></br>
        <input type="radio" name="agree" value="Grocery Shoppers Online">
        <label for="Grocery Shoppers Online"> Grocery Shoppers Online</label></br>
        <input type="radio" name="agree" value="Grocery Shoppers in-store">
        <label for="Grocery Shoppers in-store"> Grocery Shoppers in-store</label></br>
        <label for="Order Number">Order Number</label>
        <input type="text" placeholder="Ex: #12345AB" name="OrderNumber" id = "OrderNumber" required onfocusout="validateOrderNum()">
        <label for="Item Name">Item Name</label>
        <input type="text" placeholder="Ex: Apple" name="ItemName" id="ItemName" required>
        <label for="First Name">First Name</label>
        <input type="text" placeholder="Enter First Name" name="FirstName" id = "firstName" required>
        <label for="Last Name">Last Name</label>
        <input type="text" placeholder="Enter Last Name" name="LastName" id = "lastName" required>
        <label for="Email Address">Email Address</label>
        <input type="text" placeholder="Enter Email Address" name="EmailAddress" id = "emailAddress" required >
        <label for="Phone Number">Phone Number</label>
        <input type="text" placeholder="+1 (514) xxx xxxx" name="PhoneNumber" id = "phoneNumber" required>
        <label for="comments">Comments/Questions</label><br/>
        <textarea name="comments" rows="10" cols = "69" name="comments" id = "comments"></textarea>
        <button type="Send"  onclick="send()" id="send_button" name="submit" value="enter">Send</button>
        </form>
    </div>
    
    

    

    </main> 
    <div id="footer" class="footer"></div>
    <script>
        $(function(){
          $("#footer").load("footer.html");
        });
        </script>

    </body>
</html>