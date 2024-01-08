<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censored paragraph</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        
    <?php 
        $paragraph = $_GET['paragraph'];
        $censored_word = $_GET['censor'];
        // paragrafo originale
        echo "<h2>Paragrafo originale:</h2>";
        echo "$paragraph";
        echo "<p>Lunghezza: " . strlen($paragraph) . "</p>";
        // censura della parola
        $censored_paragraph = str_ireplace($censored_word, "***", $paragraph);
        // paragrafo censurato
        echo "<h2>Paragrafo modificato:</h2>";
        echo "$censored_paragraph";
        echo "<p>Lunghezza: " . strlen($censored_paragraph) . "</p>";
    ?>
    </div>

</body>
</html>