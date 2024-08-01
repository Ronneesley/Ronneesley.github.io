<h1>Mudar a senha</h1>

<form method="post" action="mudar_senha.php">
    <label>Usuário</label><br />
    <?php
    $id = $_GET["id"];

    $con = new mysqli("localhost", "root", "", "sistema");    
    $resultado = $con->query("select * from usuarios where id = $id");

    if ($obj = $resultado->fetch_object()){
        echo $obj->nome;
    }
    ?>
    <br /><br />

    <input type="hidden" value="<?=$id?>" name="id" />

    <label>Nova Senha</label><br />
    <input type="password" name="nova_senha" />
    <br /><br />

    <input type="submit" value="Mudar" />
</form>