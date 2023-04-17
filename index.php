<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badwords</title>
</head>
<body>

<h1>Censura una parola</h1>

<!-- form che manda alla pagina censored.php -->
<form action="censored.php" method="GET">

  <!-- creo gli input per il paragrafo e la parola da censurare, entrambi richiesti per andare avanti -->
  <textarea name="paragrafo" placeholder="Scrivi quello che vuoi" cols="30" rows="10" required></textarea>
  <input type="text" name="censuredword" placeholder="Parola da censurare" required>
  <button type="submit">Censura</button>
</form>

</body>
</html>