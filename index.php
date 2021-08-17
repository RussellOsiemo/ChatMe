<!DOCTYPE>
<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ChatME</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.css">
        <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
        <link rel="stylesheet" href="font-awesome-4.7.0\fonts">
        <link rel="stylesheet" href="font-awesome-4.7.0">
    </head>
    <body>
        <div class="wrapper">
        <section class="form signup" >
            <header>Chat With Fellow Programmers </header>
            <form  action="#">
<div class="error-txt">This is an error message!</div>
     <div class="name-details">
         <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First Name" required >
            </div>
                <div class="field input">
                <label>Last Name</label>
                <input type="text" name="lname" placeholder="Last Name" required >                                                                                                                         
            </div>
        </div>
                <div class="field input">
                <label >Email Address</label>
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
    
                <div class="field input">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your Password" required>
                <i  class="fa fa-eye"></i>
            </div>
                <div class="field image">
                <label style="color: black;" >Select profile picture</label>
                <input type="file" name="image" style="color: black;" required >
                    </div>
            <div class="field button">
           <input type="submit" value="Sign up to Connect">
        </div>
           
           <div class="link">Already a member ? <a href="login.html">Login Now</a></div>
        </div>

        </div>
        
            </form>
           
        </section>
       
    </div>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>    
</body>
    </html>
</html>