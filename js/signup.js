const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");
errorText = form.querySelector(".error-txt");
form.onSubmit = (e)=>{
    e.preventDefault();//prevent form from submitting pre existing values or empty

}
continueBtn.onclick = ()=>{
    //Starting ajax
    let xhr =new XMLHttpRequest();//Creating XML object
   xhr.open("POST","php/signup.php",true);//passing parameters pass method,url and assync
   xhr.onload = ()=>{
     if(xhr.readyState === XMLHttpRequest.DONE){
         if(xhr.status == 200){
             let data = xhr.response;//gives the response of that passed url
             if(data == "success"){

             }else{
                  errorText.style.display = "block";
                  errorText.textContent = data
             }
         }
     }
   }
   //sending form data to php using ajax
   let formData = new FormData();//creating new formData object
xhr.send(formData);//sending form data to php

}