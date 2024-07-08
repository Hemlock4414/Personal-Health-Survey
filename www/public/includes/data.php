<?php

if (!isset($_SESSION)) {
    session_start();
}

$fragen = [
    '1' => ['id' => 'frage1',
        'typ' => 'slider',
        'frage' => 'How healthy are you physically?',
        'name' => 'inputFrage1',
        'min' => 1,
        'max' => 5,
        'wert' => 3,
        'beschriftungen' => [
            1 => 'Not healthy at all',
            2 => 'Not very healthy',
            3 => 'Average healthy',
            4 => 'Quite healthy',
            5 => 'Extremely healthy'
        ]
        ],
        
    '2' => ['id' => 'frage2',
        'typ' => 'radio',
        'frage' => 'Do you take dietary supplements?',
        'name' => 'inputFrage2',
        'optionen' => ['Yes' => 1, 'No' => 0,]
        ],

    '3' => ['id' => 'frage3',
        'typ' => 'slider',
        'frage' => 'How important is physical activity to you?',
        'name' => 'inputFrage3',
        'min' => 1,
        'max' => 5,
        'wert' => 3,
        'beschriftungen' => [
            1 => 'Not important at all',
            2 => 'Not very important',
            3 => 'Normally important',
            4 => 'Quite important',
            5 => 'Extremely important'
        ],
        ],

    '4' => ['id' => 'frage4',
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
            'Other' => 1,],
            ],

    '5' => ['id' => 'frage5',
        'typ' => 'slider',
        'frage' => 'Do you feel you engage in too little, enough, or too much additional physical activity?',
        'name' => 'inputFrage5',
        'min' => 1,
        'max' => 5,
        'wert' => 3,
        'beschriftungen' => [
            1 => 'Far too little',
            2 => 'Too little',
            3 => 'Just right',
            4 => 'Too much',
            5 => 'Far too much'
        ],
        ],
    '6' => [ 'id' => 'frage6',
        'typ' => 'number',
        'frage' => 'On a typical day: How many of your meals or snacks contain carbohydrates?',
        'name' => 'inputFrage6',
        'min' => 0,
        'max' => 5,
        'wert' => ''],


    '7' => ['id' => 'frage7',
        'typ' => 'number',
        'frage' => 'On a typical day: How many of your meals or snacks contain protein?',
        'name' => 'inputFrage7',
        'min' => 0,
        'max' => 5,
        'wert' => ''],


    '8' => ['id' => 'frage8',
        'typ' => 'number',
        'frage' => 'On a typical day: How many of your meals or snacks contain vegetables?',
        'name' => 'inputFrage8',
        'min' => 0,
        'max' => 5,
        'wert' => ''],


    '9' => ['id' => 'frage9',
        'typ' => 'number',
        'frage' => 'On a typical day: How many of your meals or snacks contain fruits?',
        'name' => 'inputFrage9',
        'min' => 0,
        'max' => 5,
        'wert' => ''],


    '10' => ['id' => 'frage10',
        'typ' => 'number',
        'frage' => 'On a typical day: How many of your meals come from the microwave or are pre-prepared?',
        'name' => 'inputFrage10',
        'min' => 0,
        'max' => 5,
        'wert' => ''],
];


function printSlider($frage, $frageName, $frageId, $frageMin, $frageMax, $frageWert) {
    echo "<p>$frage</p>
          <input type='range'
            name='$frageName'
            id='$frageId'  
            min='$frageMin' 
            max='$frageMax' 
            value='$frageWert'>";
  
}

function printRadio($frage, $frageName, $frageId, $optionen) {
    $idCount= 0;   
    echo "<p>$frage</p>";
            foreach ($optionen as $optionText => $optionValue){
                $radioId= $frageId. '-'. $idCount;
                    echo "<label>
                            <input type='radio'
                            name= '$frageName'
                            id= '$radioId'
                            value='$optionValue'>
                            $optionText
                            </label>
                            <br>";
                $idCount++ ;
                } 
    echo "<input type='text' name= 'textForOthers' id= 'textForOthers' class='hidden' value= ''> <br>";
            
}


function printNumber($frage, $frageName, $frageId, $frageMin, $frageMax, $frageWert) {
    echo "<p>$frage</p>
          <input type='number'
            name='$frageName'
            id='$frageId'  
            min='$frageMin' 
            max='$frageMax' 
            value='$frageWert'>";           
}

