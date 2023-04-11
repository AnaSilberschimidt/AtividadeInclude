<?php include('cabecalho.php'); ?>

<h2>Obrigada pelo contato!</h2>

<?php
$nome= $_POST['txtnome'];
$msg= $_POST['txtmsg'];

echo "Nome: " . $nome . "</br>" . $msg;
?>

<?php include('rodape.php'); ?>''