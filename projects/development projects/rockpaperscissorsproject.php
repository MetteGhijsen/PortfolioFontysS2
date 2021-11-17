<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/rpsproject.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" href="../../img/logotjewit.png">
    <title>Portfolio Mette Ghijsen</title>
</head>

<body>
<div class="container">
    <div class="taakbalk">
        <li><a href="../../index.php"> Home </a></li>
        <li class="pijltje"> <</li>
        <li><a href="../../leeruitkomsten.php"> Leeruitkomsten </a></li>
        <li class="pijltje"> <</li>
        <li><a href="../../vakken/development.php"> Development </a></li>
        <li class="pijltje"> <</li>
        <li><a href="../../projects/development%20projects/rockpaperscissorsproject.php" class="currentpage">Rock-paper-scissors</a></li>
    </div>

    <div class="hoofdtekst">
        <p>Rock-paper-scissors</p>
    </div>

    <div class="projectinfo">
        <p><i class="bi bi-code-slash"></i> Development</p>
        <p><i class="bi bi-person-check-fill"></i> Individueel</p>
    </div>

    <div class="grid-container">
        <div class="text">
            <h1>Inleiding</h1>
            <p> Steen, papier, schaar is een project dat ik al een keer gemaakt heb in C#. Daardoor wist ik goed hoe het technisch in elkaar zat. Ik dacht dat dit vanuit de todolist slechts een kleine opstap zou zijn omdat ik dus al ervaring had met het maken van dit spel.</p>
        </div>
        <div class="text2">
            <h1>Ervaring</h1>
            <p> Als eerste heb ik in een Microsoft Word document stap voor stap omschreven wat ik precies moest programmeren. Zo hoefde ik me op niet teveel te focussen in een keer. Daarnaast heb ik teruggekeken naar mijn C# code. Ik realiseerde me dat ik niets meer nodig had dan een simpele switch om dit te maken. Een switch had ik ook al gebruikt in mijn “verander de achtergrond” project, en daardoor wist ik al hoe dit ongeveer werkte in Javascript.
                <br></br>

                Ik begon met het maken van drie knoppen in HTML. Aan elke knop gaf ik een functie mee. ChoiceIsRock(); voor als de keuze van de speler steen was, ChoiceIsPaper(); voor als de keuze van de speler papier was, en ChoiceIsScissors(); voor als de keuze van de speler schaar was. Omdat dit eigenlijk gewoon drie dezelfde functies zijn, had ik dit achteraf beter kunnen oplossen door één functie te schrijven en deze een parameter mee te geven. Misschien dat ik daar nog mee ga experimenteren.
                <br></br>

                Voor nu besloot ik als eerste ChoiceIsRock() uit te werken, voordat ik begon aan de andere functies. Deze functie bestond simpelweg uit een random getal, en een switch die elk getal aan een resultaat koppelt. Deze had ik vrij snel in elkaar gezet. Ik wilde ook nog de scores van de speler en de computer bijhouden. Om de scores te weergeven heb ik twee elementen gecreeërd in HTML. Daarna heb ik de keuzefunctie uitgebreid met variabelen voor de wins van de speler en de wins van de computer. Deze werden opgeteld met 1 telkens wanneer de speler of de computer won. Vervolgens heb ik nog een lijn code toegevoegd om dit te weergeven in de HTML.
                <br></br>

                Voor de styling van de knoppen heb ik bootstrap gebruikt. De rest heb ik gestyled door het gebruik van flexboxen in CSS.

            </p>
        </div>
        <div class="afbeelding2">
            <img id="afbeelding1" src="../../img/development/RPS2.PNG " alt="projectimage">
        </div>
        <div class="text4">
            <h1>Wat heb ik geleerd?</h1>
            <p>Ik heb geleerd hoe ik variabelen uit Javascript kan tonen in mijn HTML. Daarnaast heb ik geleerd hoe ik CSS toevoeg aan elementen door middel van Javascript. Op deze manier kon ik bijvoorbeeld animaties toevoegen of weghalen bij elementen. Ook heb ik geleerd hoe ik afbeeldingen kan doorwisselen met Javascript. Ik kan heel veel creatieve toepassingen bedenken hiermee, en ik denk dat dit nog erg goed van pas gaat komen in de toekomst.</p>
        </div>
        <div class="text5">
            <h1>Feedback</h1>
            <p>De gekregen feedback moet nog worden genoteerd</p>
        </div>
        <div class="links">
            <div class="download">
                <h2>Klik hier om het project te downloaden</h2>
                <a href="RockPaperScissors.zip" download="RockPaperScissors.zip">
                    <p><i class="bi bi-download"></i></p>
                </a>
            </div>
            <div class="testen">
                <h2>Klik hier om het project te testen</h2>
                <a href="webpagina's/RockPaperScissors/index.php" target="_blank">
                    <p><i class="bi bi-play"></i></p>
                </a>
            </div>
            <div class="github">
                <h2>Klik hier om het project te bekijken op Github</h2>
                <a href="https://github.com/metteghijsen/RockPaperScissors" target="_blank">
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



