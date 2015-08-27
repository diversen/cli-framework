<?php

use diversen\cli\common;

function miau_get_colors () {
    $ary = [
        'Red',
        'Green',
        'Yellow',
        'Blue',
        'Purple',
        'Cyan',
        'white'
        
        ];
    return $ary;
} 

function miau_cat () {
    $str = <<<EOF
                        /\_/\
                   ____/ o o \
                 /~____  =ø= /
                (______)__m_m)
EOF;
    return $str;
}

function miau_test ($options) {
    
    echo common::colorOutput('These are the options given to function miau_test()', 'Cyan');
    echo PHP_EOL;
    
    // Print the arguments
    print_r($options);
    
    // echo a string with a newline
    echo common::echoMessage('Draw a cat!');
    
    // echo a colored string. You will need to add newlines 
    echo common::colorOutput('Miau', 'y') . PHP_EOL;
    
    // Read a line from the user
    $str = common::readSingleline('What does a cat say? (Enter input) ');
    
    // Echo a formatted status
    echo common::echoStatus('OK', 'y', $str);
    
    // confirm with a yes or a no
    $res = common::readlineConfirm('Please confirm that you are sure ' . $str);

    // readlineConfirm return 1 on 'y' and 0 on 'n'
    if (!$res) {
        echo common::colorOutput('Ok - you made a mistake!', 'r') . PHP_EOL;
    } else {
        echo common::colorOutput('OK. You are sure. ', 'b') . PHP_EOL;
    }
}

function miau_colors ($options) {
    $ary = miau_get_colors();
    foreach ($ary as $color) {
        common::echoMessage($color);
        $char = substr($color, 0, 1);
        echo common::colorOutput(miau_cat(), $char) . PHP_EOL;
    }
}

// Set top command
self::setCommand('miau', array(
    'description' => 'A cats program.',
));

// Add an option
self::setOption('miau_test', array(
    'long_name'   => '--test',
    'description' => 'Test some the cli\diversen\common commands',
    'action'      => 'StoreTrue',
));

// Add an option
self::setOption('miau_colors', array(
    'long_name'   => '--colors',
    'description' => 'Test some shell colors',
    'action'      => 'StoreTrue',
));

self::setArgument(
    'color',
    array('description'=> 'Put color on the drawn cat',
        'optional' => true,
));
