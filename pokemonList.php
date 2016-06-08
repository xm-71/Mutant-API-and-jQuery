<?php
  $base = "https://pokeapi.co/api/v2/pokemon/";
  for($id = 1; $id < 3; $id++){
  $data = file_get_contents($base.$id.'/');
  $pokemon = jason_decode($data);
  echo $pokemon->name.<br/>;
}
?>
