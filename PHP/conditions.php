<!DOCTYPE html>
<html>
<head></head>
<body>
  <?php
    $motivation = 4;

    if($motivation < 3){
      echo "Oulala, il faut se motiver !";
    }
    else if ($motivation < 7) {
      echo "Ta situation n'est pas grave, resaisis toi !";
    }
    else {
      echo "C'est génial toute cette motivation que tu possèdes";
    }

echo "<br />\n";
echo "<br />\n";
echo "<br />\n";
    //  conditions avec switch

    $objectif ="coder mon site web";

    switch ($objectif) {
      case "travailler en freelance";
        echo "Freelance, c'est génial !";
        break;
      case "travailler de la maison";
        echo"Tu as raison c'est une super idée";
        break;
      case "coder mon site web";
        echo "bonne chance ! ";
        break;
      default :
        echo "Choisis un objectif";

    }

    // le switch prend en compte le case que l'on met dans la variable et il l'affiche jusqu'à rencontrer un break



   ?>
</body>
</html>
