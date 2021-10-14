<?php
   $host = "localhost:3312";
   $user = "root";
   $pass = "";
   $db = "db_curso_php";

   $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);