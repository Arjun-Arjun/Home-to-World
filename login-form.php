<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
        #jumbo_log{
            width:500px;
            height:360px;
            background-color:#e8fcff;
        }
         input[type=text],input[type=password] {
            background: white;
            border: 1px solid #DDD;
            border-radius: 5px;
            box-shadow: 0 0 5px #DDD inset;
            color: #666;
            outline: none;
            height: 25px;
            width: 180px;

        }
        input[type=text]:focus,input[type=password]:focus{
        box-shadow: 0 0 5px rgba(81, 203, 238, 1);

         border: 1px solid rgba(81, 203, 238, 1);
    }
        a:hover{
            text-decoration: none;
        }
        .jumbotron {

            border-radius: 25px;
        }


        #float{
            position:absolute;
            top:42%;
            left:-17px;
            background-color:lightblue;
            transform:rotate(270deg);
            border-radius:12px;
        }
        #f{
            background-color:#008CBA;
            border-radius:12px;
            transition-duration: 0.4s;
        }
        #f:hover{
            background-color:white;
            color:#008CBA;
            border-radius:15px;

        }
        #backgroundImage {
            background: url("images/image3.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            opacity: 0.9;
            filter:alpha(opacity=80);
            height:100%;
            width:100%;
            z-index:0.1;
        }
    </style>
</head>
<body id="backgroundImage"  OnLoad="document.myform.id_username.focus();"><br><br><br><br><br>
<form  method="post" name="myform" action="login.php">
    <center>
    <div class="jumbotron" id="jumbo_log">
        <div class="container">
            <h1><span class="glyphicon glyphicon-user"></span>&nbsp&nbspLog-In</h1>
            <table class="table table-hover table-responsive">
            <tr><td colspan=2 align=center> <input type="radio" name="type" value="user" checked>&nbsp&nbsp<b>User</b> &nbsp&nbsp <input type="radio" name="type" value="admin">&nbsp&nbsp<b>Admin</b>
            <tr>
    <th>username:</th>
    <td><input type="text" name="inputtext1"></td>
  
</tr>
<tr>
  <th>password:</th>
  <td><input type="password" name="inputtext2"></td>
</tr>
                <tr>
                    <td colspan="3" align="center"> <input class="btn btn-primary" type="submit" value="Login"></td>
                </tr>
            </table>

        </div>
    </div>
    <div id="float">
        <a id="f" class="btn btn-primary btn-lg" href="index.php">Home</a>
    </div>
    </center>
</form>
</body>
</html>