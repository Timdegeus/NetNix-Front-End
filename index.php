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
        <h1>Inloggen gebruikerspaneel</h1>
        <form action="gebruikerspaneel.php" method="post">
            <div>
                <label>E-mailadres</label>
                <input type="text" placeholder="Vul e-mailadres in" name="username">
            </div>
            <div>
                <label>Wachtwoord</label>
                <input type="password" placeholder="Vul wachtwoord in" name="password">
            </div>
            <div>
                <input type="submit" name="submit">
            </div>
        </form>
    </div>
</body>
</html>