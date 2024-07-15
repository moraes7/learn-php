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
            <h3 style="color: greenyellow;">Traits PHP</h3>
            <?php
            
            trait message1 {
                public function msg1() {
                    echo "Olá, ";
                }
            }
            
            trait message2 {
                public function msg2() {
                    echo "seja bem vindo!";
                }
            }

            class Hello {
                use message1;
            }

            class Welcome {
                use message2;
            }

            $hello = new Hello();
            $hello->msg1();

            $hello = new Welcome();
            $hello->msg2();

            ?>
        </div>
    </div>
</body>
</html>