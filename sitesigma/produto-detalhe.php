<?php
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$id = $_GET ['id'];

?>

<h1>Produto Detalhe</h1>

<div class="detalhe">
    <h3><?php echo $produtos[$id]['nome'];?></h3>
    <p><?php echo $produtos [$id]['descricao']?></p>
    <img src="./content/<?php echo $produtos [$id]['imagem']?>">
    <h2>R$ <?php echo $produtos [$id]['preco']?></h2>

</div>

<?php
include_once './includes/_footer.php';
?>