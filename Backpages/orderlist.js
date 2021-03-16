$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
	
 var orderNb=document.getElementById("orderNb_row"+no);
 var costPre=document.getElementById("costPre_row"+no);
 var costPost=document.getElementById("costPost_row"+no);
 var orderSum=document.getElementById("orderSum_row"+no)

 var orderNb_data=orderNb.innerHTML;
 var costPre_data=costPre.innerHTML;
 var costPost_data=costPost.innerHTML;
 var orderSum_data=orderSum.innerHTML;
  
	
 orderNb.innerHTML="<input type='text' id='orderNb_text"+no+"' value='"+orderNb_data+"'>";
 costPre.innerHTML="<input type='text' id='costPre_text"+no+"' value='"+costPre_data+"'>";
 costPost.innerHTML="<input type='text' id='costPost_text"+no+"' value='"+costPost_data+"'>";
 orderSum.innerHTML="<input type='text' id='orderSum_text"+no+"' value='"+orderSum_data+"'>";

}

function save_row(no)
{
 var orderNb_val=document.getElementById("orderNb_text"+no).value;
 var costPre_val=document.getElementById("costPre_text"+no).value;
 var costPost_val=document.getElementById("costPost_text"+no).value;
 var orderSum_val=document.getElementById("orderSum_text"+no).value;

 document.getElementById("orderNb_row"+no).innerHTML=orderNb_val;
 document.getElementById("costPre_row"+no).innerHTML=costPre_val;
 document.getElementById("costPost_row"+no).innerHTML=costPost_val;
 document.getElementById("orderSum_row"+no).innerHTML=orderSum_val;

 document.getElementById("edit_button"+no).style.display="block";
 document.getElementById("save_button"+no).style.display="none";
}

function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}

function add_row()
{
 var new_orderNb=document.getElementById("new_orderNb").value;
 var new_costPre=document.getElementById("new_costPre").value;
 var new_costPost=document.getElementById("new_costPost").value;
 var new_orderSum=document.getElementById("new_orderSum").value;
	
 var table=document.getElementById("data_table");
 var table_len=(table.rows.length)-1;
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='orderNb_row"+table_len+"'>"+new_orderNb+"</td><td id='costPre_row"+table_len+"'>"+new_costPre+"</td><td id='costPost_row"+table_len+"'>"+new_costPost+"</td><td id='orderSum_row"+table_len+"'>"+new_orderSum+"</td><td><input type='button' class='editbtn' id='edit_button"+table_len+"' value='Edit' class='edit' onclick='edit_row("+table_len+")'> <input type='button' class='savebtn' id='save_button"+table_len+"' value='Save' class='save' onclick='save_row("+table_len+")'> <input type='button' class='deletebtn' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td></tr>";

 document.getElementById("new_orderNb").value="";
 document.getElementById("new_costPre").value="";
 document.getElementById("new_costPost").value="";
 document.getElementById("new_orderSum").value="";
}