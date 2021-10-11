<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro PHP</title>
</head>
<body>
   <h1>Cadastro carro vruuuuuuuum</h1>
   <form action="cadastro.php" method="POST">
      <div>
         <input type="text" name="marca" placeholder="Marca do carro">
      </div>
      <div>
         <input type="text" name="preco" placeholder="Preço do carro">
      </div>
      <div>
         <input type="checkbox" name="opcionais[]" value="Teto Solar"> Teto Solar
         <input type="checkbox" name="opcionais[]" value="Pelicula"> Película
         <input type="checkbox" name="opcionais[]" value="Blindado"> Blindado
      </div>
      <div>
         <input type="submit" value="Enviar">
      </div>
   </form>
</body>
</html>