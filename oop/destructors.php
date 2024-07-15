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
            <h3 style="color: greenyellow;">Destructors PHP</h3>
            <?php 
            
            class Fruit {
                public $name;
                public $color;

                function __construct($name, $color) {
                    $this->name = $name;
                    $this->color = $color;
                }

                function __destruct() {
                    echo "The fruit is {$this->name} and the color is {$this->color}.";
                }
            }

            $apple = new Fruit('Apple', 'red');
            ?>
        </div>
    </div>
</body>
</html>