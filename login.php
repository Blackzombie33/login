<style>
  #login-message {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  text-align: center;
  position: fixed;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  z-index: 9999;
  border-radius: 5px;
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
}
</style>
<?php
include("post.php"); 
$user = $_POST["user"]; 
$pass = $_POST["pass"]; 

if (empty($user)){
    echo "<h3>Enter username</h3>"; 
} 
if (empty($pass)){
    echo "<h3>Enter password</h3>"; 
} 
function Existence($user,$pass){
    $file = $user . '.txt';
    if (file_exists($file)) {
      $file = fopen(f, "r")} 
      if ($file) {
      $password = fgets($file);
      fclose($file); 
        if ($pass == sha1($password])) {
         echo '<div id="login-message"><p>تم تسجيل الدخول بنجاح!</p></div>'
        header("location: https://freesh-moviesblackfrostironman408.on.drv.tw/Movies%20site/Movies.html"); 
        }else{
            echo '<h4 style="color:red">Error Password</h4>'; 
            header("location: login.html"); 
        }
    }else{
        echo '<h4 style="color:red">Error Username</h4>'; 
        header("location: login.html"); 
    }
} 
if (isset($_POST["login"])){
    Existence($user,$pass); 
}
?> 
<script> 
  $(document).ready(function() {
  $("#login-message").animate({opacity: 1}, 1000).delay(2000).animate({opacity: 0}, 1000);
});
</script> 