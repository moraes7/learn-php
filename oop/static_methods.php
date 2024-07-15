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
            <h3 style="color: greenyellow;">Static Methods PHP</h3>
            <?php 
            
            class Teste {
                public static $status = 'online';
                public $nome;
            }

            $t1 = new Teste();
            echo $t1->nome = 'Teste 1';
            echo Teste::$status='offline';

            class Caneta {
                
                public static function tampada() {
                    echo "A caneta está tampada";
                }
            }

            class Tampar {

                public function tampar_caneta() {
                    Caneta::tampada();
                }
            }

            echo "<br>";
            $caneta = new Tampar();
            
            
            
            ?>
        </div>
    </div>
</body>
</html>