<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/testy.css">
    <script src="https://kit.fontawesome.com/fffd297577.js" crossorigin="anonymous"></script>
    <title>MAIN</title>
</head>
<body>
<div class="container">
    <div class="menu">
        <div class="back-to-main">
            <a href="main" class="button_nav"><i class="fas fa-home"></i>  Powrót do nawigatora</a>
        </div>
        <div class="account">
            <a href="#" class="button"><i class="fas fa-user-circle icon-2x"></i>  twoje konto</a>
            <a href="login" class="button"><i class="fas fa-sign-out-alt icon-2x"></i>  wyloguj się</a>
        </div>
    </div>

    <div class="test-menu">
        <h1>Test</h1>

    </div>
    <div class="question">
        <div class="img"></div>
        <div class="answers">
            <?php $question = $questions[0]; ?>
            <?php $a = $answers[0]; $b = $answers[1]; $c = $answers[2]; ?>
            <h2><?= $question->getQuestion(); ?></h2>
            <ol>
                <li><?= $a->getAnswer(); ?></li>
                <li><?= $b->getAnswer(); ?></li>
                <li><?= $c->getAnswer(); ?></li>
            </ol>
        </div>
    </div>
    <div class="test-buttons">
        <a href="#" class="buttonm">poprzednie pytanie</a>
        <a href="#" class="buttonm">następne pytanie</a>
    </div>
    <div class="test-end">
        <a href="main" class="button-end">Zakończ test</a>
    </div>



</div>
</div>
</body>

