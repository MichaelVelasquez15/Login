<?php

session_start();
if(isset($_SESSION['userData'])){
  $user = $_SESSION['userData'];
}else{
// header('location: ./info.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Mulish:wght@200;400&family=Noto+Sans:wght@100&family=Raleway:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="nav2">
        <div class="logo1">
            <div><img src="./assets/devchallenges.svg" alt=""></div>
            <div>
            <ul>
			<ol><span class="material-symbols-outlined">arrow_drop_down</span>
				<ul>
                    <div class="d1"><ol><span class="material-symbols-outlined">account_circle</span><h4>My Profie</h4></ol></div>
					
					<ol><div class="d1"><span class="material-symbols-outlined">group</span><h4>Group Chat</h4></div></ol>
					<ol><span class="material-symbols-outlined">move_item</span><a href="./scripts/logout.php">Cerrrar Sesion</a></ol>
				</ul>
			</ol>
		</ul>   
            
            </div>
        </div>
    </nav>

    <div class="cabeza">
      <h1>Personal Info</h1>

    </div>
    <div class="cabeza2">
    <p>Basic info, like your name and photo</p>
    </div>

<div class="card1">

<form action="./scripts/login.php" method="POST" class="">
    <div>
        <div>        
            <h2>Profile</h2>
            <p>Some info may be visible to other people</p>
        </div>
        <div><button>Edit</button></div>
    </div>
    <div>
        <h3>PHOTO</h3>
        <p>foto aqui</p>
    </div>
    <div>
        <h3>NAME</h3>
        <p>nombre aqui</p>
    </div>
    <div>
        <h3>BIO</h3>
        <p>Bio aqui</p>
    </div>
    <div>
        <h3>PHONE</h3>
        <p>Telefono aqui</p>
    </div>
    <div>
        <h3>EMAIL</h3>
        <p><?=$user['email']?></p>
    </div>
    <div>
        <h3>PASSWORD</h3>
        <p><?=$user['password']?></p>
    </div>
</form>

</div>
</body>
</html>