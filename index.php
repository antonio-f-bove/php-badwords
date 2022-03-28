<?php
  $text = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia repellendus iste dicta rerum officiis expedita molestiae provident sed saepe, aliquid aliquam est voluptates quis ea quasi. Maxime aut dolore veritatis cum! Id commodi consequatur architecto odit illo. Modi soluta illo officiis consectetur aspernatur eaque ipsa maiores eum. Nobis, ut sequi.';
  $bad_word = $_GET['word'];

  $censured_text = str_replace($bad_word, '***', lcfirst($text));
  // ho fatto il test con lorem quindi ho aggiunto lcfirst per evitare il caso limite della maiuscola a inizio testo
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    <?php echo $text ?>
  </p>
  <div>Lunghezza testo: <?php echo strlen($text); ?> caratteri</div>
  <p>
    <?php echo $censured_text ?>
  </p>
  <div>Lunghezza testo censurato: <?php echo strlen($censured_text); ?> caratteri</div>
  
</body>
</html>