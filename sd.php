
<?php
 
if(isset($_POST['signup'])){

    $name=$_POST['name'];
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
        $insert_query="insert into user values('$name','$password')";
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
    }
    else{
      echo '<script type="text/javascript"> alert("Password does not match") </script> ';
    }


    function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


}