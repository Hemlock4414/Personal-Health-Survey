<?php

$fragen = [

    [
        'id' => '1',
        'typ' => 'slider',
        'frage' => 'How healthy are you physically?',
        'name' => 'inputFrage1',
        'min' => 1,
        'max' => 5,
        'beschriftungen' => [
            1 => 'Not healthy at all',
            2 => 'Not very healthy',
            3 => 'Average healthy',
            4 => 'Quite healthy',
            5 => 'Extremely healthy'
        ],
        'wert' => 3
    ],

    [
        'id' => '2',
        'typ' => 'radio',
        'frage' => 'Do you take dietary supplements?',
        'name' => 'inputFrage2',
        'optionen' => ['Yes' => 1, 'No' => 0,]
    ],

    [
        'id' => '3',
        'typ' => 'slider',
        'frage' => 'How important is physical activity to you?',
        'name' => 'inputFrage3',
        'min' => 1,
        'max' => 5,
        'beschriftungen' => [
            1 => 'Not important at all',
            2 => 'Not very important',
            3 => 'Normally important',
            4 => 'Quite important',
            5 => 'Extremely important'
        ],
        'wert' => 3
    ],

    [
        'id' => '4',
        'typ' => 'radio',
        'frage' => 'What additional physical activity do you do the most?',
        'name' => 'inputFrage4',
        'optionen' => [
            'No additional physical activity' => 0,
            'Weight lifting' => 1,
            'Walking' => 1,
            'Hiking' => 1,
            'Jogging' => 1,
            'Running' => 1,
            'Swimming' => 1,
            'Dancing' => 1,
            'Aerobics' => 1,
            'Pilates' => 1,
            'Team sport' => 1,
            'Other' => 1,
        ]
    ],

    [
        'id' => '5',
        'typ' => 'slider',
        'frage' => 'Do you feel you engage in too little, enough, or too much additional physical activity?',
        'name' => 'inputFrage5',
        'min' => 1,
        'max' => 5,
        'beschriftungen' => [
            1 => 'Far too little',
            2 => 'Too little',
            3 => 'Just right',
            4 => 'Too much',
            5 => 'Far too much'
        ],
        'wert' => 3
    ],

    [
        'id' => '6',
        'typ' => 'text',
        'frage' => 'On a typical day: How many of your meals or snacks contain carbohydrates?',
        'name' => 'inputFrage6',
        'wert' => ''
    ],

    [
        'id' => '7',
        'typ' => 'text',
        'frage' => 'On a typical day: How many of your meals or snacks contain protein?',
        'name' => 'inputFrage7',
        'wert' => ''
    ],

    [
        'id' => '8',
        'typ' => 'text',
        'frage' => 'On a typical day: How many of your meals or snacks contain vegetables?',
        'name' => 'inputFrage8',
        'wert' => ''
    ],

    [
        'id' => '9',
        'typ' => 'text',
        'frage' => 'On a typical day: How many of your meals or snacks contain fruits?',
        'name' => 'inputFrage9',
        'wert' => ''
    ],

    [
        'id' => '10',
        'typ' => 'text',
        'frage' => 'On a typical day: How many of your meals come from the microwave or are pre-prepared?',
        'name' => 'inputFrage10',
        'wert' => ''
    ],

];

?>
