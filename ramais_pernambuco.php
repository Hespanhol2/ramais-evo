<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge=1">
    <title>Ramal Representante - Pernambuco</title>
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
                    <h3>&nbsp;Pernambuco</h3>
                    <thead>
                   
                    <div class=container3>
  <th>Nome</th>
  <th>Email</th>
  <th>Setor</th>
  <th>Ramal</th>
</div>

    <?php
    require 'config.php';
    $sql = "SELECT * FROM usuarios where setor like '%pe%'";
    $sql = $pdo->query($sql);
    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $usuario) {
            echo '<tr>';
            echo '<td>'.$usuario['nome'].'</td>'; 
            echo '<td>'.$usuario['email'].'</td>';
            echo '<td>'.$usuario['setor'].'</td>';
            echo '<td>'.$usuario['ramal'].'</td>';
            
           
        }
    }
    ?>
                </table>
                <a href="index2.php"> <button type="button" class="btn botao-voltar">Voltar</button></a>
            </div>
        </div>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>