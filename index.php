<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <h2>Join thousands of learners from around the world</h2>
      </div>

      <div class="p3">
        <h4>Master web development by making real-life projects. There are multiple paths for you to choose.</h4>

      </div>

      <form action="./scripts/login.php" method="POST" class="">
        <div class="correo">
          <label for=""><span class="material-symbols-outlined">mail</span></label>
          <input
            type="text"
            name="username"
            id="username"
            class=""
            placeholder="Email"
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
          />
          
        </div>
        <button class="but1">Star coding now</button>
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
        <h4>Already a member?</h4>
        <a href="">Login</a>
      </div>
    </div>
  </body>
</html>
