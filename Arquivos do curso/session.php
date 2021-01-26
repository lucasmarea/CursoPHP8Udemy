<?php
session_start();
$_SESSION["empresa"] = "Hcode Treinamentos";

echo "Criando Variavel Session <br/>";
echo $_SESSION["empresa"];

?>
<br />
<a href="session-2.php">
Veja o resultado
</a>