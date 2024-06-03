<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    //echo $username . " - " . $password;
    
    //echo "Senha: " . md5($password) ;

    if(md5($password) == md5("1234")){
        session_start();
        $_SESSION["login"] = $username;
        header("location:menu.php");
    }else{header("location:index.php");}

?>