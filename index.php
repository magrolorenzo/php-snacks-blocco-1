<!--
PHP Snack 1:
Creare un array $matches che contiene dei sotto-array, i quali rappresentano delle partite di basket.

Ogni partita avrà le seguenti caratteristiche:
squadra di casa
squadra ospite
punti fatti dalla squadra di casa
punti fatti dalla squadra ospite

L'obbiettivo è stampare a schermo tutte le partite utilizzando questo schema:
[squadra di casa] - [squadra ospite] | [punti squadra di casa] - [punti squadra ospite]
ad esempio:
Olimpia Milano - Cantù | 55 - 60
-->
<?php

    $matches =[
        "match_1" =>[
            "Home_team" => "VL Pesaro",
            "Away_team" => "Fortitudo Bologna",
            "Home_score" => 70,
            "Away_score" => 78
        ],
        "match_2" =>[
            "Home_team" => "Dinamo Sassari",
            "Away_team" => "Universo Treviso",
            "Home_score" => 97,
            "Away_score" => 93
        ],
        "match_3" =>[
            "Home_team" => "Brescia",
            "Away_team" => "Venezia",
            "Home_score" => 71,
            "Away_score" => 69
        ],
        "match_4" =>[
            "Home_team" => "Olmpia Milano",
            "Away_team" => "Brindisi",
            "Home_score" => 82,
            "Away_score" => 88
        ],
        "match_5" =>[
            "Home_team" => "Trieste",
            "Away_team" => "Virtus Bologna",
            "Home_score" => 60,
            "Away_score" => 77
        ],
    ];

    public function printMatch($array){
        $i = 0;
        $matches_infos = [];
        $infos = "";

        while ($i < count($array)) {
            $infos = $array[i]."Home_team" . " - " . $array[i]."Away_team" . " | " . $array[i]."Home_score" . " - " .$array[i]."Away_score"
            $matches_infos[] = $infos;
            $i++;
        }
        return $matches_infos;
    };

?>

<html lang="en" dir="ltr">
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="assets/style.css">
       <title>
           Basket Matches
        </title>
    </head>
    <body>
        <h1>
            <?php
                var_dump(printMatch($matches));
            ?>
        </h1>
    </body>
</html>

<!--
PHP Snack 2:
Passare 3 parametri GET: name, mail e age e verificare (cercando nella documentazione i metodi che non conosciamo) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->
