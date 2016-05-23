<?php
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
  <title>Sign Up</title>
  <link href='css/sign.css' rel='stylesheet' type='text/css'>
   <script src="jquery-1.12.1.min.js"></script> 
  <script type="text/javascript">
    $(document).ready(function(){
      $("#reg").click(function(){

        var e1 = "",
            e2 = "",
            e3 = "",
            e4 = "",
            e5 = "";
        var bool = false;
        var name = $("#name").val();
        var sname = $("#sname").val();
        var pass = $("#pass").val();
        var city = $("#city").val();
        var login = $("#login").val();

        if(name == false){
          e1 = "Please fill";
          bool = true;
        }

        if(sname == false){
          e2 ="Please fill";
          bool = true;
        }
        if(pass == false){
          e3 = "Please fill";
          bool = true;
        }
        else if(pass.length < 7){
          e3 = "Can't be less than 8!";
          bool = true;

        }
        if(city == false){
          e4 = "Please fill";
          bool = true;
        }
        if(login == false){
          e5 = "Please fill";
          bool = true;
        }

        $("#e1").text(e1);
        $("#e2").text(e2);
        $("#e3").text(e3);
        $("#e4").text(e4);
        $("#e5").text(e5);

        if (!bool){
          $.ajax({
            url:"register.php",
            type:"post",
            data:({name:name,surname:sname,password:pass,city:city, login:login}),
            dataType:"html",
            success:function(data){
              
              if(data == "9"){
                console.log(123);
        
                $("#e5").text("This login already exist!");

              }

              else if (data == "5"){
                document.location.replace("sign.php");
              }
            }
          });
        } 
      });


  $("#log").click(function(){

        var el1 = "",
            el2 = "";
        var bool = false;
        var pass = $("#password").val();
        var login = $("#login2").val();
        if(pass == false){
          el2 = "dsjadhka";
          bool = true;
        }
        
        if(login == false){
          el1 = "dsjadhka";
          bool = true;
        }

        $("#el1").text(el1);
        $("#el2").text(el2);

        if (!bool){
          $.ajax({
            url:"login.php",
            type:"post",
            data:({password:pass, login:login}),
            dataType:"html",
            success:function(data){
              
              if(data == "9"){
        
                $("#el1").text("User doesn't exist!");

              }
              else if (data == "5"){
                $("#el2").text("Password is incorrect!");
              }
              else if (data == "1"){
                document.location.replace("sign.php");
              }
            }
          });
        } 
      });


    });
  </script>
</head>

<body>
    <?php include("includes/header.php"); ?>
<?php


if(!isset($_SESSION['login']) || !isset($_SESSION['id']))
{
?>

    <div class="pop">
<form action="register.php" method="POST" class='reg'>

              <h3>Registration</h3>
            Name: <br> <input type="text" id="name" name="name"><span id = "e1"></span></br>
           
     
            Surname: <br> <input type="text" id="sname" name="surname"><span id = "e2"></span></br>
            
    
            Password: <br> <input type="password" id="pass" name="password"><span id = "e3"></span></br>
           
    
            City:<br> <input type="text" id="city" name="city"><span id = "e4"></span></br>
            
        Login: <br> <input type="text" id="login" name="login"><span id = "e5"></span></br>
            


  
            <input type="button" value='Sign Up' id = "reg">
        </form>
 
<form action="login.php" method="POST">
<h3>Login</h3>
Login: <br> <input type="text" id="login2"><span id = "el1"></span>
<br>
Password: <br> <input type="password" id="password"><span id = "el2"></span>
<br>
<input type="button" value="Sign In" id = "log">
</form>

<?php
}


if(isset($_SESSION['login']) && isset($_SESSION['id']))
{
 
    include("bd.php");
    $user=$_SESSION['login'];
    $res=mysql_query("SELECT * FROM `users` WHERE `login`='$user' ");
    $user_data=mysql_fetch_array($res);

    echo "<div class='pop' id='inf'>" ;
    echo "<center>";
    echo "Your login: <b>". $user_data['login']."</b><br>";
    echo "Your name: <b>". $user_data['name']."</b><br>";
    echo "Your surname: <b>". $user_data['surname']."</b><br>";
    echo "Your location: <b>". $user_data['city']."</b><br>";
    echo "<a href='exit.php' class='butt'>Exit</a>";
    echo "</center>";
    echo "</div >" ;
}
?>
</div>
 <?php include("includes/footer.php"); ?>
</body>

</html>


