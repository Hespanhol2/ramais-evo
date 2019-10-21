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

$id = 0;
if(isset($_GET['id']) && empty($_GET['id']) == false) {
    $id = addslashes($_GET['id']);
}

if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $setor = addslashes($_POST['setor']);
    $ramal = addslashes($_POST['ramal']);

    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', setor = '$setor', ramal = '$ramal' WHERE id = '$id'";
    $pdo->query($sql);

    header("Location: gerenciador.php");

    header("Location: index.php");

}

$sql =  "SELECT * FROM usuarios WHERE id = '$id'";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
$dado = $sql->fetch();
} else {
  header("Location: index.php");
}
?>

<form method="POST">
    Nome:<br/>
    <input class="form-control form-control-sm" name="nome" type="text" value="<?php echo $dado['nome']; ?>" /><br/><br/>
    

    E-mail:<br/>
    <input class="form-control form-control-sm" name="email" type="text" value="<?php echo $dado['email']; ?>" /><br/><br/>

    Setor:<br/>
    <input class="form-control form-control-sm" name="setor" type="text" value="<?php echo $dado['setor'];?>" /><br/><br/>

    Ramal:<br/>
    <input class="form-control form-control-sm" name="ramal" type="text" value="<?php echo $dado['ramal'];?>" /><br/><br/>

    <input type="submit" class="btn btn-success" value="Atualizar"/>
</form>