<?php 

namespace Html;

class Nome {
    public $nome = "";
    public $sobrenome = "";

    public function msg() {
        echo "<p> Meu nome é {$this->nome} {$this->sobrenome}";
    }
}

$meuNome = new Nome();
$meuNome->nome = "Nicolas";
$meuNome->sobrenome = "Moraes";

?>

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
            <h3 style="color: greenyellow;">Namespace PHP</h3>
            <?php 
            
            $meuNome->msg();
            ?>
        </div>
    </div>
</body>
</html>