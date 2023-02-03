

const register_view_btn = document.querySelector(".register");
const register_container = document.querySelector(".sign_up_container");
const close = document.querySelector(".close");

register_container.classList.add("hidden");


register_view_btn.addEventListener("click" ,function()
{
    register_container.classList.remove("hidden");
 
})

close.addEventListener("click" ,function()
{
    register_container.classList.add("hidden"); 
    
})

// ---------------------end of registration----------------------------------

