<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>c11 - PHP Form Handling</title>
</head>

<body>
	<h1>School - PHP</h1>
    <h2>c11 - PHP Form Handling</h2>
	

    <!--################################################################################################################
    Dynamic Websites
    The Websites provide the functionalities that can use to store, update, retrieve, and delete the data in a database.

    What is the Form?
    A Document that containing black fields, that the user can fill the data or user can select the data.Casually the data will store in the data base

    The PHP superglobals $_GET and $_POST are used to collect form-data.
    -->

    <!--
        PHP - A Simple HTML Form
    The example below displays a simple HTML form with two input fields and a submit button:
    -->
    
    <form action="welcome.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>

    <!--POST
        When the user fills out the form above and clicks the submit button, 
        the form data is sent for processing to a PHP file named "welcome.php". 
        The form data is sent with the HTTP POST method.

        To display the submitted data you could simply echo all the variables. 
        The "welcome.php" looks like this:

        <html>
        <body>

        Welcome <?php echo $_POST["name"]; ?><br>
        Your email address is: <?php echo $_POST["email"]; ?>

        </body>
        </html>

        The output could be something like this:

        Welcome John
        Your email address is john.doe@example.com
        -->



    <!--The same result could also be achieved using the HTTP GET method:-->


    <form action="welcome_get.php" method="get">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>

        <!--
        and "welcome_get.php" looks like this:

        <html>
        <body>

        Welcome <?php echo $_GET["name"]; ?><br>
        Your email address is: <?php echo $_GET["email"]; ?>

        </body>
        </html>
            -->





</body>
</html>