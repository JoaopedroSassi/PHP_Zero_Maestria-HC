<?php

$nome = "João";

?>

<form action="">
   <div>
      <!-- Outro jeito -->
      <input type="text" value = "<?php echo $nome; ?>"> 
      <!-- Recomendado -->
      <input type="text" value = "<?= $nome; ?>"> 
   </div>
   <div>
      <input type="submit" value="Enviar">
   </div>
</form>