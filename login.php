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
  <h2>Login</h2>
</div>

<form action="./scripts/login.php" method="POST" class="">
  <div class="">
    <input
      type="text"
      name="username"
      id="username"
      class=""
      placeholder="Email"
    />
    <span class="material-symbols-outlined">mail</span>
  </div>
  <div class="">
    <input
    
      type="password"
      name="password"
      id="password"
      class=""
      placeholder="Password"
    />
    <span class="material-symbols-outlined">lock</span>
  </div>
  <button class="">Login</button>
</form>
<div class="p2">
  <p>or continue with these social profile</p>
</div>

<div class="logos2">
  <img src="./assets/Google.svg" alt="">
  <img src="./assets/Facebook.svg" alt="">
  <img src="./assets/Twitter.svg" alt="">
  <img src="./assets/Gihub.svg" alt="">
</div>

<div>
  <p>Don't have an account yet?</p>
  <a href="">Register</a>
</div>
</div>
</body>
</html>