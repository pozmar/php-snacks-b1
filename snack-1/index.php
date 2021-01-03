<!--Creiamo un array contenente le partite di basket di un’ipotetica tappa del
calendario. Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60-->
<?php
$partite = [
    "prima_partita" => 
    [
    "casa" => "Virtus Bologna",
    "ospite" => "Olimpia Milano",
    "punti_casa" => "106",
    "punti_ospite" => "98",
    ],
    "seconda_partita" =>   [
    "casa" => "Fortitudo Bologna",
    "ospite" => "Reyer Venezia",
    "punti_casa" => "104",
    "punti_ospite" => "102",
    ],
    "terza_partita" => 
    [
    "casa" => "Dinamo Sassari",
    "ospite" => "Trieste",
    "punti_casa" => "104",
    "punti_ospite" => "102",
    ],
    "quarta_partita" => 
    [
    "casa" => "Juvecaserta",
    "ospite" => "Cantù",
    "punti_casa" => "95",
    "punti_ospite" => "108",
    ],
    "quinta_partita" =>
    [
    "casa" => "Reyer Venezia",
    "ospite" => "Dinamo Sassari",
    "punti_casa" => "119",
    "punti_ospite" => "111",
    ],
    "sesta_partita" => 
    [
    "casa" => "Trieste",
    "ospite" => "Fortitudo Bologna",
    "punti_casa" => "100",
    "punti_ospite" => "102",       
    ],
    "settima_partita" => 
    [
    "casa" => "Olimpia Milano",
    "ospite" => "Juvecaserta",
    "punti_casa" => "119",
    "punti_ospite" => "99",
    ],
    "ottava_partita" => 
    [
    "casa" => "Cantù",
    "ospite" => "Virtus Bologna",
    "punti_casa" => "100",
    "punti_ospite" => "111",
    ]
    ];
    for($i = 0; $i < count($partite); $i++){
        $keys = array_keys($partite);
        $match = $keys[$i];
        echo $match . " " . $partite[$match]["casa"] . " - " . $partite[$match]["ospite"] . " | " . $partite[$match]["punti_casa"] . "-" . $partite[$match]["punti_ospite"] . "<br>";
    }
    ?>