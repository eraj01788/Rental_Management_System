function sellerupdatepass()
{
    var x = document.getElementById('uppas');
  if (x.style.display === 'block') {
    x.style.display = 'none';
  } else {
    x.style.display = 'block';
  }
}    

function savepassvalid()
{
    var pass=document.getElementById("pass").value;
    var connpass=document.getElementById("conpass").value;
    if(pass==""||connpass=="")
    {
        alert("Fill All The Fields");
    }
    else
    {
        if(pass!=connpass)
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
              xhttp.open("POST","/MyCode/Project/control/sellerpassupdatecontrol.php", true);   
              xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xhttp.send("pass="+pass);
            //alert('Password Updated');
        }
    }
}