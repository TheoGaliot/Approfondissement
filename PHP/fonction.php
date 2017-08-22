<!DOCTYPE html>
<html>
<head></head>
<body>
  <?php

function maFonction(){
  echo("Le contenu de la fonction s'affiche");
}

maFonction();

echo "<br />\n";



function maFonction2($message){
  echo ($message);
}


maFonction2("Voici mon message");

echo "<br />\n";

function maFonction3($message="Pas de message <br> <br>"){
  echo $message;
}

maFonction3();

// afficher un certain nombre de fois un message ( ici 16 fois )
// si $i = 0 alors il faut dans maFonction4("Coucou, c'est moi !" mettre après la , 14 pour avoir 15 fois la valeur affichée)
function maFonction4 ($messages, $times){
  for($i = 0; $i <= $times; $i++) {
    echo "$messages <br>";
  }
}

maFonction4("Coucou, c'est moi !", 15);
echo "<br />\n";

// fonction addition en php

function addition($x,$y) {
  return $x +$y;
}
echo addition(2,5);

echo "<br />\n";

 ?>

</body>
</html>
