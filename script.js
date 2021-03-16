const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
})


/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

function calculate() {
  var applesqty = document.getElementById("applesqty").value;
  var beefqty = document.getElementById("beefqty").value;
  var shrimpqty = document.getElementById("shrimpqty").value;

  document.getElementById("applestot").innerHTML = "$"+applesqty*0.79;
  document.getElementById("beeftot").innerHTML = "$"+beefqty*10.00;
  document.getElementById("shrimptot").innerHTML = "$"+shrimpqty*13.99;

  var subtotal = "$"+(applesqty*0.79 + beefqty*10 + shrimpqty*13.99).toFixed(2);
  var nbitems = parseInt(applesqty)+parseInt(beefqty)+parseInt(shrimpqty);
  var qst = "$"+((applesqty*0.79 + beefqty*10 + shrimpqty*13.99)*0.09975).toFixed(2);
  var gst = "$"+((applesqty*0.79 + beefqty*10 + shrimpqty*13.99)*0.05).toFixed(2);
  var total = "$"+((applesqty*0.79 + beefqty*10 + shrimpqty*13.99)+((applesqty*0.79 + beefqty*10 + shrimpqty*13.99)*0.09975)+((applesqty*0.79 + beefqty*10 + shrimpqty*13.99)*0.05)).toFixed(2);

  document.getElementById("subtotal").innerHTML = subtotal;
  document.getElementById("nbitems").innerHTML = nbitems;
  document.getElementById("qst").innerHTML = qst;
  document.getElementById("gst").innerHTML = gst;
  document.getElementById("total").innerHTML = total;
}
/*Sign In/Sign Up*/

function resetClass(element, classname){
  element.classList.remove(classname);
}
document.getElementsByClassName("show-signup")[0].addEventListener("click",function(){
  let form = document.getElementsByClassName("form")[0];
  resetClass(form, "signin");
  resetClass(form, "reset");
  form.classList.add("signup");
  document.getElementById("submit-btn").innerText = "Sign Up";
});
document.getElementsByClassName("show-signin")[0].addEventListener("click",function(){
  let form = document.getElementsByClassName("form")[0];
  resetClass(form, "signup");
  resetClass(form, "reset");
  form.classList.add("signin");
  document.getElementById("submit-btn").innerText = "Sign In";
});
document.getElementsByClassName("show-reset")[0].addEventListener("click",function(){
  let form = document.getElementsByClassName("form")[0];
  resetClass(form, "signup");
  resetClass(form, "signin");
  form.classList.add("reset");
  document.getElementById("submit-btn").innerText = "Reset password";
});

/*Password Reset*/
function resetPassword(){
  var email = document.getElementById("email").value;
  var newpass = document.getElementById("newpass").value;
  var confirmpass = document.getElementById("confirmpass").value;
  var output;
  if (email!="" && newpass!= "" && confirmpass!= ""){
      if (newpass==confirmpass){
        output=("Success! Your Password Has Been Reset.");
      }
      else {
        output=("New Password And Confirmed Password Do Not Match.");
      }
  }
  else{
    output=("All Fields Are Required.");
  }
  document.getElementById("writing").innerHTML = output;

}

function createAccount(){
  var firstname = document.getElementById("firstname").value;
  var lastname = document.getElementById("lastname").value;
  var email = document.getElementById("email").value;
  var confirmemail = document.getElementById("confirmemail").value;
  var pass = document.getElementById("pass").value;
  var confirmpass = document.getElementById("confirmpass").value;
if(document.getElementById("checkbox").checked){
  if (firstname!= "" && lastname!= "" && email!= "" && confirmemail!= "" && pass!= "" && confirmpass!= ""){
    if (email==confirmemail){
      if (pass==confirmpass){
        alert("You Have Succesfully Created An Account!");
      }
      else{
        alert("Your Password And Confirm Password Do Not Match.")
      }
    }
    else{
      alert("Your Email And Confirm Email Do Not Match.")
    }
  }
  else{
    alert("Please fill in all required fields.")
  }
}
else{
  alert("You Must Agree To The Terms And Conditions.")
}
}
