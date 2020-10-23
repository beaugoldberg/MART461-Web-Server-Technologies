<html>
      <head>
        <title>Registration</title>
      </head>

      <body>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $Firstname = $_POST["firstname"];
            $Lastname = $_POST["lastname"];
            $Username = $_POST["username"];
            $Password = $_POST["password"];
            $Gamertag = $_POST["gamertag"];
            $PhoneNum = $_POST["phoneNum"];
            //setCookie("password",$password, time() + (86400 * 30), "/");
            require("pdoconnection.php");

            $sql = 'CALL spInsertNewUser(:firstName, :lastName, :userName, :pwd, :gamerTag, :phonenum)';

            $stmt = $cn->prepare($sql);

            $stmt->bindParam(':firstName', $Firstname, PDO::PARAM_STR);
            $stmt->bindParam(':lastName', $Lastname, PDO::PARAM_STR);
            $stmt->bindParam(':userName', $Username, PDO::PARAM_STR);
            $stmt->bindParam(':pwd', $Password, PDO::PARAM_STR);
            $stmt->bindParam(':gamerTag', $Gamertag, PDO::PARAM_STR);
            $stmt->bindParam(':phonenum', $PhoneNum, PDO::PARAM_STR);

            $stmt->execute();

            $stmt->closeCursor();

            header("Location: login-conformation.php");
        }
        ?>
        <div>
        <h1>New User Information</h1>
        <form action="registeruser.php" method="POST">
            <br/>First Name:<br/>
            <input type="text" id="firstname" name="firstname">
            <br/>Last Name:<br/>
            <input type="text" id="lastname" name="lastname">
            <br/>Username:<br/>
            <input type="text" id="username" name="username">
            <br/>Password:<br/>
            <input type="text" id="password" name="password">
            <br/>Gamertag:<br/>
            <input type="text" id="gamertag" name="gamertag">
            <br/>Phone Number:<br/>
            <input type="text" id="phoneNum" name="phoneNum">
            <br/><br/>
            <button type="submit" >Register</button>
        </form>
        </div>
      </body>
</html>