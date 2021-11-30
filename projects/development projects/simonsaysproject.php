<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/simonsaysproject.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" href="../../img/logotjewit.png">
    <title>Portfolio Mette Ghijsen</title>
</head>

<body>
<div class="container">
    <div class="taakbalk">
        <li><a href="../../index.php"> Home </a></li>
        <li class="pijltje"> < </li>
        <li><a href="../../leeruitkomsten.php"> Leeruitkomsten </a></li>
        <li class="pijltje"> < </li>
        <li><a href="../../vakken/development.php"> Development </a></li>
        <li class="pijltje"> < </li>
        <li><a href="../../projects/development%20projects/simonsaysproject.php" class="currentpage"> Simon Says</a></li>
    </div>

    <div class="hoofdtekst">
        <p>Simon Says</p>
    </div>

    <div class="projectinfo">
        <p><i class="bi bi-code-slash"></i> Development</p>
        <p><i class="bi bi-person-check-fill"></i> Individueel</p>
    </div>

    <div class="grid-container">
        <div class="text">
            <h1>Inleiding</h1>
            <p> Dit is het vijfde project dat ik heb gemaakt in Javascript. Omdat ik Simon Says al eens heb gemaakt in C
                en C#, leek mij dit een erg leuke opdracht. Echter was dit wel een stuk lastiger dan verwacht, doordat
                ik tegen een hoop problemen aan liep die ik nog nooit eerder gezien had.</p>
        </div>
        <div class="afbeelding">
            <img id="afbeelding1" src="../../img/development/simonsaysstap1.PNG " alt="projectimage">
        </div>
        <div class="text2">
            <h1>Ervaring</h1>
            <p> Ik begon met het aanmaken van een functie die een random reeks getallen genereert en deze in een array
                stopt. Omdat ik 4 kleuren heb, moest mijn functie dus een random reeks getallen tussen 0 en 4 generen.
                De lengte van mijn array was het aantal levels dat ik had. Ik heb besloten hier 100 van te maken, maar
                mogelijk ga ik dat nog inkorten.
                <br></br>
                Nadat ik deze functie had geschreven begon ik met het maken van een functie die de reeks weergeeft door
                middel van de opacity van de tiles aan te passen. Een tile moest aan gaan voor een bepaalde tijd, en na
                een bepaalde tijd ook weer uit. De tijd tussen elke tile die knippert is gelijk aan de
                moeilijkheidsgraad. Na elke ronde wordt deze tijd korter.
                <br></br>

                Om de tiles te laten knipperen besloot ik een loop in mijn functie te verwerken. In deze loop zat een
                switch om te kijken welke tile moest knipperen. Nadat ik deze code geschreven had besloot ik ook een
                functie te maken elke tile te laten knipperen, aangezien dit een hoop code scheelde. In deze functie kan
                je als parameter de kleur van de tile meegeven. Dat is dus een stuk handiger dan voor elke tile drie
                regels code typen.
                <br></br>

                Om ervoor te zorgen dat er een tijd zat tussen elke tile die knipperde, wilde ik een TimeOut in mijn
                loop zetten. Hier liep ik tegen mijn eerste probleem aan. Door de manier waarop Javascript code
                verwerkt, werd alle code na de TimeOut in één keer uitgevoerd, in plaats van dat de code geloopt werd.
                Dit heb ik na veel onderzoek te hebben gedaan opgelost door de tijd van mijn TimeOut te vermenigvuldigen
                met de teller van de loop.
                <br></br>

                Nadat mijn functie om de gegenereerde array te laten zien eenmaal werkte, werd het tijd om een functie
                te schrijven die de input van de gebruiker opslaat in een andere array. Dit was vrij makkelijk. Het
                echte probleem kwam toen ik de twee arrays met elkaar moest gaan vergelijken. Wanneer de twee arrays wel
                met elkaar overeen kwamen werd er alsnog aangegeven dat dit niet zo was. Na wat hulp te hebben gevraagd
                aan een klasgenoot kwamen we samen tot de conclusie dat dit kwam doordat ik de hele array van 100
                getallen in één keer genereerde. We hebben de functie dus zo moeten herschrijven zodat er elke ronde een
                nieuw getal wordt toegevoegd aan de array. Toen we dit probleem eenmaal hadden opgelost, werkte de code.
                Later heb ik nog besloten een begin- en eindscherm toe te voegen, zodat je je score kon invullen.
                Hiervoor heb ik gewoon de code van mijn todo-list gebruikt en deze een stuk aangepast.
            </p>
        </div>
        <div class="afbeelding2">
            <img id="afbeelding1" src="../../img/development/simonsaysstap2.PNG " alt="projectimage">
        </div>
        <div class="text4">
            <h1>Wat heb ik geleerd?</h1>
            <p>Ik heb geleerd hoe ik loops in het algemeen moet gebruiken, maar ook in combinatie met TimeOuts. Blijkbaar
            is dit een probleem dat vaker voorkomt bij mensen, dus het is goed dat ik dit nu al weet, omdat ik er later
            toch wel tegenaan zou zijn gelopen. Daarnaast heb ik ook geleerd hoe ik functies met parameters schrijf en
            gebruik in Javascript. Dit is een erg fijne en efficiente manier om code in te korten. Ook heb ik wat meer
            inzicht opgedaan over het programmeren in Javascript. Ik merk dat ik door de fouten die ik heb gemaakt nu
            beter inzicht heb over hoe ik toekomstige code kan opstellen. Ik ben hier erg blij mee en ik denk dat dit
            erg waardevol kan zijn. Doordat ik heel lang heb zitten troubleshooten heb ik ook geleerd hoe je uitgebreide
            info in je console kan loggen. Tot slot heb ik nog wat kennis opgedaan over if- en else-statements.</p>
        </div>
        <div class="text5">
            <h1>Feedback</h1>
            <p>Ik heb feedback gevraagd aan Frank Roosen. Frank zei dat hij het een mooi project vond, en de manier waarop ik het geprogrammeerd had, vond hij goed. Ik vertelde dat ik geprobeerd heb alles zo efficiënt mogelijk te programmeren, en dat ik er daardoor ook wat langer mee bezig ben geweest. Frank zei dat hij dit een mooie, waardevolle eigenschap vond, en dat dit hetgeen kan zijn wat projecten mogelijk van een voldoende naar een goed kan tillen. </p>
        </div>
        <div class="links">
            <div class="download">
                <h2>Klik hier om het project te downloaden</h2>
                <a href="SimonSays.zip" download="SimonSays.zip">
                    <p><i class="bi bi-download"></i></p>
                </a>
            </div>
            <div class="testen">
                <h2>Klik hier om het project te testen</h2>
                <a href="webpagina's/SimonSays/index.php" target="_blank">
                    <p><i class="bi bi-play"></i></p>
                </a>
            </div>
            <div class="github">
                <h2>Klik hier om het project te bekijken op Github</h2>
                <a href="https://github.com/metteghijsen/SimonSays" target="_blank">
                    <img src="../../img/github.png" alt="githublogo">
                </a>
            </div>
        </div>
    </div>
</body>

<footer>
    <div class="copyrightnote">
        <p>Copyright ©2021 By Mette Ghijsen, All Rights Reserved</p>
    </div>
</footer>
</html>


