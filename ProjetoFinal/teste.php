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
    abstract class pai {
        public function herdado() {
            $this->sobrescrito();
        }
        protected function sobrescrito() {
            echo 'pai';
        }
    }
    class filha extends pai {
        protected function sobrescrito() {
            echo 'filha';
        }
    }
    $teste = new filha();
    $teste->herdado();
    ?>
</div>
</body>
</html>