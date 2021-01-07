<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <script type="text/javascript" src="./public/js/dynamicButtons.js" defer></script>
    <script src="https://kit.fontawesome.com/fffd297577.js" crossorigin="anonymous"></script>
    <title>MAIN</title>
</head>
<body>
<div class="container">
    <div class="blue-rectangle">
    </div>
    <div class="main">
        <div class="logo">
            <h1>Navigator</h1>
        </div>
        <div class="account">
            <a href="#" class="button"><i class="fas fa-user-circle icon-2x"></i>twoje konto</a>

            <a href="login" class="button"><?php session_destroy()?><i class="fas fa-sign-out-alt icon-2x"></i>wyloguj się</a>

        </div>
        <div class="sub">
            <div class="repeated">
                <div class="img1">
                </div>
                <button id="boat" class="buttons">Poznaj budowę jachtu</button>
            </div>
            <div class="repeated">
                <div class="img2">
                </div>
                <button id="knots" class="buttons">Poćwicz węzły</button>
            </div>
            <div class="repeated">
                <div class="img3">
                </div>
                <button id="test" class="buttons">Rozwiąż test</button>

            </div>
        </div>
    </div>

</div>
</body>


