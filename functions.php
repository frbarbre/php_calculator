<?php

function getSymbol($operator)
{
    switch ($operator) {
        case "None":
            return "";
        case "Add":
            return "+";
        case "Subtract":
            return "-";
        case "Multiply":
            return "*";
        case "Divide":
            return "/";
        default:
            return "";
    }
}

function calculate()
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if (!$num1 || !$num2) {
        return "You need to fill in all fields!";
    }

    if (!is_numeric($num1) || !is_numeric($num2)) {
        return "You need to enter a valid number!";
    }

    switch ($operator) {
        case "None":
            return "You need to select a method!";
        case "Add":
            return $num1 + $num2;
        case "Subtract":
            return $num1 - $num2;
        case "Multiply":
            return $num1 * $num2;
        case "Divide":
            return $num1 / $num2;
        default:
            return "Invalid operator!";
    }
}

function generateQs($result, $num1, $num2, $operator)
{
    return "result=" . urlencode($result) . "&num1=" . urlencode($num1) . "&num2=" . urlencode($num2) . "&operator=" . urlencode($operator);
}
