<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/quiz/assets/css/quiz.css">
    <title>Quiz</title>
</head>
<body>
<div class="container">
    <h1>Depart</h1>
    <div id="quiz">
        <form action="/quiz/src/trait/traitement.php" method="post">
            <label for="pso">Pseudo</label>
            <input type="text" id="pso" name="pseudo">
            <button id="submit" name="connexion" class="button">Commencer</button>
        </form>
    </div>
</div>
</body>
</html>
