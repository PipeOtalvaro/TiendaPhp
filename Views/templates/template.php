<?php

namespace Views;

$template = new Template();

class Template
{

    public function __construct()
    {
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Administración de clientes</title>
            <link rel="stylesheet" href="<?php echo URL; ?> Views/templates/css/bootstrap.css>">
        </head>

        <body>

        <?php
    }
    public function __destruct()
    {
        ?>

        </body>

        </html>

<?php

    }
}
?>