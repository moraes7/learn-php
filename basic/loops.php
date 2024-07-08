<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Loops PHP</title>
</head>
<body>
    <div id="console">
        <div id="console_title">CONSOLE</div>
        <div id="console_body">
            <h3 style="color: greenyellow;">Loops PHP</h3>
            <?php
            echo "Loop While <br>";
            $num = 10;

            while ($num >= 0) {
                echo "$num <br>";
                $num--;
            }

            echo "Feliz Ano Novo! <br>";
            echo "- - - - - - - - - - - - - - - - - - - - <br>";

            echo "Loop For <br>";
            for($x = 0; $x <= 10; $x++) {
                echo "$x <br>";
            }

            
            
            ?>

        </div>
    </div>
</body>
</html>