
<?php

$number= $_POST['number'];
echo identify($_POST['number']);

function is_odd($number)
{
    if ($number % 2 == 0) {
        return false;
    } else {
        return true;
    }

    function identify($number)
    {
        if (($number % 2) == 0) {
            return "even number";
        } else {
            return "odd number";
        }
    }
}