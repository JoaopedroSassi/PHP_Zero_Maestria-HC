<?php

   if (isset($_FILES)) {
      print_r($_FILES);
   }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="index.php" method="POST" enctype="multipart/form-data">
   <div>
      <input type="file" name="imagem">
   </div>
   <input type="submit" value="Enviar">
   </form>
</body>
</html>