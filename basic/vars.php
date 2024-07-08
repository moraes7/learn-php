<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vars PHP</title>
</head>
<body>
    <div id="console">
        <div id="console_title">CONSOLE</div>
        <div id="console_body">
            <h3 style="color: greenyellow;">Variáveis em PHP</h3>
            <?php
            // Exemplo de Variáveis
            $name = "Nicolas";
            $lastname = "Moraes";
        
            $cakes = [
                "chocolate",
                "cenoura",
                "morango",
                "fubá"
            ];
            // Constante
            define("COUNTRY", "Brasil");
                
            echo "Olá! Meu nome é $name, meu sobrenome é $lastname e eu moro no " . COUNTRY . "<br>";
            
            echo "$name \"nome do meio\" $lastname <br>";
            
            echo "Olá! eu moro no " . COUNTRY . " e meu nome é $name <br>";
        
            echo "Esse bolo é de $cakes[3] e aquele outro é de $cakes[0]";
?>
        </div>
    </div>
</body>
</html>