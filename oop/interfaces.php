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
            <h3 style="color: greenyellow;">Interfaces PHP</h3>
            <?php 
            
            interface Animal {
                public function makeSound();
            }

            class Dog implements Animal {
                public function makeSound() {
                    echo "Auau <br>";
                }
            }

            class Cat implements Animal {
                public function makeSound() {
                    echo "Miau";
                }
            }

            $dog = new Dog();
            $cat = new Cat();
            $animals = array($dog, $cat);

            foreach($animals as $animal) {
                $animal->makeSound();
            }
            
            
            
            ?>
        </div>
    </div>
</body>
</html>