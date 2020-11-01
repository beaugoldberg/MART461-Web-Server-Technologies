<?php
     require("pdoconnection.php");

     session_start();
     $userID = $_SESSION['UserID'];

     try {
          $sql = 'CALL spDisplayUserByUserID(:userID)';
          $stmt = $cn->prepare($sql);
          $stmt->bindParam(':userID', $userID, PDO::PARAM_STR);
          $stmt->setFetchMode(PDO::FETCH_ASSOC);
          $stmt->execute();
      } 
      catch (PDOException $e) 
      {
          die("Error occurred:" . $e->getMessage());
      }

      while ($r = $stmt->fetch())
      {
          echo "Name: " . $r['firstName'] . " " . $r['lastName'] . "<br/>Username: " . $r['username'] . "<br/>Gamertag: " . $r['gamertag'] . "<br/>Phone Number: " . $r['phoneNum'] . "<br/><br/>";
      }
?>
<html>
      <head>
        <title>User Information</title>
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