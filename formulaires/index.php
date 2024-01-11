<?php
require "operations.php";
$result = null;

if (
    isset($_POST["nb1"]) && !empty($_POST["nb1"]) &&
    isset($_POST["nb2"]) && !empty($_POST["nb2"]) &&
    isset($_POST["operation"]) && !empty($_POST["operation"])
) {
    $nb1 = (int)$_POST["nb1"];
    $nb2 = (int)$_POST["nb2"];
    $operation = $_POST["operation"];
    
    switch ($operation) {
        case "*":
            $result = multiply($nb1, $nb2);
            break;
        case "/":
            $result = divide($nb1, $nb2);
            break;
        case "+":
            $result = add($nb1, $nb2);
            break;
        case "-":
            $result = subtract($nb1, $nb2);
            break;
        case "%":
            $result = modulo($nb1, $nb2);
            break;
    }
}

if (isset($result)) {
    echo "<!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Calculator</title>
    </head>
    <body>";

    echo "<p>Result: $result</p>";

    echo "<form action=\"index.php\" method=\"POST\">
        <label for=\"nb1\">Number 1</label>
        <input type=\"number\" id=\"nb1\" name=\"nb1\">
        <select name=\"operation\" id=\"operation\">
            <option value=\"*\">*</option>
            <option value=\"/\">/</option>
            <option value=\">+\">+</option>
            <option value=\"-\">-</option>
            <option value=\"%\">%</option>
        </select>
        <label for=\"nb2\">Number 2</label>
        <input type=\"number\" id=\"nb2\" name=\"nb2\">
        <button type=\"submit\">Calculate</button>
    </form>";

    echo "</body>
    </html>";
}
?>
