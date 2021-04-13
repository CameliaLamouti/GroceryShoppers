//initializing input fields

function send()
    {
        var OrderNumber = document.getElementById("orderNumber").value;
        var FirstName = document.getElementById("firstName").value;
        var LastName = document.getElementById("lastName").value;
        var EmailAddress = document.getElementById("emailAddress").value;
        var PhoneNumber = document.getElementById("phoneNumber").value;
        
        if (OrderNumber!= "" && FirstName!= "" && LastName!= "" && EmailAddress!= "" && PhoneNumber!= ""){
            if (OrderNumber==OrderNumber){
              if (FirstName==FirstName){
                  if (LastName == LastName){
                    if(EmailAddress == EmailAddress){
                        if(PhoneNumber == PhoneNumber){
                            
                            alert("You Have Succesfully sent a suggestion form!");
                                
                            }
                        }
                    }
                }
              }
            }
            else{
                alert("Please fill in all required fields.");
              }
          }
         
        
    

    function validateEmail(){
        const email = document.getElementById("email");
        if(!containsCharacters(email, 5)) {
          alert("Please Enter A Valid Email");
        }
      }
      
      
      function containsCharacters(field, code){
        let regEx;
        switch(code){
            case 1:
                //letters
                regEx = /(?=.*[a-zA-Z])/;
                return matchWithRegEx(regEx, field, 'Must contain at least one letter');
      
            case 2:
                //letters and numbers
                regEx = /(?=.*\d)(?=.*[a-zA-Z])/
                return matchWithRegEx (regEx, field, 'Must contain at least one letter and one number');
      
            case 3:
                //one upper and lower case and number 
                regEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/
                return matchWithRegEx(regEx, field, 'Must contain at least one uppercase, one lowercase and one number');
      
            case 4:
                //upper lower special char and numb 
                regEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/
                return matchWithRegEx(regEx, field, 'Must contain at least one uppercase, one lowercase, one number and a special character');
      
            case 5:
                //Email pattern 
                regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                return matchWithRegEx(regEx, field, 'Must be a valid email address');
            default:
                return false;
        }
      }
      
      function matchWithRegEx(regEx, field, message){
        if(field.value.match(regEx)){
            return true;
        } else{
            return false;
        }
      }
