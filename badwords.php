<?php
    $testo = $_GET["Testo"];
    $badword = $_GET["Censura"];
    $testo_filtrato = str_replace($badword, "***", $testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Il testo da filtrare è:</h1>
    <h3><?php echo $testo; ?></h3>
    <h1>La lunghezza del testo è</h1>
    <h3><?php echo strlen($testo); ?></h3>

    <hr>
  
    <hr>

    <h1>Testo filtrato:</h1>
    <h3><?php echo $testo_filtrato; ?></h3>
    <h1>La lunghezza del testo filtrato è</h1>
    <h3><?php echo strlen($testo_filtrato); ?></h3>


    </body>
</html>