<!DOCTYPE html>
<html lang="br">
<head>

    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
<h1>Projeto Controle Remoto</h1>
<pre>
<div>
    <?php
        require_once 'ControleRemoto.php';
        $c = new ControleRemoto();
        $c->ligar();
        $c->maisVolume();



    ?>
</div>
    </pre>
</body>
</html>