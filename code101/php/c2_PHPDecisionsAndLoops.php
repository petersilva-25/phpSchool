<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>c2 PHP Decisions and Loops</title>
</head>

<body>
	<h1>School - PHP</h1>
    <h2>c2 PHP Decisions and Loops</h2>
	

    <!--################################################################################################################
    PHP if...else...elseif Statements
    
    Conditional statements are used to perform different actions based on different conditions.

    In PHP we have the following conditional statements:

    if statement - executes some code if one condition is true
    if...else statement - executes some code if a condition is true and another code if that condition is false
    if...elseif...else statement - executes different codes for more than two conditions
    switch statement - selects one of many blocks of code to be executed
    -->



    <!--PHP - The if Statement
    The if statement executes some code if one condition is true.
    -->
    <?php
    $t = date("H");    #vai buscar a hora

    if ($t < "20") {
        echo "Have a good day!";   
    }
    echo "<br>";
    ?>

    <!--PHP - The if...else Statement
    The if...else statement executes some code if a condition is true and another code if that condition is false.-->
    <?php
    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    } 
    else {
        echo "Have a good night!";
    }
    echo "<br>";
    ?>

    <!--PHP - The if...elseif...else Statement
    The if...elseif...else statement executes different codes for more than two conditions.
    -->
    <?php
    $t = date("H");

    if ($t < "10") {
        echo "Have a good morning!";
    } 
    elseif ($t < "20") {
        echo "Have a good day!";
    } 
    else {
        echo "Have a good night!";
    }
    echo "<br>";
    ?>

    <!--The PHP switch Statement
    Use the switch statement to select one of many blocks of code to be executed.
    -->
    <?php
    $favcolor = "red";

    switch ($favcolor) {
    case "red":{
        echo "Your favorite color is red!";
        break;
        }
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
    }
    echo "<br>";
    ?>



    <!--################################################################################################################
        PHP Loops

        Loops are used to execute the same block of code again and again, as long as a certain condition is true.

        In PHP, we have the following loop types:

        while - loops through a block of code as long as the specified condition is true
        do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
        for - loops through a block of code a specified number of times
        foreach - loops through a block of code for each element in an array
        -->

    
    <!--The PHP while Loop
    The while loop executes a block of code as long as the specified condition is true.
    -->

    <?php
    $x = 1;
    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;            #atenção à incrementação ou decrementação para sair do ciclo
    }
    echo "<br>";
    ?>


    <!--
        The PHP do...while Loop
    The do...while loop will always execute the block of code once, 
    it will then check the condition, and repeat the loop while the specified condition is true.

    Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. 
    This means that the do...while loop will execute its statements at least once, even if the condition is false.
    -->

    <?php
    $x = 1;

    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);
    echo "<br>";
    ?>

    <!--The PHP for Loop
    The for loop is used when you know in advance how many times the script should run.
    -->
    <?php
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
    ?>

    <!--The PHP foreach Loop
    The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
    -->
    <?php
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo "$value <br>";
    }
    ?>
    














</body>
</html>