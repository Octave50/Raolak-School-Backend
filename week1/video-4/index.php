<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables and Data Types</title>
</head>

<body>

    <?php
        echo "variable is used to store some sort of data or memory location";
        ?><br><br>

    <?php
    //Example of how variable works
        $name = ("Popoola Olaide");
        $test = $name
        ?>

        <p>Hi! My name is <?php echo $test;?> and I'm Learning PHP!</p>

    <?php
    //Data types and Examples!
    ?>

    <?php
    //DATA TYPES
    //1. Scalar Types: contains one value. and it includes the following; STRING, INTEGER, FLOAT, BOOL AND ARRAY.


    //A string is used for text and should be inside a double quote.
    echo $string = "OCTAVE";
    ?><br><br>

    <?php
    //An integer is used for digits and it is not usually placed inside a double qoute.
    echo $int = 1234567;
    ?> <br><br>

    <?php
    //A float is used for digits with decimal and it is not usually placed inside a double qoute.
    echo $float = 20.3478;
    ?>

    <?php
    //A bool is used for TRUE OR FALSE.
    echo $bool = true;
    ?>


    <?php
    //2. Array type.
    //An Array is used for Multiple strings and should be in a bracket.
    $array =  ["Popoola", "Olaide", "Adesola"];
    ?>

</body>
</html>