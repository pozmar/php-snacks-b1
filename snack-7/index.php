<!--Creare un array contenente qualche alunno di un’ipotetica classe. Ogni
alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.-->
<?php
$classe = [
    [
    "nome" => "Marco",
    "cognome" => "Rossi",
    "voti" => [7, 8.5, 4, 5, 7.5, 6.5, 8, 7],
    ],
    [
    "nome" => "Mattia",
    "cognome" => "Fabbri",
    "voti" => [7, 6, 5.5, 5, 6.5, 6.5, 6, 7],
    ],
    [
    "nome" => "Ilenia",
    "cognome" => "Mastro",
    "voti" => [8, 8.5, 9, 9, 8.5, 8.5, 8, 9],
    ],
    [
    "nome" => "Paola",
    "cognome" => "Valeri",
    "voti" => [7, 6.5, 5, 5, 5.5, 4.5, 6, 6.5],
    ],
    [
    "nome" => "Francesco",
    "cognome" => "Rosari",
    "voti" => [9, 9.5, 9, 9, 8.5, 7.5, 8, 9],
    ]
    ];
foreach($classe as $key => $v){
    echo($v["nome"] . " " . $v["cognome"] . " ". round((array_sum($v["voti"]))/count($v["voti"]), 1) . "<br>");
}
?>