<!--Creare un array con 15 numeri casuali, tenendo conto che l’array non
dovrà contenere lo stesso numero più di una volta-->
<?php
$casualNumbers = [];
while(count($casualNumbers) < 15){
    $random = rand(1, 50);
    if(!in_array($random, $casualNumbers)){
        $casualNumbers[] = $random;
    }
}
foreach($casualNumbers as $casualNumber => $value){
    print ($value . "<br>");
}
?>