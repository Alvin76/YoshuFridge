<?php

 /* <?php x = gettimeofday() ?> */
/*!!!!! YO this is to log into the SQl Data base */
/** The name of the database for phpcalles */
define('DB_NAME', 'kbzersix_YoshuFridge');

/** MySQL database username */
define('DB_USER', 'kbzersix_System');

/** MySQL database password */
define('DB_PASSWORD', 'H$3^*#YjeR.W');

/** MySQL hostname */
define('DB_HOST', 'localhost');
//$dbh=mysql_connect ("localhost", "cpUsername_dbUsername", "H$3^*#YjeR.W") <- not sure about this
//or die ('I cannot connect to the database.');
//mysql_select_db ("cpUsername_dbName")

//mary added
//probably doing this all wrong
$servername = "kbzersix_YoshuFridge";
$username= "kbzersix_System";
$password = "H$3^*#YjeR.W";
//local host?

$portnumber = 21;
//trying to create connection i think
$conn = new mysqli($servername, $username, $password);

//checking the connection *shrugs*
if ($conn -> connect_error) {
    die("Mary was bad:". $conn->connect_error);
}
echo "Connected sucessfully";


?>
