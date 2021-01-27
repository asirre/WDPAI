<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/anchor.css">
    <script type="text/javascript" src="./public/js/info.js" defer></script>
    <title>ANCHOR</title>
</head>
<body>
<div class="container">
    <? include("menu.php") ?>

    <div class="budowa">
        <h1>Rodzaje kotwic</h1>
    </div>
    <div class="tresc">
        <div class="repeated">
            <div class="img_admiralicji" onclick="displayInfo('adm')">
            </div>
            <div class="popuptext" id="adm">Tradycyjna kotwica o dwóch ramionach i poprzeczce. Wrzyna się w dno zawsze tylko jednym pazurem.
                We współczesnym jachtingu została praktycznie wyparta przez skuteczniejsze kotwice patentowe oraz pługowe.
            </div>
        </div>
        <div class="repeated">
        <div class="img_danfortha" onclick="displayInfo('dan')">
        </div>
            <div class="popuptext" id="dan">Rodzaj lekkiej kotwicy patentowej posiadającej dwa równoległe pazury przytwierdzone
                bezpośrednio do obracającej się poprzeczki. Kotwica Danforth'a wrzyna się w dno oboma pazurami, wykorzystując
                przy tym dużą siłę trzymania.
            </div>
        </div>
        <div class="opis">
            <p>1 - trzon <br> 2 - trent <br> 3 - ramię <br> 4 - pazur <br> 5 - ucho <br> 6 - poprzeczka</p>
        </div>
        <div class="repeated">
            <div class="img_brucea" onclick="displayInfo('br')">
            </div>
            <div class="popuptext" id="br">Rodzaj nowoczesnej wysoce skutecznej jednoczęściowej kotwicy posiadającej trzy
                pazury uformowane na kształt szufli.
            </div>
        </div>
        <div class="repeated">
            <div class="img_plugowa" onclick="displayInfo('pl')">
            </div>
            <div class="popuptext" id="pl">Rodzaj kotwicy patentowej, posiadającej jeden pazur w kształcie pługa. Jest szczególnie skuteczna w przypadku dna piaszczystego
                lub mulistego. Trzon kotwicy połączony jest z trentem za pomocą dodatkowego zawiasu zapobiegającego wyłamaniu kotwicy.
            </div>
        </div>
        <div class="repeated">
            <div class="img_czterolap" onclick="displayInfo('czt')">
            </div>
            <div class="popuptext" id="czt">(kot) jest to kowtica składana, może być przechowyana w stanie złożonym i wtedy zajmuje
                mało miejsca. Jest skuteczna w działaniu na dnie miękkim (muł, piasek), ale także skalistym.
            </div>
        </div>

    </div>
    <div class="back">
        <button class="button_back" id="boat">wróć do spisu treści</button>
    </div>

</div>
</body>

