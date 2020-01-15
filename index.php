<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="index.css">

</head>

<body>
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "Background.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

   <div class="contentt">

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                <div class="container">
                     <button type="submit" style="float: right;" onclick="location.href='homepage.php'"><< Back to home</button>
                  <h1 style="text-align:center;">Register Form</h1>
                  <hr>
                  <p style="text-align:center;">Please fill in this form to create an account.</p>
                  
                  <label for="email"><b>Name</b></label>
                  <input type="text" placeholder="Enter name" name="name" required>
                  
                  <label for="email"><b>Email</b></label>
                  <input type="text" name="email" placeholder="Enter email"  onkeyup="showHint(this.value)" required/>
                  <span id="txtHint" style="color: red;"></span>
                  <br><br>

                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="password" id="password" required>

                  <label for="psw-repeat"><b>Confirm Password</b></label>
                  <input type="password" placeholder="Repeat Password" name="cpassword" id="cpassword" required>
                  <span id='message'></span>
                  
                  <hr>
                  <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                  <button type="submit" name="signup" class="registerbtn">Register</button>
                </div>
            
            <div class="container signin">
              <p>Already have an account? <a href="login1.php">Sign in</a>.</p>
            </div>
        </form>

    </div>

<?php



$nameErr = $emailErr = $passwordErr = "";
$name = $email = $password = "";


    if(isset($_POST['signup']))
    {

      $name=$_POST['name'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $cpassword=$_POST['cpassword'];


        if($password==$cpassword)
        {
            $db = mysqli_connect("localhost","root", "", "csehome");
          
            if (!$db) 
            {
               die("Connection failed: " . mysqli_connect_error());
            }

            $query="select * from user WHERE username='$name'";
            $result = mysqli_query($db, $query);

            if (mysqli_num_rows($result > 1))
             {
                echo '<script type="text/javascript"> alert("User already exist ...try another username") </script> ';
             }

            else
            {
              $insert_query="insert into user values('$name','$email','$password')";
              $insert_query_run=mysqli_query($db,$insert_query);

              if($insert_query_run)
              {
                $_SESSION['name']=$name;
                    $_SESSION['password']=$password;
                echo '<script type="text/javascript"> alert("User registered ...Go to login page to Login") </script> ';
              }
              else
              {
                echo '<script type="text/javascript"> alert("Error!") </script> ';
              }
            }

             $sql="INSERT INTO register(name, email, password) VALUES('$name', '$email', '$password')";

            if (mysqli_multi_query($db, $sql)) {
              echo "<script>alert('New records created successfully')</script>";
              header("location: login1.php");
            } 
            else {
              echo "<script>alert('Sorry, No records created. Try again.')</script>";
            }
         }
      
       else {
          echo '<script type="text/javascript"> alert("Password does not match") </script> ';
         }
    
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>

<script type="text/javascript">
  $('#password, #cpassword').on('keyup', function () {
  if ($('#password').val() == $('#cpassword').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
</script>
</body>
</html>
