<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/veranderachtergrond.css">
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
        <li><a href="../../projects/development%20projects/veranderachtergrondproject.php" class="currentpage">Verander de achtergrond</a></li>
    </div>

    <div class="hoofdtekst">
        <p>Verander de achtergrond</p>
    </div>

    <div class="projectinfo">
        <p><i class="bi bi-code-slash"></i> Development</p>
        <p><i class="bi bi-person-check-fill"></i> Individueel</p>
    </div>

    <div class="grid-container">
        <div class="text">
            <h1>Inleiding</h1>
            <p> Frank Roosen had een instructie gegeven over classtoggle. Ik was helaas ziek op deze dag, dus ik heb dit niet meegekregen. Gelukkig was er een aardige klasgenoot die me het een en het ander uit heeft gelegd. In de klas gebruikte Frank blijkbaar het voorbeeld dat veel websites een darkmode hebben. Hoewel ik dit een leuk idee vond, besloot ik het iets anders aan te pakken.</p>
        </div>
        <div class="afbeelding">
            <img id="afbeelding1" src="../../img/development/veranderachtergr2.PNG" alt="projectimage">
        </div>
        <div class="text2">
            <h1>Ervaring</h1>
            <p>Nadat een klasgenoot me had uitgelegd hoe ik een classtoggle moest gebruiken, ben ik gelijk aan de slag gegaan. Mijn idee was dus om voor elke letter op je toetsenbord de achtergrond van je browser een andere kleur te geven. Eerst wilde ik een random kleur maken met math.random(), en daar dan een # voor plakken om het te gebruiken als hexadecimale kleurwaarde. Echter realiseerde ik me dat ik dan geen gebruik hoef te maken van classtoggle. Hoewel dit een leuke manier was om dit project aan te pakken, wilde ik toch graag leren hoe ik classtoggle moest gebruiken. <br></br>
                Ik besloot voor elke letter op mijn toetsenbord een aparte class aan te maken. Ik gaf bij elke class aan dat de achtergrondkleur moest veranderen in een specifieke kleur. Voor elke toets heb ik een andere kleur gekozen. Wanneer je dus op een van de toetsen drukt wordt de bijbehorende class aan- of uitgezet. Deze class wordt geassigned aan de body van de webpagina, waardoor de achtergrondkleur verandert bij het indrukken van een toets. Dit leek vlekkeloos te werken. Echter kwam ik er op een gegeven moment achter dat bij het indrukken van een toets de class niet veranderde, maar er steeds een nieuwe werd toegevoegd. Als je van de ene kleur terug wilde switchen naar de andere kleur, kon dit dus alleen door diezelfde toets nog een keer in te drukken. Dit was niet de bedoeling. <br> </br>
                In de afbeelding hiernaast is te zien dat er meerdere classes zijn toegevoegd aan de body. Echter blijft de kleur dus wit.
                Het was best een uitdaging om dit op te lossen. Ik kwam er wel al achter dat ik classreplace en classremove kon gebruiken. Alleen moest ik bij classremove dus alle voorgaande classes intypen. Dit kon niet, want dit resulteerde in meer dan 26 regels code per letter. Ik moest dus een andere manier vinden om dit op te lossen. Ik heb wat rondgevraagd bij docenten, en bij wat medestudenten. Uiteidelijk kwam een softwarestudent met het idee om gewoon classlist in te typen bij de classremove. Echter werkte dit niet omdat ik een string moest invoeren bij classlist.remove. Gelukkig kwam mijn medestudent met het idee om er gewoon ToString achter te zetten. Ik wist wat dit deed, omdat ik ToString weleens vaker heb gebruikt toen ik aan het programmeren was in C#. Ik had niet verwacht dat het ging werken, maar gek genoeg deed het dat wel.
            </p>
        </div>
        <div class="afbeelding2">
            <img id="afbeelding1" src="../../img/development/veranderachtergr1.PNG " alt="projectimage">
        </div>
        <div class="afbeelding3">
            <img id="afbeelding3" src="../../img/development/veranderachtergr3.png" alt="projectimage">
        </div>
        <div class="text4">
            <h1>Wat heb ik geleerd?</h1>
            <p>Dit is de eerste keer dat ik ooit met classtoggle heb gewerkt, en ik heb nu een goed idee gekregen over hoe ik het kan gebruiken. Daarnaast heb ik geleerd hoe ik een switch maak en gebruik in Javascript. Dit was een kwestie van kijken op W3Schools, en het toepassen in mijn code. Omdat ik met andere programmeertalen had gewerkt had ik al een vermoede dat switches en if-statements ook gewoon zouden kunnen in Javascript, en ik ben blij dat ik nu weet hoe. Daarnaast heb ik geleerd dat ik ToString kan gebruiken in Javascript. Ook dit was een ontdekking die ik heb gedaan naar aanleiding van wat kennis over C# (alleen had ik wat hulp van een medestudent nodig om hier op te komen). Als laatste heb ik geleerd hoe ik toetsen input kan registreren in Javascript. Dit kan ook nog goed van pas komen. Kortom, dit project heeft mij veel opgeleverd. Ik ben blij met de kennis die ik heb opgedaan en ik kijk er naar uit om dit toe te gaan passen in andere projecten.</p>
        </div>
        <div class="text5">
            <h1>Feedback</h1>
            <p>Voor dit project heb ik feedback gevraagd aan Frank Roosen. Hij vond dit een erg grappig project, en hij zei dat het een leuke manier was om switches en classlist.toggle toe te passen. Hij had de maandag voordat hij feedback gaf een lecture gegeven over het uitlezen van keys, en de informatie die erbij hoort. Het doel van die lecture was dat je begreep dat toetsen of een muishover informatie met zich meesturen. Hij was van mening dat ik dat nog onvoldoende hier had toegepast. Hij vetrelde dat ik een keer een website kan maken die van kleur verandert afhankelijk van de coördinaten van je muis. Dit is een mooi vervolgproject waar ik misschien nog eens naar ga kijken.</p>
        </div>
        <div class="download">
            <h2>Klik hier om het project te downloaden</h2>
            <a href="VeranderDeAchtergrond.zip" download="VeranderDeAchtergrond.zip">
                <p><i class="bi bi-download"></i></p>
            </a>
        </div>
        <div class="testen">
            <h2>Klik hier om het project te testen</h2>
            <a href="webpagina's/veranderdeachtergrond/AchtergrondKleurtje/index.php" target="_blank">
                <p><i class="bi bi-play"></i></p>
            </a>
        </div>
    </div>
</body>

<footer>
    <div class="copyrightnote">
        <p>Copyright ©2021 By Mette Ghijsen, All Rights Reserved</p>
    </div>
</footer>
</html>
