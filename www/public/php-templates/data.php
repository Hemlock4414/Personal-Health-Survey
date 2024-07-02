<?php

$fragen= [

    [
        'id' => 'frage1',
        'typ' => 'slider',
        'frage' => 'Wie gesund bist du körperlich?',
        'name' => 'inputFrage1',
        'min' => 1,
        'max' => 5,
        'beschriftungen' => [
            1 => 'Überhaupt nicht gesund',
            2 => 'Nicht so gesund',
            3 => 'Durchschnittlich gesund',
            4 => 'Ziemlich gesund',
            5 => 'Extrem gesund'
        ],
        'wert' => 3

    ],

    [
        'id' => 'frage2',
        'typ' => 'radio',
        'frage' => 'Nimmst du Nahrungsergänzungsmittel?',
        'name' => 'inputFrage2',
        'optionen' => ['Ja' => 1, 'Nein' => 0,]
    ],


    [
        'id' => 'frage3',
        'typ' => 'slider',
        'frage' => '3 Wie wichtig ist köperliche Aktivität für dich?',
        'name' => 'inputFrage3',
        'min' => 1,
        'max' => 5,
        'beschriftungen' => [
            1 => 'Überhaupt nicht wichtig',
            2 => 'Nicht so wichtig',
            3 => 'Nomrmal wichtig',
            4 => 'Ziemlich wichtig',
            5 => 'Extrem wichtig'
        ],
        'wert' => 3
    ],

    [
        'id' => 'frage4',
        'typ' => 'radio',
        'frage' => 'Welche zusätzliche körperliche Aktivität betreibst du am meisten?',
        'name' => 'inputFrage4',
        'optionen' => [
            'Keine zusätzliche körperliche Aktivität' => 0,
            'Gewichte heben' => 1,
            'Gehen' => 1,
            'Wandern' => 1,
            'Joggen' => 1,
            'Rennen' => 1,
            'Schwimmen' => 1,
            'Tanzen' => 1,
            'Aerobics' => 1,
            'Pilates' => 1,
            'Team Sport' => 1,
            'Andere' => 1,
                     ] 
    ],

    [
        'id' => 'frage5',
        'typ' => 'slider',
        'frage' => 'Hast du das Gefühl, zu wenig, genügend oder viel zu viel zusätzliche körperliche Aktivitäten zu betreiben?',
        'name' => 'inputFrage5',
        'min' => 1,
        'max' => 5,
        'beschriftungen' => [
            1 => 'Viel zu wenig',
            2 => 'Zu wenig',
            3 => 'Genau richtig',
            4 => 'Zu viel',
            5 => 'Viel zu viel'
        ],
        'wert' => 3
    ]

]



?>