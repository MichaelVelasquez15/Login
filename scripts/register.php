<?php

require_once'conn.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    $correo = $_POST['email'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
}

$query = "INSERT INTO usuarios(`email`,`password`) VALUE (?,?)";
$d = 'SELECT * FROM usuarios where email = ?';

try {
    $stm = $pdo->prepare($query);
    $stm -> execute([
        $correo,
        $hash,
        // $imgcontent
    ]);

    $stm1 = $pdo->prepare($d);
    $stm1 -> execute([
        $correo
    ]);

    $resultado = $stm1-> fetchAll(PDO::FETCH_ASSOC);

    session_start();

    $_SESSION['userData'] = [
        'email' => $correo,
        'password' => $hash
    ];


    header('location: ../login.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}