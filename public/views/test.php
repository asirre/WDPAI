<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/tests.css">
    <script type="text/javascript" src="./public/js/dynamicButtons.js" defer></script>
    <script type="text/javascript" src="./public/js/tests.js" defer></script>

    <title>MAIN</title>
</head>
<body>
<div class="container">
    <? include("menu.php") ?>

    <div class="test-menu">
        <h1>Test</h1>
        <h2>Pytanie <?= $page ?>/<?= $max_pages ?></h2>
        <h3>Punkty <?= $_SESSION['email'] ?>/<?= $max_pages ?></h3>
    </div>
    <div class="question">
        <div class="img">
            <img src="public/img/<?= $question->getImage(); ?>">
        </div>
        <div class="answers">

            <h2><?= $question->getQuestion(); ?></h2>
            <ol>
                <li id="<?=json_encode($answers[0]->getIsCorrect())?>" >
                    <?= $answers[0]->getAnswer(); ?> </li>
                <li id="<?=json_encode($answers[1]->getIsCorrect())?>">
                    <?= $answers[1]->getAnswer();  ?> </li>
                <li id="<?=json_encode($answers[2]->getIsCorrect())?>" >
                    <?= $answers[2]->getAnswer(); ?></li>
            </ol>
        </div>
    </div>
    <div class="test-buttons">
        <?php if($page > 1) : ?>
            <button id="previous_question" onclick="previousQuestion(<?=json_encode($page - 1)?>)">poprzednie pytanie</button>
        <?php endif; ?>
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

