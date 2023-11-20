<?php

$emailErr = $passwordErr = "";
$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["email"]))
    {
        $emailErr = "Vul een e-mailadres in.";
    }
    else
    {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $emailErr = "Vul een geldig e-mailadres in.";
        }
    }
    
    if (empty($_POST["password"]))
    {
        $passwordErr = "Vul een wachtwoord in.";
    }
    else
    {
        $password = $_POST["password"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NetNix</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id = "container">
        <nav>
            <a href="#"><img src="img/netnix.svg" alt="logo" id="logo"></a>
        </nav>
        <h1>Inloggen gebruikerspaneel</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div>
                <label for="email">E-mailadres</label>
                <input type="text" placeholder="Vul e-mailadres in" name="email" id="email" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailErr;?></span>
            </div>
            <div>
                <label for="password">Wachtwoord</label>
                <input type="password" placeholder="Vul wachtwoord in" name="password" id="password" value="<?php echo $password;?>">
                <span class="error">* <?php echo $passwordErr;?></span>
            </div>
            <div>
                <button type="submit" name="submit">Inloggen</button>
            </div>
        </form>
    </div>
</body>
</html>