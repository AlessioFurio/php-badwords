<?php

$paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolor eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
$badWord = $_GET['badword'];
$paragrafoNew = str_replace($badWord, '***', $paragrafo);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p>
            <strong>Il paragrafo originale:</strong> <?php echo($paragrafo) ?>
            <br>
            <strong>Il paragrafo corretto:</strong> <?php echo($paragrafoNew) ?>
            <br>
            <strong>Lunghezza paragrafo originale:</strong> <?php echo strlen($paragrafo) ?>
        </p>
    </body>
</html>
