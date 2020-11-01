<html>
      <head>
        <title>User Deletion</title>
      </head>

      <body>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $user_id = $_POST["userID"];

            require("pdoconnection.php");

            $sql = 'CALL spDeleteUserByUserID(:user_id)';

            $stmt = $cn->prepare($sql);

            $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

            $stmt->execute();

            $stmt->closeCursor();

            header("Location: login-conformation.php");
        }
        ?>
        <form action="deleteuser.php" method="POST">
        <br/>User ID:<br/>
        <input type="text" id="userID" name="userID">
        <button type="submit" >Delete</button>
        </form>
      </body>
</html>