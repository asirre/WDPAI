<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/knots.css">
    <script type="text/javascript" src="./public/js/knots.js" defer></script>
    <title>MAIN</title>
</head>
<body>
    <div class="container">
        <? include("menu.php") ?>
        <div class="knots">
            <div class="name">
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
        </div>
        <div class="knots_buttons">
            <?php if($page > 1) : ?>
                <a href="/knots?page=<?= $page - 1; ?>" class="prev" >poprzedni węzeł</a>
            <?php endif; ?>

            <button class="next" onclick="fun(<?=$page+1?>)">następny węzeł</button>

        </div>



          </div>
    </div>
</body>

<template id = "knots-template">
    <div class="knots">
        <div class="name">
            <h1>title</h1>
        </div>
        <div class="info">
            <div class="img">
                <img src="">
            </div>
            <p>description</p>
        </div>
    </div>
</template>
