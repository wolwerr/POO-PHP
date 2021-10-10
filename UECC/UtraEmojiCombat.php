<!DOCTYPE html>
<html lang="br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
<div>
    <?php
    require_once "Lutador.php";
    require_once "Luta.php";
    $l = array();
    $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 90.9, 11, 2, 1);
    $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    $l[2] = new Lutador("SnapShadow", "Estados Unidos", 35, 1.65, 80.9, 12, 2, 1);
    $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
    $l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
    $l[5] = new Lutador("Nerdaart", "Estados Unidos", 30, 1.81, 105.7, 12, 2, 4);

    $UEC01 = new Luta();
    $UEC01->marcarLuta($l[1], $l[1]);
    $UEC01->lutar();
    $l[2]->status();
    $l[3]->status();

    ?>
</div>
</body>
</html>