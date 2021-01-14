<!DOCTYPE html>
<?php
session_start();
?>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/boats.css">
    <script type="text/javascript" src="./public/js/dynamicButtons.js" defer></script>

    <title>BOAT</title>
</head>
<body>
<div class="container">
    <? include("menu.php") ?>
    <div class="budowa">
        <h1>Budowa jachtu</h1>
    </div>
    <div class="spis">
        <h2>Spis treści</h2>
    </div>
    <div class="tresc">
            <ol>
                <li> <a href="naped" class="link">Kryterium głównego źródła napędu</a></li>
                <li><a href="kotwice" class="link">Wyposażenie kotwiczne i cumownicze</li>
                <li>Omasztowanie żaglu jachtowego</li>
                <li>Ożaglowanie jachtu</li>
                <li>Budowa kadłuba</li>
                <li>Olinowanie jachtu</li>
                <li>Kryterium osprzętu żaglowego</li>


            </ol>
    </div>

</div>
</body>

