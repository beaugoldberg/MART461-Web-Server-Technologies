<html>
<body>
<?php require('mysqliconnection.php')?>
<!-- php require('pdoconnection.php'); -->
<?php

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