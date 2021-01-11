<?PHP
require '../auxStuff/configure.php';

$database = "addressbook";
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS );
$db_found = mysqli_select_db($db_handle, $database );

if ($db_found) {

    $SQL = "INSERT INTO taddressbook (firstName, lastName, address) VALUES ('Paul', 'McCartney', 'Penny Lane')";

    #$result = mysqli_query($db_handle, $SQL);

    if(mysqli_query($db_handle, $SQL)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $SQL. " . mysqli_error($db_handle);
    }




    mysqli_close($db_handle);

    #print "Records added to the database";

}
else {
    print "Database NOT Found ";
}

?>