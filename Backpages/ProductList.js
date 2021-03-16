$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";

 var ProductInventory=document.getElementById("ProductInventory_row"+no);
 var ProductPrice=document.getElementById("ProductPrice_row"+no);
 var ProductDescription=document.getElementById("ProductDescription_row"+no);
 

 var ProductInventory_data=ProductInventory.innerHTML;
 var ProductPrice_data=ProductPrice.innerHTML;
 var ProductDescription_data=ProductDescription.innerHTML;
 

 ProductInventory.innerHTML="<input type='text' id='ProductInventory_text'"+no+"'value='"+ProductInventory_data+"'>";
 ProductPrice.innerHTML="<input type='text' id='ProductPrice_text'"+no+"'value='"+ProductPrice_data+"'>";
 ProductDescription.innerHTML="<input type='text' id='ProductDescription_text'"+no+"'value='"+ProductDescription_data+"'>";
 

}

function save_row(no)
{
    var ProductInventory_val=document.getElementById("ProductInventory_text"+no).value;
    var ProductPrice_val=document.getElementById("ProductPrice_text"+no).value;
    var ProductDescription_val=document.getElementById("ProductDescription_text"+no).value;
    
    document.getElementById("ProductInventory_row"+no).innerHTML=ProductInventory_val;
    document.getElementById("ProductPrice_row"+no).innerHTML=ProductPrice_val;
    document.getElementById("ProductDescription_row"+no).innerHTML=ProductDescription_val;
    
   
    document.getElementById("edit_button"+no).style.display="block";
    document.getElementById("save_button"+no).style.display="none";

}

function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}

function add_row()
{
    var new_ProductInventory=document.getElementById("new_ProductInventory").value;
    var new_ProductPrice=document.getElementById("new_ProductPrice").value;
    var new_ProductDescription=document.getElementById("new_ProductDescription").value;
    
       
    var table=document.getElementById("data_table");
    var table_len=(table.rows.length)-1;
    var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td></td><td></td><td></td><td id='ProductInventory_row"+table_len+"'>"+new_ProductInventory+"</td><td id='ProductPrice_row"+table_len+"'>"+new_ProductPrice+"</td><td id='ProductDescription_row"+table_len+"'>"+new_ProductDescription+"</td><td><input type='button' class='editbtn' id='edit_button"+table_len+"' value='Edit' class='edit' onclick='edit_row("+table_len+")'> <input type='button' class='savebtn' id='save_button"+table_len+"' value='Save' class='save' onclick='save_row("+table_len+")'> <input type='button' class='deletebtn' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td></tr>";
   
    document.getElementById("new_ProductPrice").value="";
    document.getElementById("new_ProductDescription").value="";
    document.getElementById("new_ProductInventory").value="";

}