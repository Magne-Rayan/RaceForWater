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
    <h1>Quiz</h1>
    <div id="quiz">
        <p class="question">
        <form action="" method="post">
            <?php

            use controller\QuestionController;
            use controller\ReponseController;

            include '../src/controller/QuestionController.php';
            include '../src/controller/ReponseController.php';
            include '../src/model/Score.php';
            session_start();
            $score=new Score([
                'id'=>$_SESSION['score']->getId(),
            ]);
            $questionController = new \QuestionController();
            $question = $questionController->getQuestion($score);
            echo $question['question'];
            ?>
            </p>
            <?php
            $reponseController = new \ReponseController();
            $reponse = $reponseController->getReponse($question['id_question']);
            foreach ($reponse as $reponse) {
                ?>
                <div class="option">
                    <input name="<?= $reponse['contenu']?> value="<?= $reponse['contenu']?>" type="checkbox"/>
                    <label><?= $reponse['contenu']?></label>
                </div>
                <?php
            }
            ?>
            <button id="submit" name="soumettre"  class="button">Soumettre</button>
        </form>
    </div>
</div>
</body>
</html>
