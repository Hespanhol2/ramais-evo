<?php
require 'config.php';


if(isset($_GET['id']) && empty($_GET['id']) == false ) {
    $id = addslashes($_GET['id']);

    $sql = "DELETE FROM usuarios WHERE id= '$id'";
    $pdo->query($sql);

<<<<<<< HEAD
    header("Location: gerenciador.php");


} else {
    header("Location: gerenciador.php");
=======
    header("Location: index.php");


} else {
    header("Location: index.php");
>>>>>>> 6498867fd1e63d6f7f99b40991edefdadf0fde82

}
?>