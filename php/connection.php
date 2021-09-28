<?php
$conn = mysqli_connect("localhost","root","","ChatMe");
if(!$conn){
//     mysqli_connect_error()
// The error description from the last connection error
echo "An error occured in Database connection .." .mysqli_connect_error();
}else{
   
    //  echo "Succesfully connecting to database.......";
 }
?> 