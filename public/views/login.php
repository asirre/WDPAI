<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/login.css">
    <title>LOGIN PAGE</title>
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
        <form class="login" action="login" method="POST">
            <div class="messages">
                <?php if(isset($messages)) {
                    foreach ($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <div class="inputs">
            <input name="email" type="text" placeholder="email@email.com">
            <input name="password" type="password" placeholder="password">
            </div>
            <div class="buttons">
            <button>zaloguj się</button>
                <div class="link">
                <a href="register" class="button">zarejestruj się</a>
                </div>
            </div>

        </form>
    </div>

</div>
</body>