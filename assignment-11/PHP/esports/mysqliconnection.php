<html>
<body>
<?php

$servername = "localhost";
$username = "newuser";
$password = "test123!!";
$dbname = "esports";
//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
</body>
</html>