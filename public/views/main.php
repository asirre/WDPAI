<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/nav.css">
    <script type="text/javascript" src="./public/js/dynamicButtons.js" defer></script>
    <script src="https://kit.fontawesome.com/fffd297577.js" crossorigin="anonymous"></script>
    <title>MAIN</title>
</head>
<body>
<div class="container">
    <div class="blue-rectangle">
    </div>
    <div class="main">
        <?php $name = $_SESSION['name']?>
        <div class="logo">
            <h1>Witaj <?= $name ?> !</h1>

        </div>
        <div class="account">
            <button id="acc"><i class="fas fa-user-circle icon-2x"></i>twoje konto</button>

            <button id="log_out"><i class="fas fa-sign-out-alt icon-2x"></i>wyloguj się</button>

        </div>
        <div class="sub">
            <div class="repeated">
                <div class="img1">
                </div>
                <button id="boat" class="menu">Poznaj budowę jachtu</button>
            </div>
            <div class="repeated">
                <div class="img2">
                </div>
                <button id="knots" class="menu">Poćwicz węzły</button>
            </div>
            <div class="repeated">
                <div class="img3">
                </div>
                <button id="test" class="menu">Rozwiąż test</button>

            </div>
        </div>
    </div>

</div>
</body>


