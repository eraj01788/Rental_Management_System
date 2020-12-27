function loginValid()
        {

            var userType = document.querySelector('input[name = "UserType"]:checked');
            var userName=document.getElementById("username").value;
            var pass=document.getElementById("pass").value;

            if(userType != null)
            {
                if (userName==""||pass=="")
                {
                    alert("Must Fill All The Fields");
                }
            } 
            else
            {
             alert("Check User Type"); 
            }   
        }

        