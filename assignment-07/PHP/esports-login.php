<html>
    <head>
        <title>Griz Esports Login</title>
    </head>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $username = $_POST["txtUsername"];
            $password = $_POST["txtPassword"];
            setCookie("password",$password, time() + (86400 * 30), "/");
            
            header("Location: login-conformation.php?username=" . $username);
        }
        ?>
        <h1>Esports Login</h1>
        <form action="esports-login.php" method="POST">
            <br/>Username:<br/>
            <input type="text" id="txtUsername" name="txtUsername">
            <br/>Password:<br/>
            <input type="text" id="txtPassword" name="txtPassword">
            <br/><br/>
            <button type="submit" >Sign In</button>
        </form>
    </body>
</html>