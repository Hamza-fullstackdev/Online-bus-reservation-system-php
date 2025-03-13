let profilepic=document.querySelector("img")
let btn=document.getElementById("image")

btn.addEventListener("change",()=>{
   if(btn.files&&btn.files[0]){
      const reader=new FileReader();
      reader.onload=function(e){
         profilepic.src=e.target.result
      }
      reader.readAsDataURL(btn.files[0])
      }
})

const selectimage=()=>{
   btn.click();
}