<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/registers.css">
    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <title>REGISTER</title>
</head>
<body>
<div class="container">
    <div class="photo">
        <img src="public/img/login.svg">
    </div>
    <div class="login-container">
        <div class="logo"></div>
        <div class="vademecum">
            <h1>Twoje żeglarskie vademecum zawsze pod ręką</h1>
        </div>
        <form  action="user-update" method="POST">
            <div class="messages">
                <?php
                if(isset($messages)) {
                    foreach ($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <div class="inputs">
                <input name="name" type="text" value="<?= $user->getName() ?>" >
                <input name="surname" type="text" value="<?= $user->getSurname() ?>">
                <input name="email" type="text" placeholder="email">
                <input name="password" type="password" placeholder="password">
                <input name="confirmedPassword" type="password" placeholder="confirm password">

            </div>
            <div class="button">
                <button type="submit">zaaktualizuj</button>
            </div>

        </form>
    </div>

</div>
</body>