<?php
if (isset($_GET["route"]) && !empty($_GET["route"])) {
    $route = $_GET["route"];
} else {
    $route = null;
}

require "layout.phtml";
?>

