<?php

  $text = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia repellendus iste dicta rerum officiis expedita molestiae provident sed saepe, aliquid aliquam est voluptates quis ea quasi. Maxime aut dolore veritatis cum! Id commodi consequatur architecto odit illo. Modi soluta illo officiis consectetur aspernatur eaque ipsa maiores eum. Nobis, ut sequi.';

  $bad_word = $_GET['word'];


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
    <?php echo $bad_word ?>
  </p>
  
</body>
</html>