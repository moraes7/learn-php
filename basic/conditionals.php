<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conditionals PHP</title>
</head>
<body>
    <div id="console">
        <div id="console_title">CONSOLE</div>
        <div id="console_body">
            <h3 style="color: greenyellow;">Conditionals PHP</h3>
            <?php
            
            $age = 28;

            if ($age < 18) {
                echo "Você é adolescente.";
            } else if ($age >= 18 && $age < 60) {
                echo "Você é adulto.";
            } else if ($age >= 60) {
                echo "Você é idoso.";
            }

            
            ?>
        </div>
    </div>
</body>
</html>