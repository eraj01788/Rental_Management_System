function cngPass()
{
    var email=document.getElementById("emailtxt").value;
    var pass=document.getElementById("passtxt").value;
    var con_pass=document.getElementById("conpasstxt").value;
    var userType = document.querySelector('input[name = "UserType"]:checked');


    if(userType != null)
    {
        if(email==""||pass==""||con_pass=="")
        {
            alert("Must fill all the fields");
        }
        else
        {
                if(ValidateEmail(email))
                {
                    if (pass!=con_pass)
                    {
                     alert("Password Didn't Match");
                    }
                    else
                    {
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                    
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("mytext").innerHTML = this.responseText;
                        }
                        else
                        {
                            document.getElementById("mytext").innerHTML = this.status;
                        }
                        };
                        xhttp.open("POST", "/MyCode/Project/control/forgotpasscontrol.php", true);   
                        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        xhttp.send("email="+email+ "&pass="+pass+ "&userType="+userType.value);
                    }  
                }
            
        }
    }
    else
    {
        alert("Check User Type"); 
    }
    
}


function ValidateEmail(mail) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}