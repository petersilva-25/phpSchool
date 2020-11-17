<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>challenge 01</title>

<style>
        main {
            position: relative;
        }
        span {
            height: 40px;
            width: 40px;
            border: solid black 1px;
            display: inline-block;
            margin: 1px;
        }
    </style>
</head>

<body>

    <!--#############################################################################################################-->
<main>
    <?php
    include '../auxStuff/rainbowIterator.php';
    echo "<h1>Using Iterator: $iterator</h1>";

    $red = 0;
    $green = 0;
    $blue = 0;

    for ($red=0; $red<255; $red += $iterator) {
        for($green=0; $green<255; $green += $iterator){
            for($blue=0; $blue<255; $blue += $iterator){
                $hexRed = sprintf('%02x', $red);
                $hexGreen = sprintf('%02x', $green);
                $hexBlue = sprintf('%02x', $blue);
                echo "<span style='background-color: rgb($red,$green,$blue)' title=#$hexRed$hexGreen$hexBlue></span>";
            }
        }
    }
    ?>


</main>
</body>

</html>