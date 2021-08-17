<?php
$conn = mysqli_connect("localhost","root","","chatme");
if(!$conn){
//     mysqli_connect_error()
// The error description from the last connection error
echo "Database connection successful...." .mysqli_connect_error();
// }else{
//     echo "error connecting to database";
 }
?> 