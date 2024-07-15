<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>OOP PHP</title>
</head>
<body>
    <div id="console">
        <div id="console_title">CONSOLE</div>
        <div id="console_body">
            <h3 style="color: greenyellow;">Constants PHP</h3>
            <?php 
            
            class Hello {
                const WELCOME = "Olá, seja bem-vindo!";
            }

            echo Hello::WELCOME;

            echo "<br>";
            ////////////////////////////////////////////////////  

            class Goodbye {
                const GOODBYE = "Obrigado, volte sempre!";

                public function sayGoodbye() {
                    echo self::GOODBYE;
                }
            }

            $goodbye = new Goodbye();
            $goodbye->sayGoodbye();
            
            
            ?>
        </div>
    </div>
</body>
</html>