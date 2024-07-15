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
            <h3 style="color: greenyellow;">Iterables PHP</h3>
            <?php 
            
            class TimesSP implements Iterator {
                
                private $array = ["Palmeiras", "São Paulo", "Santos", "Corinthians"];

                private $pointer;

                public function current() {
                    //echo "Current";
                    return $this->array[$this->pointer];
                }

                public function key() {
                    //echo "Key";
                    return $this->pointer;
                }

                public function next() {
                    //echo "Next";
                    $this->pointer++;
                }

                public function rewind() {
                    //echo "Rewind";
                    $this->pointer = 0;
                }

                public function valid() {
                    //echo "Valid";
                    return isset($this->array[$this->pointer]);
                }
            }

            $times = new TimesSP();

            echo "Times SP: ", "\n";
            foreach($times as $key => $current) {
                echo $key, '=>', $current, "\n";
               
            }


            ?>
        </div>
    </div>
</body>
</html>