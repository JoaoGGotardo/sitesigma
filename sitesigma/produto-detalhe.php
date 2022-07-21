<?php
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$id = $_GET ['id'];

?>

<h1>Produto Detalhe</h1>

<?php
    //cria variavel de SQL executado 
    $sql = "SELECT * FROM produtos WHERE Ativo = 1";

    //executa o comando SQL
    $exec = mysqli_query($conn, $sql);

    //informar quantidade de registros de dados
    $numProdutos = mysqli_num_rows($exec);

    //dados extraidos do banco
    while ($dados = mysqli_fetch_assoc($exec));{

?> 

<div class="card mr-3 mt-3" style="width: 18rem;">
    <img src="./content/<?php echo $dados ['Imagem'];?>" class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title"><?php echo $dados ['Nome'];?></h5>
        <p class="card-text"><?php echo $dados ['Descricao'];?></p>
        <h2>R$ <?php echo $dados['Preco'];?></h2>
    </div>
</div>

<?php
}
?>
<?php
include_once './includes/_footer.php';
?>