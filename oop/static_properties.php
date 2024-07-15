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
            <h3 style="color: greenyellow;">Static Properties</h3>
            <?php 
            
            class Num {
                public static $value = 123;
            }

            class X extends Num {
                public function numbers() {
                    return parent::$value;
                }
            }

            echo X::$value;

            $x = new X();
            echo $x->numbers();
            
            
            
            ?>
        </div>
    </div>
</body>
</html>