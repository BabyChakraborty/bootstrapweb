<?php
if($_POST)
{
    $operation = $_POST['operation'];
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    if ($operation == "+") {
        function add($number1, $number2)
        {
            return $number1 + $number2;
        }
    }


    if ($operation == "-") {
        function sub($number1, $number2)
        {
            return $number1 - $number2;
        }
    }
    if ($operation == "x") {
        function mul($number1, $number2)
        {
            return $number1 * $number2;
        }
    }

    if ($operation == "/") {
        function mul($number1, $number2)
        {
            return $number1 / $number2;
        }
    }
}