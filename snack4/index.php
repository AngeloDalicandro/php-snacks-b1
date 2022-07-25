<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php 

    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi numquam minus nam, distinctio quam rerum libero repellat eos explicabo quia rem vel sed voluptas aperiam ipsam, necessitatibus, velit nemo. Modi.
    Est quia cumque voluptates debitis ipsum dolorum eum libero similique consectetur aperiam quaerat, facere vitae laborum nam sit voluptatibus laboriosam! Cupiditate perferendis ipsam repudiandae voluptates voluptas numquam, tenetur maiores quod?
    Nulla, similique velit. Tenetur neque voluptas perferendis vitae facere deleniti autem quos, iste quaerat, alias illo? Magnam delectus esse laboriosam, ea ducimus error saepe necessitatibus quis vitae omnis atque quos!
    Facilis aperiam libero vel, dolore exercitationem quod corporis architecto accusantium! Eveniet repellendus, recusandae temporibus rem tempore consectetur, pariatur alias quibusdam officia ad necessitatibus deserunt quis repellat quos perferendis inventore nam.
    Molestiae, dolores ab! Ipsam, natus mollitia aut quis ea aliquid delectus quaerat excepturi? Quia accusamus aut quam sint saepe, aliquid repellendus beatae quo, dignissimos non qui sit ipsum eius cum.
    Ab ipsum, repellat delectus facilis, rerum assumenda illum perspiciatis vel non, repudiandae tempore optio quidem incidunt placeat nemo minus ullam accusamus officiis omnis unde debitis aspernatur nihil! A, ea veniam!
    Recusandae, nam esse eius inventore doloremque accusamus perferendis veniam odio, explicabo corrupti dignissimos perspiciatis facere iste at ratione suscipit totam quod reiciendis sequi natus atque! In debitis laboriosam non odit?
    Dolore ea veritatis molestias distinctio magnam sed magni consequuntur ipsam provident aut dolorum obcaecati, sequi similique a praesentium voluptates nostrum nesciunt suscipit, corporis eum perspiciatis repellat quod qui! Vero, obcaecati.
    Vitae, aspernatur pariatur cupiditate, harum alias dolor ipsa nulla ea molestiae, quae sunt nostrum facilis magnam eos eveniet officiis praesentium illo minus iste mollitia eligendi? Quae illum veniam sequi accusamus.
    Enim accusamus repellendus soluta id sunt voluptates veniam vitae, quidem amet dignissimos earum aliquam voluptatibus perferendis ullam ea quae voluptatum. Corrupti perspiciatis enim voluptatem earum labore ipsam voluptas atque fugiat!';

    $paragraphs = explode('.', $text)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack4</title>
</head>
<body>
    
    <?php foreach( $paragraphs as $paragraph ) { ?>

        <p> <?php echo $paragraph ?> </p>
    
    <?php } ?>
    
</body>
</html>