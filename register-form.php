<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
        #jumbo_log{
            width:500px;
            height:620px;
            background-color:#e8fcff;
        }
         select,input[type=text],input[type=password],input[type=email] {
            background: white;
            border: 1px solid #DDD;
            border-radius: 5px;
            box-shadow: 0 0 5px #DDD inset;
            color: #666;
            outline: none;
            height: 25px;
            width: 220px;

        }
        select:focus,input[type=text]:focus,input[type=password]:focus,input[type=email]:focus{
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
            background: url("images/image3.jpg") ;
            background-repeat: no-repeat;
            background-size: 100%;
            opacity: 0.9;
            filter:alpha(opacity=80);
            height:100%;
            width:100%;
            z-index:0.1;
        }
    </style>
    <script type="text/javascript">
      function vpass()
      {

        var p1=document.getElementById('password').value;
        var p2=document.getElementById('repassword').value;

        if(p1.localeCompare(p2)!=0)
        {
          alert("Passwords do not match ");
          document.getElementById('password').focus();
         
        }
        
      }
      function RestrictInt(val)
         {
                if(isNaN(val)){
                val = val.substring(0, val.length-1);
                document.frm.phone.value = val;
                return false;
            }
            return true;
        }
        function validateno(){
            var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
            pno=frm.phone.value;

            if(pno.match(phoneno)) {

                document.getElementById('error').innerHTML="";
                return true;
            }
            else {

                
                document.getElementById('error').innerHTML="<font color=red>&nbsp&nbsp&nbsp&nbspInvalid Contact Number Please Enter valid Number</font>";

                return false;
            }
        }

    </script>

</head>
<body id="backgroundImage"  OnLoad="document.myform.id_username.focus();"><br>
<form  action="register.php" method="POST" name="frm"> 

    <center>
    <div class="jumbotron" id="jumbo_log">
        <div class="container">
            <h1><span class="glyphicon glyphicon-user"></span>&nbsp&nbspSign-up</h1>
            <table class="table table-hover table-responsive">
            <tr>
  <th>Name:</th>
  <td><input id="name" name="name" placeholder="First and last name" required=""  type="text"> </td>
</tr>
<tr>
  <th>Email:</th>
  <td><input id="email" name="email" placeholder="example@domain.com" required="" type="email"> </td>
</tr>
            <tr>
  <th>Username:</th>
  <td><input id="username" name="username" placeholder="username" required=""  type="text"> </td>
</tr>
<br>
<tr>
  <th>Password:</th>
  <td><input type="password" id="password" name="password" required=""> </td>
</tr>
<br>
<tr>
  <th>Confirm password:</th>
  <td><input type="password" id="repassword" name="repassword" onblur="vpass()" required=""> <div id="perror"></div></td>
</tr>
<tr>
  <th>Gender:</th>
  <td><input type="radio" name="gender" required>male &nbsp&nbsp <input type="radio" name="gender" required>female</td>
</tr>
<br>

<tr>
  <th>Date of Birth:</th>
  <td>
      <select name="BirthMonth" required="" style="width:100px;">
      <option value="">Month</option>
                  <option value="01">January</option>
                  <option value="02">February</option>
                  <option value="03" >March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12" >December</option>
                  
                 </select>    
                <input type="text" maxlength="2" name="BirthDay"  placeholder="Day" required="" style="width:50px;">
                <input type="text"  maxlength="4" name="BirthYear" placeholder="Year" required="" style="width:60px;">
  </td>
</tr>
<br>
<tr>
  <th>Phone No:</th>
  <td><input id="phone" name="phone" placeholder="phone number" required="" type="text" onkeyup="return  RestrictInt(this.value)" onblur="validateno()"></td>
</tr>
                <tr>
                    <td colspan="3" align="center"> <input class="btn btn-primary" type="submit" value="Register"></td>
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