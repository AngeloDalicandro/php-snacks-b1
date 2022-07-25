<!-- Passare come parametri GET name, mail e age 
verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    $name = $_GET['nome'];
    $email = $_GET['email'];
    $age = $_GET['eta'];

    if( 
        strlen($name) > 3 &&
        str_contains($email, '@') !== false &&
        str_contains($email, '.') !== false && 
        is_numeric($age)
    ) {
        echo 'Accesso riuscito';
    } else {
        echo 'Accesso negato';
    }
?>