<?php 
    require("pdoconnection.php");

    try {
    
        // connecting to the database
        //  execute the stored procedure
         $sql = 'CALL spDisplayAllUsers()';
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
         echo "Name: " . $r['firstName'] . " " . $r['lastName'] . "<br/>Username: " . $r['username'] . "<br/>Gamertag: " . $r['gamertag'] . "<br/>Phone Number: " . $r['phoneNum'] . "<br/><br/>";
     }
?>

<html>
      <head>
        <title>All Users</title>
      </head>

      <body>
        <form action="login-conformation.php" method="POST">
        <button type="submit" >Return To Options</button>
        </form>
        <form action="esports-login.php" method="GET">
        <button type="submit" >Sign Out</button>
        </form>
      </body>
</html>

