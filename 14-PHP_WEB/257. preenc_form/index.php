<?php
   $usuario = [
      'nome' => "João",
      'idade' => 18,
      'prof' => "Programador"
   ];

   if($usuario) {
      $nome = $usuario['nome'];
      $idade = $usuario['idade'];
      $prof = $usuario['prof'];
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
   <form action="index.php" method="POST">
      <div>
         <input type="text" name="nome" placeholder="Digite seu nome..." value="<?= $nome?>">
      </div>
      <div>
         <input type="text" name="idade" placeholder="Digite sua idade..." value="<?= $idade?>">
      </div>
      <div>
         <input type="text" name="prof" placeholder="Digite sua profissão..." value="<?= $prof?>">
      </div>
      <input type="submit" value="Enviar">
   </form>
</body>
</html>