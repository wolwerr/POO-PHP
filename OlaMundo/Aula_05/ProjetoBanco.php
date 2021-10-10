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
    require_once "ContaBanco.php";
    $p1 = new ContaBanco(); //Jubileu
    $p2 = new ContaBanco(); //Creuza

    $p1->abrirConta("CC");
    $p1->setNumConta(1111);
    $p1->setDono("Julibeu");
    $p1->depositar(300);
    $p1->pagarMensal();
    $p1->sacar(338);
    $p1->fecharConta();
    print_r($p1);

    $p2->abrirConta("CP");
    $p2->setNumConta(2222);
    $p2->setDono("Creuza");
    $p2->depositar(500);
    $p2->sacar(100);
    $p2->pagarMensal();
    $p2->sacar(530);
    $p2->fecharConta();


    print_r($p2)

    ?>
    </pre>
</div>
</body>
</html>