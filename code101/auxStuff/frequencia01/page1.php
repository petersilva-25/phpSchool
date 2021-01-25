<?PHP
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
	header ("Location: login.php");
}

?>

<html>
<head>
    <title>Basic Login Script</title>
</head>

<body>
    <h1>ART - página 1</h1>

	<p>User Logged in</p>
    <br>
    <a href = index.php>Log out</a>
    <hr>
    <h1> Lista de pintores e quadros </h1>

</body>
</html>