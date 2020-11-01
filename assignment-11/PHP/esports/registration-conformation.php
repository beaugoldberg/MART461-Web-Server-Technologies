<?php
    // Start the session to get access to information
    session_start();

    // Gather Variables
    $full_name = $_COOKIE["name"];
    $email = $_SESSION["email"];
    $address = $_SESSION["address"];
    $phone_num = $_SESSION["phoneNum"];
    $gamertag = $_GET["username"];
    $games = $_SESSION["games"];

    echo("Registration Conformation:" . "<br>");
    echo("--------------------------" . "<br>");
    echo("Name: " . $full_name . "<br>");
    echo("Email: " . $email . "<br>");
    echo("Address: " . $address . "<br>");
    echo("Phone Number: " . $phone_num . "<br>");
    echo("Gamertag: " . $gamertag . "<br>");   
    echo("<br>");
    echo("Games Selected:<br>");
    for ($i = 0; $i < count($games); $i++)
    {
        if ($games[$i] != "")
        {
            echo(" - " . $games[$i] . "<br>");
        }
    }
?>