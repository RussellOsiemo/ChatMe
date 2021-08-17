const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");
form.onSubmit = (e)=>{
    e.preventDefault();//prevent form from submitting
}
continueBtn.onclick = ()=>{
    //Starting ajax
    let xhr =new XMLHttpRequest();//Creating XML object
   xhr.open("POST","php/signup.php",true);//passing parameters pass method,url and assync
   xhr.onload = ()=>{
     if(xhr.readyState === XMLHttpRequest.DONE){
         if(xhr.status == 200){
             let data = xhr.response;//gives the response of that passed url
             console.log(data); 
         }
     }
   }
   //sending form data to php using ajax
   let formData = new formData();//creating new formData object
xhr.send(formData);//sending form data to php

}