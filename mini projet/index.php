<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Créateur de CV Moche</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">  
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <?php 
       if (isset($_POST["name"]) && !empty($_POST["name"])) {
           require "cv.phtml";
       } else {
           require "formulaire.phtml";
       }
    ?>
</body>
</html>