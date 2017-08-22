var speed = 70;  //Changer la valeur de la variable speed pour afficher une condition différente dans
                   //la console

if(speed<80) {

  if(speed<50){
    console.log("Accélères un petit peu")
  }
  else {
    console.log("Tu roules à la bonne vitesse");
  }
}
else if (speed<100) {
  console.log("Il faut que tu ralentisses un peu");
}
else {
  console.log("Tu roules beaucoup trop vite, c'est dangereux !")
}
