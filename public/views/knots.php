<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/knot.css">
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
            <div class="name">
                <?php $knot = $knots[0]; ?>
              <h1><?= $knot->getName(); ?></h1>
            </div>
              <div class="info">

                <div class="img">
                    <img src="public/img/<?= $knot->getImage(); ?>">
                </div>
                <p>
                    <?= $knot->getDescription(); ?>
                </p>
              </div>

                <div class="knots_buttons">
                    <button>poprzedni węzeł</button>
                    <button>następny węzeł</button>
                </div>



          </div>
    </div>
</body>


