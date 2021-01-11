<!DOCTYPE html>

<?php
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>c18 PHP Cookies</title>
</head>
<body>

    <h1>School - PHP</h1>
    <h2>c18 - PHP Cookies</h2>

    <!--
What is a Cookie?
A cookie is often used to identify a user. 
A cookie is a small file that the server embeds on the user's computer. 
Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.

Create Cookies With PHP
A cookie is created with the setcookie() function.

Syntax
setcookie(name, value, expire, path, domain, secure, httponly);
Only the name parameter is required. All other parameters are optional.




    PHP Create/Retrieve a Cookie
The following example creates a cookie named "user" with the value "John Doe". The cookie will expire after 30 days (86400 * 30). The "/" means that the cookie is available in entire website (otherwise, select the directory you prefer).

We then retrieve the value of the cookie "user" (using the global variable $_COOKIE). We also use the isset() function to find out if the cookie is set:

Note: The setcookie() function must appear BEFORE the <html> tag.
        -->

    <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
    ?>

    <p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>


<!--

Note: The value of the cookie is automatically URLencoded when sending the cookie, and automatically decoded when received (to prevent URLencoding, use setrawcookie() instead).


Modify a Cookie Value
To modify a cookie, just set (again) the cookie using the setcookie() function:

    -->

    
</body>
</html>