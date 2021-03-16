$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
	
 var firstName=document.getElementById("firstName_row"+no);
 var lastName=document.getElementById("lastName_row"+no);
 var email=document.getElementById("email_row"+no);
 var orderNb=document.getElementById("orderNb_row"+no);
 var costPre=document.getElementById("costPre_row"+no);
 var costPost=document.getElementById("costPost_row"+no);
 var orderSum=document.getElementById("orderSum_row"+no)
	
 var firstName_data=firstName.innerHTML;
 var lastName_data=lastName.innerHTML;
 var email_data=email.innerHTML;
 var orderNb_data=orderNb.innerHTML;
 var costPre_data=costPre.innerHTML;
 var costPost_data=costPost.innerHTML;
 var orderSum_data=orderSum.innerHTML;
  
	
 firstName.innerHTML="<input type='text' id='firstName_text"+no+"' value='"+firstName_data+"'>";
 lastName.innerHTML="<input type='text' id='lastName_text"+no+"' value='"+lastName_data+"'>";
 email.innerHTML="<input type='text' id='email_text"+no+"' value='"+email_data+"'>";
 orderNb.innerHTML="<input type='text' id='orderNb_text"+no+"' value='"+orderNb_data+"'>";
 costPre.innerHTML="<input type='text' id='costPre_text"+no+"' value='"+costPre_data+"'>";
 costPost.innerHTML="<input type='text' id='costPost_text"+no+"' value='"+costPost_data+"'>";
 orderSum.innerHTML="<input type='text' id='orderSum_text"+no+"' value='"+orderSum_data+"'>";

}

function save_row(no)
{
 var firstName_val=document.getElementById("firstName_text"+no).value;
 var lastName_val=document.getElementById("lastName_text"+no).value;
 var email_val=document.getElementById("email_text"+no).value;
 var orderNb_val=document.getElementById("orderNb_text"+no).value;
 var costPre_val=document.getElementById("costPre_text"+no).value;
 var costPost_val=document.getElementById("costPost_text"+no).value;
 var orderSum_val=document.getElementById("orderSum_text"+no).value;

 document.getElementById("firstName_row"+no).innerHTML=firstName_val;
 document.getElementById("lastName_row"+no).innerHTML=lastName_val;
 document.getElementById("email_row"+no).innerHTML=email_val;
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
 var new_firstName=document.getElementById("new_firstName").value;
 var new_lastName=document.getElementById("new_lastName").value;
 var new_email=document.getElementById("new_email").value;
 var new_orderNb=document.getElementById("new_orderNb").value;
 var new_costPre=document.getElementById("new_costPre").value;
 var new_costPost=document.getElementById("new_costPost").value;
 var new_orderSum=document.getElementById("new_orderSum").value;
	
 var table=document.getElementById("data_table");
 var table_len=(table.rows.length)-1;
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='firstName_row"+table_len+"'>"+new_firstName+"</td><td id='lastName_row"+table_len+"'>"+new_lastName+"</td><td id='email_row"+table_len+"'>"+new_email+"</td><td><input type='button' class='editbtn' id='edit_button"+table_len+"' value='Edit' class='edit' onclick='edit_row("+table_len+")'> <input type='button' class='savebtn' id='save_button"+table_len+"' value='Save' class='save' onclick='save_row("+table_len+")'> <input type='button' class='deletebtn' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td></tr>";
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='orderNb_row"+table_len+"'>"+new_orderNb+"</td><td id='costPre_row"+table_len+"'>"+new_costPre+"</td><td id='costPost_row"+table_len+"'>"+new_costPost+"</td><td id='orderSum_row"+table_len+"'>"+new_orderSum+"</td><td><input type='button' class='editbtn' id='edit_button"+table_len+"' value='Edit' class='edit' onclick='edit_row("+table_len+")'> <input type='button' class='savebtn' id='save_button"+table_len+"' value='Save' class='save' onclick='save_row("+table_len+")'> <input type='button' class='deletebtn' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td></tr>";

 document.getElementById("new_firstName").value="";
 document.getElementById("new_lastName").value="";
 document.getElementById("new_email").value="";
 document.getElementById("new_orderNb").value="";
 document.getElementById("new_costPre").value="";
 document.getElementById("new_costPost").value="";
 document.getElementById("new_orderSum").value="";
}

document.getElementsByClassName('price').innerHTML = 12;