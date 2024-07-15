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
            <h3 style="color: greenyellow;">Inheritance PHP</h3>
            <?php 
            
            class Father {
                public $lastName;

                public function __construct($lastName) {
                    $this->lastName = $lastName;
                }

                public function fatherLastName() {
                    echo "Sobrenome do pai: {$this->lastName}";
                }

            }

            class Son extends Father{
                public function sonLastName() {
                    echo "Sobrenome do filho: {$this->lastName}";
                }
            }

            $family = new Son('Moraes');
            $family->fatherLastName();
            echo  "<br>";
            $family->sonLastName();


            
            ?>
        </div>
    </div>
</body>
</html>