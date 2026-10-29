<?php
// Ontvang getallen en operatie via URL parameters (bijv. ?num1=10&num2=5&op=*)
$num1 = isset($_GET['num1']) ? (float)$_GET['num1'] : 0;
$num2 = isset($_GET['num2']) ? (float)$_GET['num2'] : 0;
$operation = isset($_GET['op']) ? $_GET['op'] : '+';

function calculate($num1, $num2, $operation) {
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num2 != 0 ? $num1 / $num2 : "Error: Division by zero";
        default:
            return "Error: Invalid operation";
    }
}

$result = calculate($num1, $num2, $operation);

echo "Resultaat: $result";
?>