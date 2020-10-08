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
echo("Connected successfully<br><br>");

$sql = "SELECT firstName, lastName, gamertag, phoneNum FROM esports.users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo("Name: " . $row["firstName"] . " " . $row["lastName"] . "<br>");
        echo("Gamertag: " . $row["gamertag"] . "<br><br>");
    }
}
else {
    echo("0 results");
}
$conn->close();

?>

</body>
</html>