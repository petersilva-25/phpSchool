<?PHP

$user_name = "root";
$password = "abcABC123#";
$database = "addressbook";
$server = "127.0.0.1";

mysqli_connect($server, $user_name, $password);


print "Connection to the Server opened";

?>