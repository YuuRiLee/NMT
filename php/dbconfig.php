
 <?php

$host = 'localhost';

$user = 'yurilee';

$pw = 'yurilee00';

$dbName = 'yurilee';

$conn = new mysqli($host, $user, $pw, $dbName);

mysqli_query($conn, "set session character_set_connection=utf8;");

mysqli_query($conn, "set session character_set_results=utf8;");

mysqli_query($conn, "set session character_set_client=utf8;");

?>