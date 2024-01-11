<?php 

function add(int $nb1, int $nb2) : int
{
    $result = $nb1 + $nb2;
    return $result;
}

function subtract(int $nb1, int $nb2) : int
{
    $result = $nb1 - $nb2;
    return $result;
}

function multiply(int $nb1, int $nb2) : int
{
    $result = $nb1 * $nb2;
    return $result;
}

function divide(int $nb1, int $nb2) : ?int
{
    $result = $nb1 / $nb2;
    return $result;
}

function modulo(int $nb1, int $nb2) : ?int
{
    $result = $nb1 % $nb2;
    return $result;
}

?>