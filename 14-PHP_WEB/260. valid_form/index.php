<?php

$validacoes = [];

   if (count($_POST) > 0) {
      
      if ($_POST['nome'] === "") {
         $validacoes[] = "Por favor, preencha o nome do usuário!";
      }

      if ($_POST['email'] === "") {
         $validacoes[] = "Por favor, preencha o e-mail!";
      }

      if ($_POST['senha'] != $_POST['confirmacao']) {
         $validacoes[] = "As senhas precisam ser iguais!";
      }
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
   <?php if (count($validacoes)): ?>
      <ul>
         <?php foreach($validacoes as $value): ?>
            <li><?= $value ?></li>
         <?php endforeach; ?>
      </ul>
   <?php endif; ?>
   <form action="index.php" method="POST">
   <div>
      <input type="text" name="nome" placeholder="Digite seu nome...">
   </div>
   <div>
      <input type="email" name="email" placeholder="Digite seu e-mail...">
   </div>
   <div>
      <input type="password" name="senha" placeholder="Digite sua senha...">
   </div>
   <div>
      <input type="password" name="confirmacao" placeholder="Confirme a sua senha...">
   </div>
   <input type="submit" value="Enviar">
   </form>
</body>
</html>