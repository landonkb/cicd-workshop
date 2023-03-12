<?php

    header('Content-Type: application/json');
    
    require_once(dirname(dirname(__FILE__)) .'/private/FizzBuzz.php');

    $fizzBuzz = new FizzBuzz();

    echo json_encode($fizzBuzz->run());
