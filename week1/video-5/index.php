<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-define or Build-in Variables.</title>
</head>

<body>

    <?php
    echo "Pre-define or Build-in Variables are called super-globus. <br> Super-globus can be accessed anywhere inside our code.";
    echo "<br>";
    echo "They are exist inside the php language itsef unlike the normal variable we usually create ourselves."
    ?><br><br>

    <?php
    echo $_SERVER ["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER ["PHP_SELF"];
    echo "<br>";
    echo $_SERVER ["SERVER_NAME"];
    echo "<br>";
    echo $_SERVER ["REQUEST_METHOD"];
    ?> <br><br>

    <?php
    echo "GET or POST is used to submit used for hadling data and submitting data from page to page inside our website.";
    ?> <br><br>

    <?php
    $_GET [""];
    ?>

<?php
    $_POST [""];
    ?>

    <?php
    echo "File super-globus is used to get data about a that has been uploaded to our server.";
    ?> 

    <?php
    echo $_FILES [""];
    ?><br><br>

    <?php
    echo "A COOKIE is a small file that our server embeds on the users computer. which means we have a bunch of information we can store on the users computer."
    ?><br><br>

    <?php
    echo $_COOKIE [""];
    ?>

    <?php
    echo "We can store information of about the user inside a session which is on the server-side"
    ?><br><br>

    <?php
    $_SESSION ["Username"] = "Octave";
    echo $_SESSION["Username"];
    ?>

    <?php
    $_ENV [""];
    ?>
    
</body>
</html>