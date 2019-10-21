<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge=1">
    <title>Ramais Desenvolvimento de Software</title>
    <link rel="shortcut icon" href="img/icon/ahgora2.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
  </head>
  <body>
        <img class="container_b_style" src="img/logoahgora.jpeg" width="180">
        <div class="container espacamento-top "> 
            <div class="container_b_style col-md-6 col-md-offset-3 border-table w3-responsive ">
                <table class="table table-hover">

<?php
require 'config.php';

if(isset($_POST['nome']) && empty($_POST['nome']) == false){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $setor = addslashes($_POST['setor']);
    $ramal = addslashes($_POST['ramal']);

    $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', setor = '$setor', ramal = '$ramal'";    
    $pdo->query($sql);


    header("Location: gerenciador.php");


}
?>

<form method="POST">
    Nome:<br/>
    <input type="text" name="nome"/><br/><br/>

    E-mail:<br/>
    <input type="text" name="email" /><br/><br/>

    Setor:<br/>
    <input type="text" name="setor" /><br/><br/>

    Ramal:<br/>
    <input type="text" name="ramal" /><br/><br/>

    <input type="submit" value="Cadastrar"/>
</form>