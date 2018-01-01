<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <meta charset="UTF-8">
    <title>My Travels</title>
    
    <style>
        .body3
    {
    background: url("images/image2.jpg") center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height:100%;
         padding-bottom:20px;


}






        .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 18px 64px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 10px 5px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
            border-radius: 10px;
}

        .button3 {
    background-color: rgba(70, 113, 148, 0.35);
    color: white;
    border: 2px solid rgba(141, 114, 255, 0.95);
}

.button3:hover {
    background-color: rgba(141, 114, 255, 0.95);
    color: black;
}
.button2 {
    background-color: rgba(70, 113, 148, 0.35);
    color: white;
    border: 2px solid rgba(0, 202, 7, 0.82);
}

.button2:hover {
    background-color:rgba(0, 202, 7, 0.82);
    color: black;

}
@media only screen and (max-width: 500px) {
    .main_text{
            font-size:30px;
            color:ghostwhite;
            margin-top:15%;
        }
    }

    .main_text {
        font-size: 30px;
        color: ghostwhite;
        margin-top: 13%;
    }

        #footer {
            color:cyan;
   position:fixed;
            padding-top: 10px;
   bottom:0;
   width:100%;
   height:45px;   /* Height of the footer */
   background:rgba(25, 38, 54, 0.63);
            font-size:16px;
            text-decoration: none;

}
        #footer:hover{
            position:fixed;
            padding-top: 10px;
   bottom:0;
   width:100%;
   height:45px;   /* Height of the footer */
   background:rgba(55, 86, 120, 0.63);
            font-size:16px;
            text-decoration: none;
        }
.navbar {

    height:20px;
   background-color: transparent;
    background: transparent;
   border-color: transparent;
}

.reg:hover{
    background-color: white;
    height:50px;
    border-radius: 5px;
}
.navbar li { color: #000 }

    </style>
    
</head>
<body class="body3">

<nav class="navbar  navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="" style="margin-top:2%;">&nbsp&nbsp&nbsp&nbsp&nbsp<b> <font size="30" face="Monotype Corsiva">My Travels</font></b></a>
    </div>

    
  </div>
</nav>
<div class="cols-xs-3 ">

<div class=" container">

    <center>

        <div class="main_text">
           Make your own destiny. Book and manage your trips here.
        </div>
        <a href="login-form.php"><button class="button button3"><b>Login </b></button></a>&nbsp;
        <a href="register-form.php">    <button class="button button3"><b>Register</b></button></a></center>

</div>
</div>

<div id="footer">
    <center><p id="legal">Copyright &copy; 2016 - My Travels.  </p></center>
</div>


</body>
</html>