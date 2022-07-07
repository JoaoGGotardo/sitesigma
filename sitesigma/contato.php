<?php
include_once './inlcudes/_banco.php';
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

if (isset($_POST['txtNome'])){

    $nome = $_POST['txtNome'];
    echo $nome;
    
}
if (isset($_POST['txtEmail'])){

    $nome = $_POST['txtEmail'];
    echo $nome; 
}

if(isset($_POST['txtTel'])){

    $nome = $_POST['txtTel'];
    echo $nome;
}

if (isset($_POST['txtMensagem'])){

    $nome = $_POST['txtMensagem'];
    echo $nome;
}

?>

<h1>Contato</h1>

<div class="formulario">
    <form action="./contato.php" method="post">
        <ul>
            <li><input type="text" name="txtNome" id="txtNome" placeholder='Nome Completo' ></li>
            <li><input type="text" name="txtEmail" id="txtNome" placeholder='E-mail' ></li>
            <li><input type="text" name="txtTel" id="txtNome" placeholder='Telefone' ></li>
            <li><textarea name="txtMensagem" id="txtMensagem" cols="30" placeholder='Mensagem' rows="10"></textarea></li>
            <li><input type="submit" value="Enviar"></li>
        </ul>
    </form>

</div>


<?php
include_once './includes/_footer.php';
?>