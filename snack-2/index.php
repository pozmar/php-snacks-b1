<!--Snack 2-->
<?php
$nome = $_GET["nome"];
$mail = $_GET["mail"];
$age = $_GET["age"];
if(strlen($nome) < 3 || !is_numeric($age) || !stripos($mail, '@') || !stripos($mail, ".")){
    echo "Accesso negato";
}else{
    echo "Accesso riuscito";
}
?>