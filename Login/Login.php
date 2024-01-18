<?php
echo'<h2>validar-senha.php</h2>';

$usuario = $_POST ['usuario'];
$senha = $_POST ['senha'];

// var_dump visualizar a lista

// var_dump($usuario,$senha);

function validarLogin($usuario,$senha){
    // -> chama a função
    // query consuta
    // fetchAll Chama todos os usuario
    
    $conexao = new PDO("mysql:host=localhost;dbname=login","root","");
 
    $script = "SELECT * FROM tb_login WHERE usuario = '". $usuario . "' AND senha= '". $senha ."'";
    $resultado= $conexao->query($script);

    $lista = $resultado->fetchAll();

    // echo'<br><pre>';
    // var_dump($lista);
    // var_dump(empty($lista));

    if(empty($lista)){
        echo "<h2>voccê não tem acesso</h2>";
        header("location:index.php?mensagem=1");
    }
    else{
        echo "<h2>voccê tem acesso</h2>";
        header("location:sistema.php?mensagem=1");
    }

}
validarLogin($usuario,$senha);
?>