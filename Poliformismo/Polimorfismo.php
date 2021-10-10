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
    require_once "Mamifero.php";
    require_once "Reptil.php";
    require_once "Peixe.php";
    require_once "Ave.php";
    require_once "Arara.php";
    require_once "Cachorro.php";
    require_once "Canguru.php";
    require_once "Cobra.php";
    require_once "GoldFish.php";
    require_once "Tartaruga.php";

    $m = new Mamifero();
    $a = new Ave();
    $r = new Reptil();
    $p = new Peixe();
    $c = new Canguru();
    $k = new Cachorro();
    $t = new Tartaruga();

    $m->setPeso(33.5);
    $m->locomover();
    print_r($m);

    $a->locomover();
    $r->locomover();
    $p->locomover();
    $c->locomover();
    $k->locomover();
    $t->locomover();

    $k->emitirSom();

    ?>
    </pre>
</div>
</body>
</html>