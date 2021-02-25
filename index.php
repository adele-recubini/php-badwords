
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

//ricorda i ; please!

$paragrafo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

echo $paragrafo;



 //strlen mi calcola la lunghezza di una stringa //


 echo 'la lunghezza del paragrafo è ' . strlen($paragrafo);

 //IL  var_dump() è come un conole log inoltre se passo la variabile get mi restituisce un array , in questo caso non ho passato prametri quindi l array è vuoto;

 var_dump($_GET);

 // IMPORTANTE mettiamo all interno di una variabile la chiave che diamo a get nel local host , cioe se per esempio nel local host io inserisco ?badword=laborum con str_replace andro a sostuire quella parola con gli astrischi
  $sostituzione = $_GET["badword"];


  // quindi gli diciamo letteralmente  che dobbiamo sostituire le brutte parole con degli asterischi nel nostro pragafrago


   echo 'sositusci le badword con degli asterischi nel mio paragrafo' .  str_replace($sostituzione,"***",$paragrafo);






?>





  </body>
</html>
