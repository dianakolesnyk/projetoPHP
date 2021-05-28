<?php 

session_start();

if (!empty($_POST)){
$conexao = mysqli_connect('localhost', 'root', '', 'trabalho_final_php');
$nome = mysqli_real_escape_string($conexao, $_POST['nome']); // retira os caracteres especiais
$password = mysqli_real_escape_string($conexao, $_POST['password']);
$sql = "select * from users where nome = '$nome' and password= '$password' ";
$resultado = mysqli_query($conexao, $sql);
}


if (mysqli_num_rows($resultado) == 1){
    $_SESSION['nome'] = $nome;
    $_SESSION['password'] = $password;
    header('location:store.html');
}else{
    $_SESSION['errorMessage'] = true;
         header("Location:administrador.html");
         exit();;
}



/* 

$sql = "insert into users (nome, password) values ('$nome', '$password')";
$valida = mysqli_query($conexao, $sql);
$arrDados = mysqli_fetch_assoc($valida);
$nlinhas = count($arrDados);
echo $arrDados;
echo $sql;

if ($nlinhas == 1) {
    $_SESSION['nome']=$nome;
    $_SESSION['password']=$password;
    header('location:store.php');
} else {
    echo "Os dados estão incorretos.";
}
    

*/



?>