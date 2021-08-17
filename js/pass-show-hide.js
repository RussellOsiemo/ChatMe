const pswrdField=document.querySelector (".form  input[type='password']"),
toggleBtm =document.querySelector(".form .field i");
toggleBtm.onclick =()=>{
        if(pswrdField.type == "password"){
         pswrdField.type = "text";
          toggleBtm.classList.add("active");
     }else{
        pswrdField.type="password";  
     toggleBtm.classList.remove("active");
 }
}