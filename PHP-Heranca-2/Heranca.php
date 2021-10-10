<!DOCTYPE html>
<html lang="br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
<div> <pre>
    <?php

        require_once "Aluno.php";
        require_once "Bolsista.php";
        //$p1 = new Pessoa();
        /*$v1 = new Visitante();
        $v1->setNome("Juvenal");
        $v1->setIdade(33);
        $v1->setSexo("M");
        print_r($v1);*/

        $a1 = new Aluno();
        $a1->setNome("Pedro");
        $a1->setMatricula(11111);
        $a1->setIdade(16);
        $a1->setSexo("M");
        $a1->setCurso("Informática");
        $a1->pagarMensalidade();

        print_r($a1);

        $b1 = new Bolsista();
        $b1->setMatricula(1112);
        $b1->setNome("Jubileu");
        $b1->setBolsa(12.5);
        $b1->setCurso("Adminitração");
        $b1->setIdade(17);
        $b1->pagarMensalidade();

        print_r($b1);
    ?>
    </pre>
</div>
</body>
</html>