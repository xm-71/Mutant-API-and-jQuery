<?php
  $base = "https://pokeapi.co/api/v2/pokemon/";
  $id = 1;
  $data = file_get_contents($base.$id.'/');
  $pokemon = jason_decode($data);
  echo $pokemon->name;
?>
