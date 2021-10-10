<!DOCTYPE html>
<html lang="br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
<div>
    <h1>
    <pre>
    <?php
    require_once "Mamifero.php";
    require_once "Cachorro.php";
    require_once "Lobo.php";

    $c = new Lobo();
    $c->emitirSom();

    $k = new Cachorro();
    $k->emitirSom();
    $k->reagirFrase("Olá");
    $k->reagirFrase("Vai Apanhar!");

    $k->reagirHora(11,45);
    $k->reagirHora(21,00);

    $k->reagirDono(true);
    $k->reagirDono(false);

    $k->reagirIdadePeso(2, 12.5);
    $k->reagirIdadePeso(17, 4.5);

    ?>
    </pre>
</div>
</body>
</html>