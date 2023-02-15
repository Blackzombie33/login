<?php 
$dir = __dir__; 
$user = $_POST["user"]; 
$pass = $_POST["pass"]; 
$email = $_POST["email"]; 

function write($user,$pass,$email){
    $us = trim($user); 
    $pass = trim($pass); 
    $pass = sha1($pass); 
    $file = $us . '.txt';
    if (file_exists($file)){
      echo '<h2 style="color:red">username is taken try again </h2>'; 
      
      header("location: signin.html"); 
    }else{
      $content = $pass . "\n". $email;
      file_put_contents($file, $content);
      echo '<h3 style="color:green">Done Sign up</h3>';  
      
      header("location: https://freesh-moviesblackfrostironman408.on.drv.tw/Movies%20site/Movies.html"); 
}
}  
if (isset($_POST["signup"])){
    write($user,$pass,$email); 
} 
?> 