<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



<!--
    Creare una variabile con un paragrafo di testo. Usate pure il Lorem Ipsum.
Scrivere a schermo la lunghezza del paragrafo.
Infine, visualizzare il paragrafo sostituendo la badword passata in GET con tre *.
Quindi ricapitolando, dovete sicuramente usare:
il $_GET
qualcosa (una funzione) per calcolare la lunghezza di una stringa
qualcos'altro per sostituire la badwords -->
<?php

//ricorda i ; please!

$paragrafo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";


echo $paragrafo;

//strlen mi calcola la lunghezza di una stringa

echo strlen($paragrafo);



 ?>


  </body>
</html>
