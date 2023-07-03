const pass = document.getElementById("pass");
const checkbox = document.getElementById("Show_pass");
pass.addEventListener("click",pass_check);
function pass_check(){
if (checkbox.checked)
    {
        pass.setAttribute("type","text");
    }
    else{
        pass.setAttribute("type","password");  
    }
}
 checkbox.addEventListener('change',clicked_box);
 function clicked_box()
 {
    if (checkbox.checked)
    {
        pass.setAttribute("type","text");
    }
    else{
        pass.setAttribute("type","password");  
    }
 }