<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/knots.css">
    <link rel="stylesheet" type="text/css" href="public/css/header.css">
    <script type="text/javascript" src="./public/js/dynamicButtons.js" defer></script>
    <script type="text/javascript" src="./public/js/knots.js" defer></script>
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
        <div class="knots">
            <div class="name">
              <h1><?= $knot->getName();  ?></h1>
            </div>
              <div class="info">
                <div class="img">
                    <img src="public/img/<?= $knot->getImage(); ?>">
                </div>
                <p>
                    <?= $knot->getDescription(); ?>
                </p>
              </div>
        </div>

        <div class="knots_buttons">
            <?php if($page > 1) : ?>
                <a href="/knots?page=<?= $page - 1; ?>" class="prev" >poprzedni węzeł</a>
            <?php endif; ?>
            <a href="/knots?page=<?= $page + 1; ?>" class="next">następny węzeł</a>
        </div>



          </div>
    </div>
</body>


