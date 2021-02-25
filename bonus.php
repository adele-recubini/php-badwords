
<?php

var_dump($_GET);
?>

ciao <?php echo $_GET ["nome"]?>;



<?php
echo "utilizzo il terminale";


// ora dal terminale passo il mio nome , vado quindi nella cartella mamp htdocs nella mia repo bad words e scrivo php bonus.php e passo un nome per esempio adele , se poi richiamo var_dump($argv); poi torno nel terminale e vedro quanto segue
// utilizzo il terminalearray(2) {
//   [0]=>
//   string(9) "bonus.php"
//   [1]=>
//   string(5) "adele"
// }

var_dump($argv);


// quindi per richiamare uno dei due utilizzero l indice [] e per stamparlo a schermo echo

echo "ciao" . $argv[1];

// se utilizzassi l indice 0 mi avrebbe stampato ciao bonus.php
