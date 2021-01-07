<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/test.css">
    <link rel="stylesheet" type="text/css" href="public/css/header.css">
    <script type="text/javascript" src="./public/js/dynamicButtons.js" defer></script>
    <script type="text/javascript" src="./public/js/test.js" defer></script>
    <script src="https://kit.fontawesome.com/fffd297577.js" crossorigin="anonymous"></script>
    <title>MAIN</title>
</head>
<body>
<div class="container">
    <div class="menu">
        <div class="back-to-main">
            <button id="nav" class="button_nav"><i class="fas fa-home"></i>  Powrót do nawigatora</button>
        </div>
        <div class="account">
            <button class="konto"><i class="fas fa-user-circle icon-2x"></i>  twoje konto</button>
            <button class="logout"><i class="fas fa-sign-out-alt icon-2x"></i>  wyloguj się</button>
        </div>
    </div>

    <div class="test-menu">
        <h1>Test</h1>
        <h2>Pytanie <?= $page ?>/4</h2>
    </div>
    <div class="question">
        <div class="img">
            <img src="public/img/<?= $question->getImage(); ?>">
        </div>
        <div class="answers">
        <?php $id = $question->getIdCorrectAns()?>
            <h2><?= $question->getQuestion(); ?></h2>
            <ol>
                <li id="<?=json_encode($answers[0]->getId())?>" onclick="isCorrect(<?=json_encode($id)?>,<?=json_encode($answers[0]->getId())?>)">
                    <?= $answers[0]->getAnswer(); ?></li>
                <li id="<?=json_encode($answers[1]->getId())?>" onclick="isCorrect(<?=json_encode($id)?>,<?=json_encode($answers[1]->getId())?>)">
                    <?= $answers[1]->getAnswer();  ?> </li>
                <li id="<?=json_encode($answers[2]->getId())?>" onclick="isCorrect(<?=json_encode($id)?>,<?=json_encode($answers[2]->getId())?>)">
                    <?= $answers[2]->getAnswer(); ?></li>
            </ol>
        </div>
    </div>
    <div class="test-buttons">
        <?php if($page > 1) : ?>
            <button id="previous_question" onclick="previousQuestion(<?=json_encode($page - 1)?>)">poprzednie pytanie</button>
        <?php endif; ?>
        <?php if($page < 4) : ?>
        <button id="next_question" onclick="nextQuestion(<?=json_encode($page +1)?>)">następne pytanie</button>
        <?php endif; ?>

    </div>
    <div class="test-end">
        <button id="button-end">zakończ test</button>
    </div>



</div>
</div>
</body>

