<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes</title>
</head>
<body>
    <h1>Note list!</h1>
    <?php
    $notes = [
        "programmēt",
        "iet gulēt"
    ];

    echo "<ul>";
    foreach($notes as $note) {
        echo "<li>" . $note . "</li>";
    }
    echo "</ul>";
    ?>  
</body>
</html>
