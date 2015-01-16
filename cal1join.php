
<?php
$action = $_REQUEST["action"];
$numb1 = $_REQUEST["numb1"];
$numb2 = $_REQUEST["numb2"];
if($action == "+"){
    $solve = "$numb1" + "$numb2";
} elseif ($action == "-") {
    $solve = "$numb1" - "$numb2";
} elseif ($action == "*") {
    $solve = "$numb1" * "$numb2";
} elseif ($action == "/") {
    $solve = "$numb1" / "$numb2";
} elseif ($action == "%") {
    $solve = "$numb1" % "$numb2";
}
?>
<html>
<body>
<p> Solution is = <?= $solve ?>. </p><br />
<a href="calc.php"> Another calc</a>
</body>
</html>

Status
API
Training
Shop
Blog
About

