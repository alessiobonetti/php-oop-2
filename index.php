<?php
    class auto {
        public $marca;
    }

    class tipo extends auto{
        public $tipoVettura;
        public $nomeVettura;
        public $annoUscita;
    }

    $vettura1 = new tipo() ;
    $vettura1->marca = "Renault";
    $vettura1->nomeVettura = "clio";
    $vettura1->annoUscita = "2018";
    $vettura1->tipoVettura = "auto";

    $vettura2 = new tipo() ;
    $vettura2->marca = "mercedes";
    $vettura2->nomeVettura = "vivaro";
    $vettura2->annoUscita = "2002";
    $vettura2->tipoVettura = "furgone";

    $vettura3 = new auto();
    $vettura3->marca ="audi";

    $automobili = [$vettura1, $vettura2, $vettura3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php foreach($automobili as $automobile) { ?>

        <div class="auto">
            <ul>
                <li>
                    <h2>marca</h2>
                    <p> <?php echo $automobile->marca ?> </p>
                </li>

                <li>
                    <h2>nome</h2>
                    <p> <?php echo $automobile->nomeVettura ?> </p>
                </li>

                <li>
                    <h2>anno di uscita</h2>
                    <p> <?php echo $automobile->annoUscita ?> </p>
                </li>

                <li>
                    <h2>tipo automobile</h2>
                    <p> <?php echo $automobile->tipoVettura ?> </p>
                </li>
            </ul>
        </div>

    <?php } ?>
</body>
</html>