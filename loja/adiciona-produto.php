<?php
include("cabecalho.php");
 include("conecta.php");
 include("banco-produto.php");

$nome = $_GET["nome"];
$preco = $_GET["preco"];


if(insereProduto($conexao, $nome, $preco)) { ?>
    <p class="alert-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="alert-danger">Produto <?= $nome; ?> não foi adicionado: <?= $msg ?></p>
<?php } ?>

<?php include("rodape.php"); ?>
