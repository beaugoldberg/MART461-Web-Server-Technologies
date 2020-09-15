<html>
    <head>
        <title>Griz Esports Registration</title>
    </head>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $username = $_POST["txtGamertag"];

            $full_name = $_POST["txtName"];
            $email = $_POST["txtEmail"];
            $address = $_POST["txtAddress"];
            $phonenum = $_POST["txtPhoneNum"];
            setCookie("name",$full_name, time() + (86400 * 30), "/");

            session_start();
            $_SESSION["email"] = $_POST["txtEmail"];
            $_SESSION["address"] = $_POST["txtAddress"];
            $_SESSION["phoneNum"] = $_POST["txtPhoneNum"];

            header("Location: registration-conformation.php?username=" . $username);
        }
        ?>
        <form action='esports-registration.php' method="POST">
            <h1>Esports Registration</h1>

            <br/>Full Name:<br/>
            <input type="text" id="txtName" name="txtName">
            <br/>Email:<br/>
            <input type="text" id="txtEmail" name="txtEmail">
            <br/>Address:<br/>
            <input type="text" id="txtAddress" name="txtAddress">
            <br/>Phone Number:<br/>
            <input type="text" id="txtPhoneNum" name="txtPhoneNum">
            <br/>Gamer Tag:<br/>
            <input type="text" id="txtGamertag" name="txtGamertag">
            <br/>
            <br/>Games (Select all that apply):<br/>
            <input type="radio" name="chkValorant" value="valorant">Valorant<br/>
            <input type="radio" name="chkCOD" value="cod">COD: Modern Warfare<br/>
            <input type="radio" name="chkApex" value="apex">Apex Legends<br/>
            <input type="radio" name="chkSmash" value="smashbros">Super Smash Bros.<br/>
            <input type="radio" name="chkFortnite" value="fortnite">Fortnite<br/>
            <input type="radio" name="chkRogue" value="rogue">Rogue Company<br/>
            <input type="radio" name="chkLeague" value="league">League of Legends<br/>
            <input type="radio" name="chkOther" value="other">Other<br/>
            <input type="text" id="txtOtherGame" name="txtOtherGame"><br/><br/>

            <button type="submit" >Submit Form</button>

        </form>
    </body>
</html>