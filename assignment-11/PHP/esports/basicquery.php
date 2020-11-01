<?php //require('mysqliconnection.php'); ?>
<?php 

//insert part
// prepare and bind
/*
$stmt = $conn->prepare("INSERT INTO people (firstname, lastname, username) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $username);

// set parameters and execute
$firstname = "Greg";
$lastname = "Hollenbeck";
$username = "greg@greg.com";
$stmt->execute();

$firstname = "Brewer";
$lastname = "Johnanna";
$username = "brewer@johana.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
*/
/// select part
/*
$sql = "SELECT firstname, lastname, username, pwd FROM people";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "first name: " . $row["firstname"]. " - last name: " . $row["lastname"]. " - username: " . $row["username"]. " - pwd: " . $row["pwd"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
*/

require('pdoconnection.php');

$statename = "Alabama";
$stateabbreviation = "AL";

$sql = 'CALL spInsertNewState(:statename, :stateabbreviation)';

$stmt = $cn->prepare($sql);

$stmt->bindParam(':statename', $statename, PDO::PARAM_STR);
$stmt->bindParam(':stateabbreviation', $stateabbreviation, PDO::PARAM_STR);

$stmt->execute();

$stmt->closeCursor();


try {
    
   // connecting to the database
   //  execute the stored procedure
    $sql = 'CALL spGetAllStates()';
    // call the stored procedure
    $q = $cn->query($sql);
    // gets array
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error occurred:" . $e->getMessage());
}
/// iterates over the array
while ($r = $q->fetch())
{
    echo $r['stateName'] . " " . $r['stateAbbr'] . "<br />";
}
  


// prepare and bind
/*$stmt = $conn->prepare("INSERT INTO people (firstname, lastname, username) 
VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $username);

// set parameters and execute
$firstname = "Greg";
$lastname = "Hollenbeck";
$username = "greg@greg.com";
$stmt->execute();

$firstname = "Brewer";
$lastname = "Johnanna";
$username = "brewer@johana.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
*/
//$conn->close();


//$cn->close();

?>

