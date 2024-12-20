let show = document.getElementById("show")
let password = document.getElementById("password")

show.onclick = function()
{
    if(password.type=="password")
    {
        password.type = "text";
        show.text = "Hide";
    }
    else{
        password.type = "password";
        show.text = "Show";
    }
}