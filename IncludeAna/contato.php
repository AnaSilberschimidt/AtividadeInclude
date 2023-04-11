<?php include('cabecalho.php'); ?>

<form action="retorno.php" method="post">
    <label for="txtnome">Nome: </label>
    <input type="text" name="txtnome" id="txtnome"> <br>  
    
    <label for="txtmsg">Mensagem:</label>
    <input type="text" name="txtmsg" id="txtmsg"> <br>

    <input type="submit" value="Enviar">
</form>

<?php include ('rodape.php'); ?>
