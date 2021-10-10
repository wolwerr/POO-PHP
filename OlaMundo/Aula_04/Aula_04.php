<!DOCTYPE html>
<html lang="br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
<div>
    <pre>
    <?php
        require_once 'Caneta.php';

        $c1 = new Caneta("BIC", "Azul", 0.5);
        $c2 = new Caneta("KKK", "Verde", 1);
        $c3 = new Caneta("RRR", "Vermelha", 1.5);
        print_r($c1);
        print_r($c2);
        print_r($c3)


    ?>
    </pre>
</div>
</body>
</html>