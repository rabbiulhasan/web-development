<!DOCTYPE html>
<html>
<head>
   <title>
      CSE HOME || KUET
   </title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<?php 

  session_start(); 
  if(isset($_GET['action']) && $_GET['action']=='logout'){
    unset($_SESSION['name']);
    unset($_SESSION['register']);
    setcookie('name', "", 0, "/");
    setcookie('password', "", 0, "/");
    header('location:homepage.php');
  }
if(isset($_COOKIE['name']) && isset($_COOKIE['password'])){
        $name=$_COOKIE['name'];
        $login= "Logout";
        $linklogin= "header.php?action=logout";
        $linkloginb= "<button class=\"login-btn\"  style=\"position: absolute; right: 7%; width: auto;\" onclick=\"location.href='profile.php'\">".$name."</button>";
}else{
  if( isset( $_SESSION['name'] ) ) {
        $name=$_SESSION['name'];
        $login= "Logout";
        $linklogin= "header.php?action=logout";
        $linkloginb= "<button class=\"login-btn\"  style=\"position: absolute; right: 7%; width: auto;\" onclick=\"location.href='profile.php'\">".$name."</button>";

  }else {
        $login= "Login";
        $linklogin= "login1.php";
        $linkloginb= "";
  }
}
?>

<div class="header" id="myHeader" >

   <div class="row">
       <div class="column headerleft">
       </div>

       <div class="column headerleft1">
          <img src="Logo_KUET.png" width ="105" height="105">
       </div>

       <div class="column headerleft2" >
         <p style="color:#ffffff;"><h2><b> DEPARTMENT OF COMPUTER  SCIENCE  AND  ENGINEERING </b></h2></p>
         <p style="color:#ffffff;"><h3> KHULNA UNIVERSITY OF ENGINEERING & TECHNOLOGY  </h3></p>
        </div>

        <div class="column headerleft3" style="margin-top:50px; ">
          <?php echo "<button class=\"login-btn\"  style=\"position: absolute; right: 1.5%; width: auto;\" onclick=\"location.href='".$linklogin."'\">".$login."</button>"; ?>
          <?php echo $linkloginb; ?>
       </div>

        <div class="icon-bar" style="font-size: 28px;overflow: hidden;">
            <a href="homepage.php">Home</a> 
            <a href="Undergraduate.php">Undergraduate</a>
            <a href="Graduate.php">Graduate</a> 
            <a href="Research.php">Research</a>
            <a href="Faculty.php">Faculty</a> 
            <a href="News & Events.php">News & Events</a>
            <a href="https://sites.google.com/site/nawazpersonalsite/home">About</a>
            <a href="Contact Us.php">Contact us</a>

        </div>

   </div>

</div>

</body>
</html>