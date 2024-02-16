<?php
$paragraph = $_GET['paragraph'];
$word = $_GET['word'];


$censored_paragraph = str_replace($word, '***', $paragraph);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div>
            <h2>Paragrafo textarea</h2>
            <p><?php echo $paragraph ?></p>
            <p><?php echo strlen($paragraph) ?></p>
        </div>
        <div>
            <h2>Parola da censurare</h2>
            <p><?php echo $word ?></p>
        </div>
        <div>
            <h2>Paragrafo censurato</h2>
            <p><?php echo $censored_paragraph ?></p>
            <p><?php echo strlen($censored_paragraph) ?></p>
        </div>
</main>
</body>
</html>