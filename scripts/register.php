<?php

require_once'conn.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
}

// if(isset($_FILES['foto'])){
//     $img = $_FILES['foto']['tmp_name'];
//     $imgcontent = addslashes(file_get_contents($img));
// }

$query = "INSERT INTO usuarios(`correo`,`password`) VALUE (?,?)";

try {
    $stm = $pdo->prepare($query);
    $stm -> execute([
        $correo,
        $hash,
        // $imgcontent
    ]);

    header('location: ../login.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}