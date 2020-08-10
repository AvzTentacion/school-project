<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

       <style>
           h3{
               text-align: center;
           }
           form{
               display: inline-block;
               background-color: rgb(0,100,200);
               width: 35%;
               padding: 50px;
               border-radius: 20px;
           }
           label{
               color: white;
               text-align: center;
           }
           button{
            color: white;
               
           }
           span{
               color: white;
           }
       </style>

       <title>Khwezi Lomso | Login</title>
</head>
<body>
    <?php require_once('navbar.php')?>
    <h3>Login</h3>
  <div style="text-align: center;" class="form">
  <form action="login_code.php" method="POST" >
    <label>Email</label><br>
    <input type="email" placeholder="Enter your username " name="email"><br>
    <label>Password</label><br>
    <input type="password" placeholder="Enter your password" name="password"><br>
    <input type="submit" name="submit" class="btn btn-primary"></input>
    <p style="color : white;">Don't have an account? <a href="registration.php" style="color : purple;">Signup</a></p>
  </form>  
  </div>
<script src="static/script.js"></script>
<script src="static/bootstrap(1).js"></script>
<script src="static/bootstrap(2).js"></script>
<script src="static/bootstrap(3).js"></script>
</body>
</html>