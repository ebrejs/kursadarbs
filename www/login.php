
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['logins'])){
    $vards = $_POST['vards'];
    $uzvards = $_POST['uzvards'];
    $epasts = $_POST['epasts'];
    $parole = $_POST['parole'];
    $telefons = $_POST['telefons'];
    $dzimsanas_diena = $_POST['dzimsanas_diena']; 
    
    $parole = md5($parole);

    $sql = "INSERT INTO lietotaji(Id, Vards, Uzvards, Parole, Telefons, Epasts, Dzimsanas_diena ) VALUES (NULL, '$vards', '$uzvards', '$parole', '$telefons', '$epasts', '$dzimsanas_diena')";
     $conn->query($sql);
            $conn->close();
   
 header("Location:index.php");
            session_start();

            $_SESSION['username']= $epasts;

    };






    if(isset($_POST['logins2'])){

$epasts = mysqli_real_escape_string($conn,$_POST['epasts']);

$parole = mysqli_real_escape_string($conn,$_POST['parole']);
$parole = md5($parole);

$sel_user = "select ID from lietotaji where Epasts='$epasts' AND Parole='$parole'";

$run_user = mysqli_query($conn, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

header("location: index.php");

session_start();

$_SESSION['username']= $epasts;



}

else {


echo "<script>alert('Epasts un/vai parole nav pareiza, mēģiniet vēlreiz!')</script>";
header("location: login.php");
}

}

 if(isset($_POST['lons'])){
session_destroy();
header('Location: index.php');
exit;
}


?>





<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>V1.lv registration</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">

    
    
    
    
  </head>

  <body>
  
   <a href="logout.php" name="lons" class="button button-block" >iziet</a>

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="login.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="vards"/>
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="uzvards"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="epasts"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="parole"/>
          </div>
          <div class="field-wrap">
            <label>
              Enter your telephone number <span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="telefons"/>
          </div>
          <div class="field-wrap">
             <h2> <font color = "white"> Please enter your birthday: <span class="req">*</span> </font></h2>
            <label>
             
            </label>
            <input type="Date"required autocomplete="off" name="dzimsanas_diena"/>
            
          </div>
           <button type="submit" name="logins" class="button button-block" >Signup</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name = "epasts"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name = "parole"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block" name="logins2" type = "submit" />Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
  </body>
</html>
