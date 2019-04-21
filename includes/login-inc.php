<?php 

    include_once('../functions/config.php');
    session_start();

    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $senha = mysqli_escape_string($conn, $_POST['senha']);

    $query = "SELECT * FROM users WHERE email='$email' and senha= md5('$senha')";

    $results = mysqli_query($conn, $query);

    $checkRow = mysqli_num_rows($results);
    if($checkRow > 0){
        $_SESSION['isLogged'] = true;
        $_SESSION['user'] = $email;
        header('Location: ../minhaConta');
        exit();
    }else{
        header("Location: ../login?=erro&usuarioCorreto=false?senhaCorreta=false");
        exit();
    }

?>