<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Database PHP</title>
</head>
<body>
    <div id="console">
        <div id="console_title">CONSOLE</div>
        <div id="console_body">
            <h3 style="color: greenyellow;">Connect MySQL</h3>
            <?php 

            $db_server = "localhost";
            $db_user = "root";
            $db_password = "";
            $db_name = "connect_mysql";
            $conn = "";

            try {
                $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
            }
            catch(mysqli_sql_exception) {
                echo "Você não está conectado!";
            }

            if($conn) {
                echo "Você está conectado!";
            }


            ?>

        </div>
    </div>
</body>
</html>


