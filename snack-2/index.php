<!--
PHP Snack 2:
Passare 3 parametri GET: name, mail e age e verificare (cercando nella documentazione i metodi che non conosciamo) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<?php
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

?>

<html lang="en" dir="ltr">
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="assets/style.css">
       <title>
           Verify
        </title>
    </head>
    <body>
        <p>
            <?php echo "Nome: ".$name; ?>
        </p>
        <p>
            <?php echo "Mail: ".$mail; ?>
        </p>
        <p>
            <?php echo "Età: ".$age; ?>
        </p>

    </body>
</html>
