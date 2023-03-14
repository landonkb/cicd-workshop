<?php

    header('Content-Type: application/json');
    
    require_once(dirname(dirname(__FILE__)) .'/private/FizzBuzz.php');

    $fizzBuzz = new FizzBuzz();

    $minValue = isset($_GET['minValue']) ? (int) $_GET['minValue'] : 1;
    $maxValue = isset($_GET['maxValue']) ? (int) $_GET['maxValue'] : 100;

    echo json_encode($fizzBuzz->run($minValue, $maxValue));
