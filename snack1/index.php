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
    ]

];
var_dump($matches);

for ($i=0; $i < count($matches) ; $i++) {
    echo $matches[$i]['home']['name']. " vs " .$matches[$i]['away']['name']. " || " .$matches[$i]['home']['score']. " - " .$matches[$i]['away']['score']."<br>";
};


?>
