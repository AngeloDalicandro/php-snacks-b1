<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>

<body>

    <?php 
        $matches = [
            [
                'host' => 'Virtus',
                'guest' => 'Olimpia',
                'host_score' => '49',
                'guest_score' => '35'
            ],
            [
                'host' => 'Montepaschi',
                'guest' => 'Varese',
                'host_score' => '66',
                'guest_score' => '51'
            ],
            [
                'host' => 'Nonloso',
                'guest' => 'Ciao',
                'host_score' => '80',
                'guest_score' => '92'
            ],
            [
                'host' => 'Squadraacaso',
                'guest' => 'Nonnehoidea',
                'host_score' => '55',
                'guest_score' => '54'
            ]
        ];

    ?>

    <ul>
        <?php for( $i = 0; $i < count($matches); $i++ ) { ?>
            <?php $thisMatch = $matches[$i]; ?>
            <li>
                <?php echo $thisMatch['host'] ?> <?php echo $thisMatch['guest'] ?> | <?php echo $thisMatch['host_score'] ?>-<?php echo $thisMatch['guest_score']?>
            </li>
        <?php } ?>
    </ul>
    


</body>
</html>