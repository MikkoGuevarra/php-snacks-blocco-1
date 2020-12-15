<?php

$matches = [
    [
        'home' => [
            'name' => 'lakers',
            'score' => rand(50, 130)
        ],
        'away' => [
            'name' => 'warriors',
            'score' => rand(50, 130)
        ]
    ],
    [
        'home' => [
            'name' => 'clippers',
            'score' => rand(50, 130)
        ],
        'away' => [
            'name' => 'nets',
            'score' => rand(50, 130)
        ]
    ],
    [
        'home' => [
            'name' => 'bulls',
            'score' => rand(50, 130)
        ],
        'away' => [
            'name' => 'suns',
            'score' => rand(50, 130)
        ]
    ],
    [
        'home' => [
            'name' => 'celtics',
            'score' => rand(50, 130)
        ],
        'away' => [
            'name' => 'thunder',
            'score' => rand(50, 130)
        ]
    ],


];
// var_dump($matches);
//
// for ($i=0; $i < count($matches) ; $i++) {
//     echo $matches[$i]['home']['name']. " vs " .$matches[$i]['away']['name']. " || " .$matches[$i]['home']['score']. " - " .$matches[$i]['away']['score']."<br>";
//     //potrei usare acnhe nl2br e \n
// };

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>NBA SEASON 2020/2021</h1>
        <ul>
            <?php
            for ($i=0; $i < count($matches) ; $i++) {
                echo "<li>";
                echo $matches[$i]['home']['name']. " vs " .$matches[$i]['away']['name']. " || " .$matches[$i]['home']['score']. " - " .$matches[$i]['away']['score'];
                echo "</li>";
            };
            ?>
        </ul>
    </body>
</html>
