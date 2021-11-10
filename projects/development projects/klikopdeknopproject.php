<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/project.css">
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
        <li><a href="../../projects/development%20projects/klikopdeknopproject.php" class="currentpage">Klik op de
                knop</a></li>
    </div>

    <div class="hoofdtekst">
        <p>Klik op de knop</p>
    </div>

    <div class="projectinfo">
        <p><i class="bi bi-code-slash"></i> Development</p>
        <p><i class="bi bi-person-check-fill"></i> Individueel</p>
    </div>

    <div class="grid-container">
        <div class="text">
            <h1>Inleiding</h1>
            <p> Toen wij onze allereerste development les hadden, kwam de docent met een opdracht waarbij de bedoeling
                was
                dat wanneer er op een knop werd gedrukt, een afbeelding op een willekeurige plek op de pagina zou gaan
                staan.
                Ik vond dit een erg leuke, creatieve opdracht, en besloot dat ik er mijn eigen draai aan wilde geven.
                Ik had nog geen ervaring met Javascript, dus ik wilde mezelf wel een beetje uitdagen om net iets verder
                te gaan.</p>
        </div>
        <div class="afbeelding">
            <img id="afbeelding1" src="../../img/development/klikopdeknop1.PNG " alt="projectimage">
        </div>
        <div class="text2">
            <h1>Ervaring</h1>
            <p> Als eerste werd ons uitgelegd hoe we een EventListener moesten gebruiken, en hier vervolgens een functie
                aan moesten koppelen.
                Daarna heb ik uitgezocht hoe ik functies kon maken, en random getallen kon genereren. Aangezien dit dus
                mijn eerste keer Javascript was,
                heb ik al mijn research gedaan op de website van W3Schools. Ik heb een artikel gelezen,
                en vervolgens heb ik alles proberen toe te passen in mijn code. Om te kijken of er daadwerkelijk een
                random nummer
                gegenereerd werd, heb ik de nummers telkens in de console weergegeven. Vervolgens wilde ik aan elk
                nummer een coördinaat op de pagina
                koppelen door middel van if-statements. Na even gekeken te hebben bij klasgenoten, realiseerde ik me dat
                het handiger was om gewoon
                te werken met twee randomized X en Y waarden, die dan werden gebruikt om de knop rond te bewegen.</p>
        </div>
        <div class="text3">
            <p>De afbeelding hier langs is de uiteindelijke code van dit project. Om alles overzichtelijk en leesbaar te
                houden voor andere
                mensen heb ik besloten te werken met duidelijke variabele namen. Ik dacht dat de variabele MaxNummer een
                beetje duidelijkheid
                zou bieden voor de lezer in wat de code nou betekent. Daarna zie je dat ik twee andere variabele heb
                aangemaakt.
                positieX, voor de horizontale positie, en positieY voor de verticale positie. Daaronder volgt de code
                die achter het
                willekeurig gegenereerde nummer een % teken zet, zodat het een waarde is die gebruikt kan worden voor de
                margin.
                Hierbij heb ik expres voor % gekozen, en niet voor px, zodat heb object een grotere afstand aflegt. </p>
        </div>
        <div class="afbeelding2">
            <img id="afbeelding1" src="../../img/development/klikopdeknop2.PNG " alt="projectimage">
        </div>
        <div class="text4">
            <h1>Wat heb ik geleerd?</h1>
            <p>Ik denk dat ik best wel een goed idee heb gekregen van de basis van Javascript. Ik heb geleerd
                hoe ik variabelen kan aanmaken, hoe ik random nummers kan genereren, en hoe ik console.log kan
                gebruiken.
                Ik ben erg blij dat ik over console.log heb geleerd, want dit kan goed van pas komen wanneer
                ik stukken van mijn code wil testen. Ook heb ik de eerste hand gelegd aan if-statements en
                functies. Ik ben van mening dat dit voor nu te ingewikkeld is om te zeggen dat ik het
                beheers, maar ik ben trots op het beginnetje dat ik heb gemaakt.
                Voor een eerste project ben ik erg tevreden.</p>
        </div>
        <div class="text5">
            <h1>Feedback</h1>
            <p>Voor dit project heb ik feedback gevraagd aan Frank Roosen, aangezien hij deze opdracht had gegeven.
                Hij vond het een leuk en origineel project, en ik merkte dat hij er plezier aan beleefde
                om ermee te "spelen". Toen hij naar mijn code ging kijken, had hij wel wat kleine opmerkingen.
                Ik had al mijn variabelen aangemaakt met "var", en hij vertelde dat je "var" alleen gebruikt
                voor globale variabelen. Als ik variabelen wil aanmaken binnen een bepaalde scope, kan ik
                beter "let" gebruiken. Voor constante variabelen kan ik "const" gebruiken. Daarnaast merkte hij
                ook nog op dat ik 35 had gebruikt om de maximale margin aan te geven, en hij suggesteerde
                dat ik de schermbreedte van de gebruiker uitmeet om de maximale margin te bepalen. Ik vind
                dit zelf een erg goede suggestie, en dit is zeker iets waar ik meer research naar ga doen.</p>
        </div>
        <div class="links">
            <div class="download">
                <h2>Klik hier om het project te downloaden</h2>
                <a href="DrukOpDeKnop.zip" download="DrukOpDeKnop.zip">
                    <p><i class="bi bi-download"></i></p>
                </a>
            </div>
            <div class="testen">
                <h2>Klik hier om het project te testen</h2>
                <a href="webpagina's/drukopdeknop/index.php" target="_blank">
                    <p><i class="bi bi-play"></i></p>
                </a>
            </div>
                <div class="github">
                    <h2>Klik hier om het project te bekijken op Github</h2>
                    <a href="https://github.com/metteghijsen/DrukOpDeKnop" target="_blank">
                        <img src="../../img/github.png" alt="githublogo" ;
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
