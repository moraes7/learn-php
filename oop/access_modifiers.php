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
            <h3 style="color: greenyellow;">Access Modifiers PHP</h3>
            <?php 
            
            class Car {
                public $model;
                private $name;
                protected $color;

                public function __construct($model, $name, $color) {
                    $this->model = $model;
                    $this->name = $name;
                    $this->color = $color;
                }


                public function thatCar() {
                    echo "Aquele carro é uma {$this->model} {$this->name} {$this->color}";
              
                }

                private function carSpeed() {
                    $this->model = "340 Km/h";
                }


                public function carPrice() {
                    if($this->model == 'Ferrari') {
                        echo "Este modelo custa R$1.000.000";
                    }
                    else {
                        echo "Este modelo não é uma Ferrari";
                    }
                }


    
            }

            $thatCar = new Car('Ferrari', '458 Italia', 'Verde');
            $thatCar->thatCar(); 
            echo "<br>";
            $thatCar->carPrice(); 
            
            
            ?>
        </div>
    </div>
</body>
</html>