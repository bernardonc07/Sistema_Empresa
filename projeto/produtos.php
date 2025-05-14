<?php 
include_once './conexao.php';

$sql = "SELECT * FROM produtos";

$resultado = mysqli_query($conn,$sql);
echo '<pre>';print_r($resultado); echo '</pre>';

while ( $dado = mysqli_fetch_assoc($resultado)) {
    echo '<a href="./produto-detalhe.php?id='.$dado['ProdutoID'].'">'.$dado['Nome'].'</a><br>';
}

?>