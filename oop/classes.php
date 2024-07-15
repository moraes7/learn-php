<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP OOP</title>
</head>
<body>
    <div id="console">
        <div id="console_title">CONSOLE</div>
        <div id="console_body">
            <h3 style="color: greenyellow;">Classes em PHP</h3>
        <?php 

        class Pen {
        
            public $model;
            public $color;
            public $tip;
            public $charge;
            public $capped;
        
            function write() {
                if($this->capped == true) {
                    echo "ERRO! Não posso escrever!";
                } else {
                    echo "Escrevendo...";
                }
            }
        
            function cap() {
                $this->capped = true;
            }
        
            function uncap() {
                $this->capped = false;
            }
        }

        $pen1 = new Pen();
        $pen1->write();

        echo "<br>";
        echo "<br>";
       
        class Person {

            public $name;
            public $age;
            public $nationality;

            function speakName($name) {
                $this->name = $name;
                return $this->name;
            }

            function speakAge($age) {
                $this->age = $age;
                return $this->age;
            }

            function speakNationality($nationality) {
                $this->nationality = $nationality;
                return $this->nationality;
            }


        }

        $person1 = new Person();
        $person1->speakName('Nicolas');
        $person1->speakAge(28);
        $person1->speakNationality('Brasileiro');

       // A
        echo "Olá! Meu nome é " . $person1->name . ", tenho " . $person1->age . " anos e sou " . $person1->nationality . ".";
        
        echo "<br>";

        // B
        echo "Olá! Meu nome é {$person1->name}, tenho {$person1->age} anos e sou {$person1->nationality}."


        

        ?>

        </div>
    </div>
</body>
</html>


