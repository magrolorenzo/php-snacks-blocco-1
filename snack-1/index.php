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

        [
            "home_team" => "VL Pesaro",
            "away_team" => "Fortitudo Bologna",
            "home_score" => 70,
            "away_score" => 78
        ],

        [
            "home_team" => "Dinamo Sassari",
            "away_team" => "Universo Treviso",
            "home_score" => 97,
            "away_score" => 93
        ],

        [
            "home_team" => "Brescia",
            "away_team" => "Venezia",
            "home_score" => 71,
            "away_score" => 69
        ],

        [
            "home_team" => "Olmpia Milano",
            "away_team" => "Brindisi",
            "home_score" => 82,
            "away_score" => 88
        ],

        [
            "home_team" => "Trieste",
            "away_team" => "Virtus Bologna",
            "home_score" => 60,
            "away_score" => 77
        ]
    ];

    function printMatch($array){
        $i = 0;
        $matches_infos = [];
        $infos = "";

        for( $i = 0 ; $i < count($array); $i++ ){
            $infos = $array[$i]["home_team"] . " - " . $array[$i]["away_team"] . " | " . $array[$i]["home_score"] . " - " .$array[$i]["away_score"];
            $matches_infos[] = $infos;            
        }

        return $matches_infos;
    }

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
        <div class="scores">
            <h2>
                Risultati serie A di Basket:
            </h2>
            <ul>
                <?php
                    $results = printMatch($matches);
                    for( $i = 0 ; $i < count($results); $i++ ){
                ?>
                <li>
                    <?php
                        echo $results[$i];
                    }
                    ?>
                </li>
            </ul>

        </div>

    </body>
</html>
