<?php
require_once "functions.php";

$result = calculate();
$operator = getSymbol($_POST['operator']);

if (is_numeric($result)) {
    $equation = $_POST['num1'] . " " . $operator . " " . $_POST['num2'] . " = " . $result;
} else {
    $equation = $result;
}


header("Location: index.php?" . generateQs($equation, $_POST['num1'], $_POST['num2'], $_POST['operator']));
