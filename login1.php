<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="login1.css">

</head>
<body>

<?php

    session_start(); 
    $db = mysqli_connect("localhost","root", "", "csehome");

    $nameErr = $emailErr = $passwordErr = "";
    $name = $email = $password = "";

    if(isset($_POST['login']))
    {

        $name = $_POST["name"];
        $password = $_POST["password"];

        $result = mysqli_query($db,"select * from register where name = '$name' and password = '$password'");
        $row_cnt = mysqli_num_rows($result);

        if($row_cnt>0 )
         {
            
            $_SESSION['name']=$_POST['name'];
            setcookie('name',$_POST['name'], time()+(30),"/");
            setcookie('password',$_POST['password'], time()+(30),"/");
            echo "<script>alert('Login successful')</script>"; 
            header("location: profile.php");
         }

        else
         {
            echo "<script>
                    alert('Invalid username or password')
                    </script>";
         }
    }
?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      <div class="container">
            <button type="submit" style="float: right;" onclick="location.href='homepage.php'"> << Back to home</button>
             <h1 style="text-align:center;">Login Form</h1>
             <br><hr>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter name" name="name" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit" name="login" class="registerbtn">Login</button>
      </div>
      
        <div class="container signin">
          <p>Create a new account? <a href="index.php">Sign up</a>.</p>
        </div>

  </form>

</body>
</html>