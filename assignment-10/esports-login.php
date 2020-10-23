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
            $nameErr = $pwdErr = "";

            if (empty($_POST["txtUsername"])) { $nameErr = "Username is required"; }

            if (empty($_POST["txtPassword"])) { $pwdErr = "Password is required"; } 
            //setCookie("password",$password, time() + (86400 * 30), "/");
  
            if(!empty($_POST["txtUsername"]) && !empty($_POST["txtPassword"])) { header("Location: login-conformation.php?username=" . $username); }
        }
        ?>
        <div>
        <h1>Esports Login</h1>
        <form action="esports-login.php" method="POST">
            <br/>Username:<br/>
            <input type="text" id="txtUsername" name="txtUsername">
            <span class="error">* <?php echo $nameErr;?></span>
            <br/>Password:<br/>
            <input type="text" id="txtPassword" name="txtPassword">
            <span class="error">* <?php echo $pwdErr;?></span>
            <br/><br/>
            <button type="submit" >Sign In</button>
        </form>
        </div>
        <div>
            <h3>Not Registered</h3>
            <form action="registeruser.php">
            <button type="submit" >Register</button>
            </form>
        </div>
        <div>
            <h3>Want To Leave</h3>
            <form action="deleteuser.php">
            <button type="submit" >Delete My Account</button>
            </form>
        </div>
    </body>
</html>