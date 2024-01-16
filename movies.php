<?php

session_start();    

if(!(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == "true")) 
{
header("Location: login.php");
exit;
}   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NetNix</title>
    <link rel="stylesheet" href="css/adminPanel.css">
</head>
<body>
    <div id="container">
        <nav>
            <a href="#"><img src="img/netnix.svg" alt="logo" id="logo"></a>
            <ul>
                <li><a href="gebruikerspaneel.php"><b>Dashboard</a></li>
                <li><a href="accounts.php">Accounts</a></li>
                <li><a href="movies.php" id="selected">Movies</a></li>
                <li><a href="series.php">Series</a></li>
                <li><a href="logout.php">Uitloggen</b></a></li>
            </ul>
        </nav>
        <div id="content">
            <h1>Gebruikerspaneel</h1>
        </div id="content">
    </div>
</body>
</html>