<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/test-result.css">
    <title>TEST RESULTS</title>
</head>
<body>
<div class="container">
    <? include("menu.php") ?>

   <div class="results">

        <h1>LICZBA ZDOBYTYCH PUNKTÓW</h1>
       <h2><?= $_SESSION['points']?></h2>
       <form action="testResults" method="POST" ENCTYPE="multipart/form-data">
           <? include("messages.php") ?>
           <button id="save-result" type="submit">Zapisz wyniki</button>
       </form>
    </div>

</div>
</body>


