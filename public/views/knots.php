<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/knot.css">
    <title>KNOTS</title>
</head>
<body>
    <div class="container">
        <? include("menu.php") ?>
        <div class="knots">
            <div class="name">
              <h1><?= $knot->getName(); ?></h1>
                <?php if($_SESSION['role']==='admin'): ?>
                <button id="new_knot"> dodaj węzeł</button>
                <?php endif; ?>

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
                <button class="prev" onclick="knotsButtons(<?=$page-1?>)">poprzedni węzeł</button>
            <?php endif; ?>
            <?php if($page < $max_pages):?>
            <button class="next" onclick="knotsButtons(<?=$page+1?>)">następny węzeł</button>
            <?php endif; ?>
        </div>
        </div>
    </div>
</body>

