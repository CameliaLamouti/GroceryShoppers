<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="../../css/style2.css">
    <script src="https://kit.fontawesome.com/d27ba70d65.js" crossorigin="anonymous"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>    
    <script src="../../javascript/ProductList.js" defer></script>

    <div id="sidebar"></div>
    <script>
    $(function(){
        $("#sidebar").load("sidenav.html");
    });
    </script>

</head>
<body>

    <div class="content">
        <div class= "header">
            <h2>Product List</h2> 
        </div>
        <div class="info">
            <p class="font-italic mb-1">Add new information, edit information of existing product, or delete existing product.</p>
        </div> 


        <div id="wrapper" style="overflow-x:auto;">
            <table class="center" cellspacing=2 cellpadding=5 id="data_table" method = "POST" action = "prod.php">
                <tr>
                <th>Item</th>
                <th>Image</th>
                <th>Product</th>
                <th>Inventory</th>
                <th>Price</th>
                <th>Description</th>
                <th></th>
                </tr>

                <tr id="row1">
                <td>1</td>
                <td><img src="../../Images/apples.jpg" width= 100px height=100px></td>
                <td><a href="ApplesInventory.html">Apples</a></td>
                <td id="ProductInventory_row1">300</td>
                <td id="ProductPrice_row1">$0.79/lb</td>
                <td id="ProductDescription_row1">imported from China</td>
                <td>
                <input type="button" class="editbtn" id="edit_button1" value="Edit" class="edit" onclick="edit_row('1')" name = "send">
                <input type="button" class="savebtn" id="save_button1" value="Save" class="save" onclick="save_row('1')" name = "send">
                <input type="button" class="deletebtn" value="Delete" class="delete" onclick="delete_row('1')" name = "send">
                </td>
                </tr>

                <tr id="row2">
                <td>2</td>
                <td><img src="../../Images/bananas.jpg" width= 100px height=100px></td>
                <td><a href="BananasInventory.html">Bananas</a></td>
                <td id="ProductInventory_row2">200</td>
                <td id="ProductPrice_row2">$0.90/lb</td>
                <td id="ProductDescription_row2">imported from Ecuador</td>
                <td>
                <input type="button" class="editbtn" id="edit_button2" value="Edit" class="edit" onclick="edit_row('2')" name = "send">
                <input type="button" class="savebtn" id="save_button2" value="Save" class="save" onclick="save_row('2')" name = "send">
                <input type="button" class="deletebtn" value="Delete" class="delete" onclick="delete_row('2')" name = "send">
                </td>
                </tr>

                <tr id="row3">
                <td>3</td>
                <td><img src="../../Images/broccoli.jpg" width= 100px height=100px></td>
                <td><a href="BroccoliInventory.html">Broccoli</a></td>
                <td id="ProductInventory_row3">150</td>
                <td id="ProductPrice_row3">$2.00/lb</td>
                <td id="ProductDescription_row3">Imported from Spain</td>
                <td>
                <input type="button" class="editbtn" id="edit_button3" value="Edit" class="edit" onclick="edit_row('3')" name = "send">
                <input type="button" class="savebtn" id="save_button3" value="Save" class="save" onclick="save_row('3')" name = "send">
                <input type="button" class= "deletebtn" value="Delete" class="delete" onclick="delete_row('3')" name = "send">
                </td>
                </tr>

                <tr id="row4">
                    <td>4</td>
                    <td><img src="../../Images/beef.jpg" width= 100px height=100px></td>
                    <td><a href="BeefInventory.html">Beef</a></td>
                    <td id="ProductInventory_row4">100</td>
                    <td id="ProductPrice_row4">$10.00/lb</td>
                    <td id="ProductDescription_row4">Imported from United States</td>
                    <td>
                    <input type="button" class="editbtn" id="edit_button4" value="Edit" class="edit" onclick="edit_row('4')" name = "send">
                    <input type="button" class="savebtn" id="save_button4" value="Save" class="save" onclick="save_row('4')" name = "send">
                    <input type="button" class= "deletebtn" value="Delete" class="delete" onclick="delete_row('4')" name = "send">
                    </td>
                </tr>

                <tr id="row5">
                    <td>5</td>
                    <td><img src="../../Images/pork.jpg" width= 100px height=100px></td>
                    <td><a href="PorkInventory.html">Pork</a></td>
                    <td id="ProductInventory_row5">120</td>
                    <td id="ProductPrice_row5">$7.00/lb</td>
                    <td id="ProductDescription_row5">Imported from Japan</td>
                    <td>
                    <input type="button" class="editbtn" id="edit_button5" value="Edit" class="edit" onclick="edit_row('5')" name = "send">
                    <input type="button" class="savebtn" id="save_button5" value="Save" class="save" onclick="save_row('5')" name = "send">
                    <input type="button" class= "deletebtn" value="Delete" class="delete" onclick="delete_row('5')" name = "send">
                    </td>
                </tr>

                <tr id="row6">
                    <td>6</td>
                    <td><img src="../../Images/chicken.jpg" width= 100px height=100px></td>
                    <td><a href="ChickenInventory.html">Chicken</a></td>
                    <td id="ProductInventory_row6">160</td>
                    <td id="ProductPrice_row6">$9.99/lb</td>
                    <td id="ProductDescription_row6">Imported from New Zealand</td>
                    <td>
                    <input type="button" class="editbtn" id="edit_button6" value="Edit" class="edit" onclick="edit_row('6')" name = "send">
                    <input type="button" class="savebtn" id="save_button6" value="Save" class="save" onclick="save_row('6')" name = "send">
                    <input type="button" class= "deletebtn" value="Delete" class="delete" onclick="delete_row('6')" name = "send">
                    </td>
                </tr>

                <tr id="row7">
                    <td>7</td>
                    <td><img src="../../Images/salmon.jpg" width= 100px height=100px></td>
                    <td><a href="SalmonInventory.html">Salmon</a></td>
                    <td id="ProductInventory_row7">110</td>
                    <td id="ProductPrice_row7">$5.50/lb</td>
                    <td id="ProductDescription_row7">Imported from China</td>
                    <td>
                    <input type="button" class="editbtn" id="edit_button7" value="Edit" class="edit" onclick="edit_row('7')" name = "send">
                    <input type="button" class="savebtn" id="save_button7" value="Save" class="save" onclick="save_row('7')" name = "send">
                    <input type="button" class= "deletebtn" value="Delete" class="delete" onclick="delete_row('7')" name = "send">
                    </td>
                </tr>

                <tr id="row8">
                    <td>8</td>
                    <td><img src="../../Images/shrimp.jpg" width= 100px height=100px></td>
                    <td><a href="ShrimpInventory.html">Shrimp</a></td>
                    <td id="ProductInventory_row8">250</td>
                    <td id="ProductPrice_row8">$6.00/lb</td>
                    <td id="ProductDescription_row8">Imported from Australia</td>
                    <td>
                    <input type="button" class="editbtn" id="edit_button8" value="Edit" class="edit" onclick="edit_row('8')" name = "send">
                    <input type="button" class="savebtn" id="save_button8" value="Save" class="save" onclick="save_row('8')" name = "send">
                    <input type="button" class= "deletebtn" value="Delete" class="delete" onclick="delete_row('8')" name = "send">
                    </td>
                </tr>

                <tr id="row9">
                    <td>9</td>
                    <td><img src="../../Images/tuna.jpg" width= 100px height=100px></td>
                    <td><a href="TunaInventory.html">Tuna</a></td>
                    <td id="ProductInventory_row9">175</td>
                    <td id="ProductPrice_row9">$4.00/pack</td>
                    <td id="ProductDescription_row9">Imported from China</td>
                    <td>
                    <input type="button" class="editbtn" id="edit_button9" value="Edit" class="edit" onclick="edit_row('9')" name = "send">
                    <input type="button" class="savebtn" id="save_button9" value="Save" class="save" onclick="save_row('9')" name = "send">
                    <input type="button" class= "deletebtn" value="Delete" class="delete" onclick="delete_row('9')" name = "send">
                    </td>
                </tr>

                <tr id="row10">
                    <td>10</td>
                    <td><img src="../../Images/cheese.jpg" width= 100px height=100px></td>
                    <td><a href="CheeseInventory.html">Cheese</a></td>
                    <td id="ProductInventory_row10">90</td>
                    <td id="ProductPrice_row10">$5.00/lb</td>
                    <td id="ProductDescription_row10">Imported from France</td>
                    <td>
                    <input type="button" class="editbtn" id="edit_button10" value="Edit" class="edit" onclick="edit_row('10')" name = "send">
                    <input type="button" class="savebtn" id="save_button10" value="Save" class="save" onclick="save_row('10')" name = "send">
                    <input type="button" class= "deletebtn" value="Delete" class="delete" onclick="delete_row('10')" name = "send">
                    </td>
                </tr>

                <tr id="row11">
                    <td>11</td>
                    <td><img src="../../Images/yogurt.jpg" width= 100px height=100px></td>
                    <td><a href="YogurtInventory.html">Yogurt</a></td>
                    <td id="ProductInventory_row11">150</td>
                    <td id="ProductPrice_row11">$3.00/pack</td>
                    <td id="ProductDescription_row11">Imported from Greece</td>
                    <td>
                    <input type="button" class="editbtn" id="edit_button11" value="Edit" class="edit" onclick="edit_row('11')" name = "send">
                    <input type="button" class="savebtn" id="save_button11" value="Save" class="save" onclick="save_row('11')" name = "send">
                    <input type="button" class= "deletebtn" value="Delete" class="delete" onclick="delete_row('11')" name = "send">
                    </td>
                </tr>

                <tr id="row12">
                    <td>12</td>
                    <td><img src="../../Images/milk.jpg" width= 100px height=100px></td>
                    <td><a href="MilkInventory.html">Milk</a></td>
                    <td id="ProductInventory_row12">100</td>
                    <td id="ProductPrice_row12">$2.50/L</td>
                    <td id="ProductDescription_row12">Imported from Canada</td>
                    <td>
                    <input type="button" class="editbtn" id="edit_button12" value="Edit" class="edit" onclick="edit_row('12')" name = "send">
                    <input type="button" class="savebtn" id="save_button12" value="Save" class="save" onclick="save_row('12')" name = "send">
                    <input type="button" class= "deletebtn" value="Delete" class="delete" onclick="delete_row('12')" name = "send">
                    </td>
                </tr>

                <tr id="row13">
                    <td>13</td>
                    <td><img src="../../Images/coke.jpg" width= 100px height=100px></td>
                    <td><a href="CokeInventory.html">Coke</a></td>
                    <td id="ProductInventory_row13">200</td>
                    <td id="ProductPrice_row13">$2.99/L</td>
                    <td id="ProductDescription_row13">Imported from China</td>
                    <td>
                    <input type="button" class="editbtn" id="edit_button13" value="Edit" class="edit" onclick="edit_row('13')" name = "send">
                    <input type="button" class="savebtn" id="save_button13" value="Save" class="save" onclick="save_row('13')" name = "send">
                    <input type="button" class= "deletebtn" value="Delete" class="delete" onclick="delete_row('13')" name = "send">
                    </td>
                </tr>

                <tr id="row14">
                    <td>14</td>
                    <td><img src="../../Images/crush.jpeg" width= 100px height=100px></td>
                    <td><a href="CrushInventory.html">Crush</a></td>
                    <td id="ProductInventory_row14">150</td>
                    <td id="ProductPrice_row14">$2.99/L</td>
                    <td id="ProductDescription_row14">Imported from China</td>
                    <td>
                    <input type="button" class="editbtn" id="edit_button14" value="Edit" class="edit" onclick="edit_row('14')" name = "send">
                    <input type="button" class="savebtn" id="save_button14" value="Save" class="save" onclick="save_row('14')" name = "send">
                    <input type="button" class= "deletebtn" value="Delete" class="delete" onclick="delete_row('14')" name = "send">
                    </td>
                </tr>

                <tr id="row15">
                    <td>15</td>
                    <td><img src="../../Images/nestea.jpg" width= 100px height=100px></td>
                    <td><a href="NesteaInventory.html">Nestea</a></td>
                    <td id="ProductInventory_row15">250</td>
                    <td id="ProductPrice_row15">$2.00/L</td>
                    <td id="ProductDescription_row15">Imported from China</td>
                    <td>
                    <input type="button" class="editbtn" id="edit_button15" value="Edit" class="edit" onclick="edit_row('15')" name = "send">
                    <input type="button" class="savebtn" id="save_button15" value="Save" class="save" onclick="save_row('15')" name = "send">
                    <input type="button" class= "deletebtn" value="Delete" class="delete" onclick="delete_row('15')" name = "send">
                    </td>
                </tr>

                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="new_ProductInventory"></td>
                <td><input type="text" id="new_ProductPrice"></td>
                <td><input type="text" id="new_ProductDescription"></td>
                <td><input type="button" class="addbtn" class="add" onclick="add_row();" value="Add Row"></td name = "send">
                </tr>

            </table>
        </div>
    </div>
</body>
</html>

