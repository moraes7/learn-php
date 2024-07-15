<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="console">
        <div id="console_title">CONSOLE</div>
        <div id="console_body">
            <h3 style="color: greenyellow;">Abstract Classes</h3>
            <?php 
            
        
            
            abstract class Time {
                public $time;

                public function __construct($time) {
                    $this->time = $time;
                }

                abstract public function falarTime() : string;
            }

            class Palmeiras extends Time {
                public function falarTime() : string {
                    return "Eu sou $this->time";
                }
            }

            class SaoPaulo extends Time {
                public function falarTime() : string {
                    return "Eu sou $this->time";
                }
            }

            class Corinthians extends Time {
                public function falarTime() : string {
                    return "Eu sou $this->time";
                }
            }

            $palmeiras = new Palmeiras('palmeirense!');
            echo $palmeiras->falarTime();
            echo "<br>";

            $saopaulo = new SaoPaulo("são paulino");
            echo $saopaulo->falarTime();
            echo "<br>";

            $corinthians = new Corinthians("corintiano");
            echo $corinthians->falarTime();
            ?>
        </div>
    </div>
</body>
</html>


