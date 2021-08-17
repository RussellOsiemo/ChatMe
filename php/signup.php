<?php
include_once "connection.php";
$fname=mysqli_real_escape_string($conn, $_POST['fname']);
// mysqli_real_escape_string()
// Escapes special characters in a string for use in an SQL statement
$lname=mysqli_real_escape_string($conn, $_POST['lname']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$password=mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
// check if user email is valid
if(filter_var($email, FILTER_VALIDATE__EMAIL));{//if email is valid
//check if email already exists
$sql=mysqli_query($conn,"SELECT email FROM users WHERE email='{$email}'" );
if(mysqli_num_rows($sql) > 0 ){
    //if email already exists
    echo "$email - This email already exists! ";
}else{
    //let's check user upload file or not
    if(isset($_FILES['image'])){
        //if file is uploaded
        $img_name = $_FILES['image']['name'];//getting user uploaded img name
        $img_type = $_FILES['image']['type'];//getting type of img user uploaded   
        $tmp_name = $_FILES['image']['tmp_name'];//is temporary name used to save the image in our folder
   
        //let's explode the image and get the last extenxion as jpg or png 
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);//here we get the extension of the uploaded file
        $extension = ['png','jpeg','jpg'];//these are valid extensions which we'll store in an array
         if(in_array($img_ext,$extension)=== true){//if the uploaded file has any of the extensions in our array
          $time= time();//will return current time
          //we read this time because we need the time in naming uploaded images with tmp_name
          //so all the img files will be unique in naming
          

          //we need to save the images in a particular folder

         
          $new_img_name= $time_img_name;
          if(move_uploaded_file($tmp_name , "image/".$new_img_name)){//if user uploads img move to image folder
            $status = "Active Now";//whenever user has signed in the status will be active now
            $random_id = rand(time(), 10000000);//creating random id for users


            //let's insert all user data to a table in db
            $sql2 = mysqli_query($conn, "INSERT INTO users( unique_id, fname, lname, email,password, image,status )"
              VALUES())
          }
           
        }else{
             echo "select an image file with valid extensions .jpg ,.jpeg or .png";
         }
    }else{
                echo "Please select an image file!";
            }
}
}
else{
    echo "$email-this email address is invalid ";
}
}else{
    echo "All Input Fields need to be filled out";
}
?> 