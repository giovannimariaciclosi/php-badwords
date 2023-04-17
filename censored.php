<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Risultato</title>
</head>
<body>

<h1>Risultato</h1>

Questo è il paragrafo che hai scritto: <br>
<?php 
// prendo il paragrafo e lo assegno ad una variabile
$paragrafo = $_GET['paragrafo'];

// prendo la parola da censurare e la assegno ad una variabile
$censuredword = $_GET['censuredword'];
//stampo il paragrafo
echo $paragrafo 

?> 

<br><br>
<!-- stampo la lunghezza del paragrafo -->
Il paragrafo è lungo <?php echo strlen($paragrafo) ?> caratteri.
<br><br>
<hr>

Questo è il paragrafo censurato:<br>
<?php
// assegno ad una variabile il paragrafo con la parola da censurare sostituita con "***"
$nuovoparagrafo = str_replace($censuredword, "***", $paragrafo);
// lo stampo
echo $nuovoparagrafo
?>

<br><br>
<!-- stampo la lunghezza del nuovo paragrafo -->
Il paragrafo è lungo <?php echo strlen($nuovoparagrafo) ?> caratteri.

</body>
</html>