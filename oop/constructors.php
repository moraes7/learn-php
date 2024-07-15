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
            <h3 style="color: greenyellow;">Constructors PHP</h3>
            <?php 
            
            class Pet {
                public $dog;
                public $cat;

                function __construct($dog, $cat) {
                    $this->dog = $dog;
                    $this->cat = $cat;
                }

                function myPets() {
                    echo "Eu tenho um {$this->dog} e um {$this->cat}.";
                }
            }

            $pets = new Pet('cachorro', 'gato');
            $pets->myPets();

            
            ?>

        </div>
    </div>
</body>
</html>