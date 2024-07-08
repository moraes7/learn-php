<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Functions PHP</title>
</head>
<body>
    <div id="console">
        <div id="console_title">CONSOLE</div>
        <div id="console_body">
            <h3 style="color: greenyellow;">Funções em PHP</h3>
            <?php
            function sendMessage(string $name, string $message) {
                echo "Olá " . $name . $message . "<br>";
            }    
        
            sendMessage('Nicolas, ', 'seja bem-vindo!');
        
            // ---------------------------------------------------------
        
            function sendAnotherMessage(string $name, string $message): string {
                return "Olá " . $name . $message . "<br>";
            }
        
            $result = sendAnotherMessage('Nicolas,', ' tenha um bom dia!');
        
            echo $result;
        
            // ---------------------------------------------------------
        
            function math(int $num1, int $num2): string {
                $soma = $num1 + $num2;
                    
                return "$num1 + $num2 = $soma"; 
            };
        
            echo math(10, 10);
            
            ?>
        </div>
    </div>
</body>
</html>