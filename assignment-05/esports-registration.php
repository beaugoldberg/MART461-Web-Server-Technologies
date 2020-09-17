<!DOCTYPE HTML>
<html>
    <head>
        <style> .error {color: #FF0000;} </style>
        <title>Griz Esports Registration</title>
    </head>
    <body>
        <?php
        $nameErr = $emailErr = $codeErr = $phoneErr = "";
        $name = $email = $address = $phonenum = $username = "";
        $valorant = $apex = $cod = $smashbros = $fortnite = $rogue = $league = $otherGame = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            if (empty($_POST["txtName"])) { $nameErr = "Name is required"; }
            else { 
                $name = test_input($_POST["txtName"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                    $nameErr = "Only letters and white space allowed"; 
                }
            }

            if (empty($_POST["txtEmail"])) {
                $emailErr = "Email is required";
            } 
            else {
                $email = test_input($_POST["txtEmail"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if (empty($_POST["txtPhoneNum"])) { $phoneErr = "Phone number is required"; }
            if (empty($_POST["codeofconduct"])) { $codeErr = "Code of conduct must be accepted";}

            $email = $_POST["txtEmail"];
            $address = $_POST["txtAddress"];
            $phonenum = $_POST["txtPhoneNum"];
            $username = $_POST["txtGamertag"];
            
            if (!empty($_POST["chkValorant"])) { $valorant = $_POST["chkValorant"]; }
            if (!empty($_POST["chkApex"])) { $apex = $_POST["chkApex"]; }
            if (!empty($_POST["chkCOD"])) { $cod = $_POST["chkCOD"]; }
            if (!empty($_POST["chkSmash"])) { $smashbros = $_POST["chkSmash"]; }
            if (!empty($_POST["chkFortnite"])) {$fortnite = $_POST["chkFortnite"]; }
            if (!empty($_POST["chkRogue"])) { $rogue = $_POST["chkRogue"]; }
            if (!empty($_POST["chkLeague"])) { $league = $_POST["chkLeague"]; }
            if (!empty($_POST["chkOther"])) { $otherGame = $_POST["otherGame"]; }
            $games = array($valorant, $apex, $cod, $smashbros, $fortnite, $rogue, $league, $otherGame);

            if (!empty($_POST["txtName"]) && !empty($_POST["txtEmail"]) && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z-' ]*$/",$name) && !empty($_POST["codeofconduct"])) {
                setCookie("name",$name, time() + (86400 * 30), "/");

                session_start();
                $_SESSION["email"] = $_POST["txtEmail"];
                $_SESSION["address"] = $_POST["txtAddress"];
                $_SESSION["phoneNum"] = $_POST["txtPhoneNum"];
                $_SESSION["games"] = $games;

                header("Location: registration-conformation.php?username=" . $username);
            }
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <form action='esports-registration.php' method="POST">
            <h1>Esports Registration</h1>

            <br/>Full Name:<br/>
            <input type="text" id="txtName" name="txtName" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span>
            <br/>Email:<br/>
            <input type="text" id="txtEmail" name="txtEmail" value="<?php echo $email;?>">
            <span class="error">* <?php echo $emailErr;?></span>
            <br/>Address:<br/>
            <input type="text" id="txtAddress" name="txtAddress" value="<?php echo $address;?>">
            <br/>Phone Number:<br/>
            <input type="text" id="txtPhoneNum" name="txtPhoneNum" value="<?php echo $phonenum;?>">
            <span class="error">* <?php echo $phoneErr;?></span>
            <br/>Gamer Tag:<br/>
            <input type="text" id="txtGamertag" name="txtGamertag" value="<?php echo $username;?>">
            <br/>
            <br/>Games (Select all that apply):<br/>
            <input type="checkbox" name="chkValorant" value="Valorant">Valorant<br/>
            <input type="checkbox" name="chkCOD" value="COD: Modern Warfare">COD: Modern Warfare<br/>
            <input type="checkbox" name="chkApex" value="Apex Legends">Apex Legends<br/>
            <input type="checkbox" name="chkSmash" value="Super Smash Bros.">Super Smash Bros.<br/>
            <input type="checkbox" name="chkFortnite" value="Fortnite">Fortnite<br/>
            <input type="checkbox" name="chkRogue" value="Rogue Company">Rogue Company<br/>
            <input type="checkbox" name="chkLeague" value="League of Legends">League of Legends<br/>
            <input type="checkbox" name="chkOther" value="other">Other<br/>
            <input type="text" id="txtOtherGame" name="otherGame"><br/><br/>
            <input type="checkbox" name="codeofconduct" value="coc">Do you accept the student code of conduct?
            <span class="error">* <?php echo $codeErr;?></span><br><br>

            <button type="submit">Submit Form</button>

        </form>
    </body>
</html>