<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="second.php" method="get">
        <h1>Censuratore automatico</h1>
        <h2>Scrivi qualcosa nel paragrafo</h2>
        <textarea name="paragraph" id="paragraph" cols="50" ></textarea>
        <h2>Parola da censurare</h2>
        <input type="text" name="censor" id="censor">
        <input type="submit" value="Invia">
    </form>
</body>
</html>