let buttons=document.querySelectorAll("button");
buttons.forEach((button)=>{
    button.addEventListener("click",(e)=>{
        button.setAttribute('disabled','true')
        let seats=document.getElementById("seats")
        seats.value+=e.target.innerHTML+ " ";
    })
})