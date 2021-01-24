<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/quiz.css">
    <script type="text/javascript" src="./public/js/test.js" defer></script>

    <title>MAIN</title>
</head>
<body>
<div class="container">
    <? include("menu.php") ?>

    <div class="test-menu">
        <h1>Test</h1>
        <h2>punkty <?= $_SESSION['points'] ?>/<?= $max_pages ?></h2>
    </div>
    <div class="question">
        <div class="img">
            <img src="public/img/<?= $question->getImage(); ?>">
        </div>
        <div class="answers">
            <h3><?= $question->getQuestion(); ?></h3>
            <ol>
                <li class ="answer" id="<?=$answers[0]->getId()?>" >
                    <?= $answers[0]->getAnswer(); ?> </li>

                <li class ="answer" id="<?=$answers[1]->getId()?>">
                    <?= $answers[1]->getAnswer();  ?> </li>

                <li class ="answer" id="<?=$answers[2]->getId()?>" >
                    <?= $answers[2]->getAnswer(); ?></li>
            </ol>
        </div>
    </div>
    <div class="test-buttons">
        <?php if($page < $max_pages) : ?>
        <button id="next_question" onclick="nextQuestion(<?=json_encode($page +1)?>)">następne pytanie</button>
        <?php endif; ?>
    </div>
    <div class="test-end">
        <button id="button-end">zakończ test</button>
    </div>



</div>
</div>
</body>

