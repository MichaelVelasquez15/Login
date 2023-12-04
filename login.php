<?php

session_start();
if(isset($_SESSION['userData'])){
  $user = $_SESSION['userData'];
}else{
header('location: ./info.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Mulish:wght@200;400&family=Noto+Sans:wght@100&family=Raleway:wght@100&display=swap" rel="stylesheet">
</head>
<body>
<div class="card">

<div class ="logo">
 <img src="./assets/devchallenges.svg" alt="">
</div>

<div class="p1">
  <h2>Login </h2>
</div>

<form action="./scripts/log.php" method="POST" class="">
  <div class="correo">
  <label for=""><span class="material-symbols-outlined">mail</span></label>
    <input
      type="text"
      name="email"
      id="email"
      class=""
      placeholder="Email"
      required
    />

  </div>
  <div class="password">
  <label for=""><span class="material-symbols-outlined">lock</span></label>
    <input
      type="password"
      name="password"
      id="password"
      class=""
      placeholder="Password"
      required
    />
  </div>
  <button class="but1">Login</button>
</form>
<div class="p2">
  <h4>or continue with these social profile</h4>
</div>

<div class="logos2">
  <img src="./assets/Google.svg" alt="">
  <img src="./assets/Facebook.svg" alt="">
  <img src="./assets/Twitter.svg" alt="">
  <img src="./assets/Gihub.svg" alt="">
</div>

<div class="foot">
  <h4>Don't have an account yet?</h4>
  <a href="index.php">Register</a>
</div>
</div>
</body>
</html>