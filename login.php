<?php
session_start();
require 'config.php';


	if(isset($_POST['email']) && empty($_POST['email']) == false){
	$email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    
    

    try{
        $db = new PDO($dsn, $dbuser, $dbpass);

        $sql = $db->query("SELECT * FROM perfiladm WHERE email = '$email' AND senha = '$senha'");

        if($sql->rowCount() > 0){

          $dado = $sql->fetch();

           $_SESSION['id'] = $dado['id'];


            header("Location: gerenciador.php");

            

        }

    } catch(PDOException $e){
        echo "Falhou: ".$e->getMessage();
    }

    }

 ?>
 <html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge=1">
    <title>Ramais Desenvolvimento de Software</title>
    <link rel="shortcut icon" href="img/icon/ahgora2.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/centralizando.css">
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
<form method="POST">

        E-mail:<br/>
        <input type="email" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp" placeholder="Seu email" name="email" /><br/><br/>

        Senha:<br/>
        <input type="password"  class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha" /><br/><br/>
       
        <input type="submit"  class="btn btn-success" value="Entrar" />
</form>        
