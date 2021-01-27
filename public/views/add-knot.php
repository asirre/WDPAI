<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/add-knot.css">
    <title>UPLOAD</title>
</head>
<body>
<div class="container">
    <? include("menu.php") ?>
    <div class="knots">
        <section class="knot-form">
            <h1>UPLOAD</h1>
            <form action="addKnot" method="POST" ENCTYPE="multipart/form-data">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="name" type="text" placeholder="name">
                <textarea name="description" rows=6 placeholder="description"></textarea>
                <input id="file" type="file" name="file"/><br/>
                <button id="upload" type="submit">send</button>
            </form>
        </section>
</div>
</div>
</body>

