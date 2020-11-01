<html>
    <head>
        <title>Griz Esports Login</title>
    </head>
    <body>
        <?php
        $nameErr = $pwdErr = "";
        $userID = 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $username = $_POST["txtUsername"];
            $password = $_POST["txtPassword"];

            if (empty($_POST["txtUsername"])) { $nameErr = "Username is required"; }

            if (empty($_POST["txtPassword"])) { $pwdErr = "Password is required"; } 
            //setCookie("password",$password, time() + (86400 * 30), "/");
  
            if(!empty($_POST["txtUsername"]) && !empty($_POST["txtPassword"])) 
            { 
                // Start Session to store and grab variables
                session_start();
                echo($_SESSION['login_attempts']);
                //$_SESSION['login_attempts'] = 0;       -- Uncomment this to set the login attempts back to zero when messing with functionality

                // Protect against XSS attacks
                $username = htmlspecialchars($username);
                $password = htmlspecialchars($password);

                //Check to see if login variable has been intialized
                if (!isset($_SESSION['login_attempts']))
                {
                    $_SESSION['login_attempts'] = 0;
                }

                // If max attempts has been reached it will lock the user out of thier account
                if ($_SESSION['login_attempts'] > 3)
                {
                    echo("Your locked out of your account");
                }
                else
                {
                    require("pdoconnection.php");

                    $sql = 'CALL spValidateUser(:username, :pwd)';
                    $stmt = $cn->prepare($sql);
                    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
                    $stmt->bindParam(':pwd', $password, PDO::PARAM_STR);
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    $stmt->execute();

                    $row = $stmt->fetch();
                    
                    if ($row)
                    {
                        $userID = $row['userID'];
                        $_SESSION['UserID'] = $userID;
                        $_SESSION['login_attempts'] = 0;

                        header("Location: login-conformation.php");
                    }
                    else
                    {
                        echo("Invalid Login");
                        $_SESSION['login_attempts']++;
                    }
                }
            }
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