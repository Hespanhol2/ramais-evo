<?php

$dsn = "mysql:dbname=ramaltest;host=localhost";
$dbuser = "root";
$dbpass = "";

 try{
    $pdo = new PDO($dsn, $dbuser,$dbpass);

  //  echo "Conexão estabelecida com sucesso!";    //TESTA CONEXÂO COM BANCO//

 }catch(PDOExeception $e){
    echo "Falhou: ".$e->getMessage();
 }



// try{
//    $pdo = new PDO($dsn, $dbuser,$dbpass);

 //  $sql = "SELECT * FROM usuarios";
 //  $sql = $pdo->query($sql);
   
 //  if($sql-> rowCount() > 0){

 //   foreach($sql-> fetchAll() as $usuarios){
 //       echo "Nome: ".$usuarios["nome"]." - ".$usuarios["setor"]." - ".$usuarios["ramal"]."<br>";
 //   }

//   }else{                                         VERIFICA SE TÊM DADOS, SE TIVER ELE MOSTRA CONFORME O PARAMETRO PASSADO
//       echo "Não há usuários cadastrados!";
   
  // }

// }catch(PDOExeception $e){
 //   echo "Falhou: ".$e->getMessage();
// }



// try{
 //   $pdo = new PDO($dsn, $dbuser, $dbpass);

 //   $nome = "BAITA JOGADORRRR";
 //   $email = "baitajogador.now.com.br";           Insert de usuário
 //   $setor = "RH";
 //   $ramal = "2299";

 //   $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', setor = '$setor', ramal = '$ramal'";
 //   $sql = $pdo->query($sql);

 //   echo "Usuário inserido: ".$pdo->lastInsertId();

// } catch(PDOExeception $e) {
//    echo "Falhou: ".$e->getMessage();
// }


 // try{                                        UPDATE de USUÁRIOS
 //   $pdo = new PDO($dsn, $dbuser, $dbpass);

 //  $sql = "UPDATE usuarios SET email = 'craqueneto@chorapalestra.com.br' WHERE email = 'baitajogador.now.com.br'"; 
 //   $sql = $pdo->query($sql);

 //   } catch(PDOExeception $e) {
 //        echo "Falhou: ".$e->getMessage();
// }
    

 //   try{
//      $pdo = new PDO($dsn, $dbuser, $dbpass);
//
//       $sql = "DELETE FROM usuarios where id = 4";        DELETE DE USUÀRIO CONFORME O PARAMENTRO PASSADO
//        $pdo->query($sql);

//        echo "Mais um nego crivado!";

//    } catch(PDOExeception $e) {
//            echo "Falhou: ".$e->getMessage();
        
//    }



?>
