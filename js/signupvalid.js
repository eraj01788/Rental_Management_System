function validateForm()
{
var pass=document.getElementById("pass").value;
var conPass=document.getElementById("conPass").value;
var userType = document.querySelector('input[name = "UserType"]:checked');
var fName=document.getElementById("fname").value;
var uEmail=document.getElementById("email").value;
var userName=document.getElementById("username").value;
var contactNumber=document.getElementById("contactnumber").value;
var userAddress=document.getElementById("useraddress").value;
var uGender = document.querySelector('input[name = "gender"]:checked');


if(userType != null)
{
   if(fName==""||uEmail==""||userName==""||contactNumber==""||userAddress==""||uGender==null)
   {
    alert("Must Fill All The Fields");
   }
   else
   {
    
    ValidateEmail(uEmail);
    ValidateLetter(fName);
   }
} 
else
{
  alert("Check User Type"); 
}  

if (pass!=conPass)
{
  alert("Password Didn't Match");
}

}

function ValidateEmail(mail) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail))
  {
    return (true)
  }
  else
  {
    alert("You have entered an invalid email address!")
    return (false)
  }
    
}

function ValidateLetter(txt)
  {
   var letters = /^[A-Za-z ]+$/;
   if(txt.match(letters))
     {
      return true;
     }
   else
     {
     alert("Only Letter and white space");
     return false;
     }
  }
