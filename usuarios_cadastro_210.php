<?php
include("Condutores.php");
$cond = new Condutores;
$cond->setCnh($_REQUEST["cnh"]);
$cond->setNome($_REQUEST["nome"]);
$cond->setNasc($_REQUEST["nasc"]);
$cond->ConectaBD();
$cond->Incluir();
?>

<html>
<body>
<head>
<link rel="stylesheet" href="estilos.css">
</head>
<div>Cadastro - Inclusão</div>
<table>
<tr><th>Identificador</th><th>Nome do Evento</th><th>Data do Acontecimento</th></tr>
<tr><td><?php echo($cond->getCnh())?></td><td><?php echo ($cond->getNome())?></td>
<td><?php echo($cond->getNasc())?></td></tr>
</table><p>
<div>Cadastro incluído com sucesso !!!</div><p></p>
<form name="manut" action="index.html" method=get>
<input name="volta" type=submit value="Voltar">
</form>
</font>
</body>
</html>
