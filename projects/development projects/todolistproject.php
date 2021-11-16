<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/todolistproject.css">
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
        <li><a href="../../projects/development%20projects/todolistproject.php" class="currentpage">To do list</a></li>
    </div>

    <div class="hoofdtekst">
        <p>To do list</p>
    </div>

    <div class="projectinfo">
        <p><i class="bi bi-code-slash"></i> Development</p>
        <p><i class="bi bi-person-check-fill"></i> Individueel</p>
    </div>

    <div class="grid-container">
        <div class="text">
            <h1>Inleiding</h1>
            <p>Voor mij persoonlijk was dit mijn lastigste Javascript project tot nu toe. Ik had uiteraard wel al ervaring met C en C#, dus ik wist hoe dit project technisch in elkaar zat. Echter wist ik niet hoe ik dit moest toepassen in Javascript, of hoe ik bijvoorbeeld elementen kon aanroepen. </p>
        </div>
        <div class="afbeelding">
            <img id="afbeelding1" src="../../img/development/todolist1.PNG " alt="projectimage">
        </div>
        <div class="text2">
            <h1>Ervaring</h1>
            <p> Als eerste begon ik met het opzetten van de basis in HTML. Eigenlijk had ik alleen een textbox en een submitknop nodig. Een paar simpele regels typen, en dit was opgezet. Vervolgens heb ik een titel toegevoegd en wat custom lettertypen. Daarna heb ik Bootstrap gebruikt om alles te stylen.
                <br></br>

                Dan was het nu tijd om te beginnen met Javascript. Ik wist wel ongeveer hoe het project in elkaar moest zitten:
                <br></br>
                1.	 De content uit de textbox moet worden omgezet naar een variabele. <br>
                2.	Deze content moet in een array worden gezet. <br>
                3.	De inhoud van deze array moet weergegeven worden op de webpagina. <br>

                <br></br>

                Stap 1 was erg makkelijk. Hier hoefde ik alleen een variabele voor aan te maken. Dit had ik al vaker gedaan.
                <br>Stap 2 was de content toevoegen aan de array. Dit was een wat moeilijkere stap, waar ik iets meer research naar heb moeten doen. Ik begon met het aanmaken van de functie AddItem(). Het doel van deze functie was de content uit de tekstbox toevoegen aan de array. In deze functie pak ik de content uit de textbox door middel van todoItem.value. Daarna zet ik deze waarde in de array door middel van todoItems.push. Hier is todoItems de naam van de array, en todoItem is de variabele die de content uit de textbox bevat.
                <br>Stap 3 was de inhoud van de array weergeven op de webpagina. Ik wist dat ik hier een list-items voor ging gebruiken, maar ik wist nog niet hoe ik dingen aan die list-items kon toevoegen door middel van Javascript. Hiervoor heb ik mijn docent, Frank Roosen, om hulp gevraagd. Hij had mij de code van zijn to-do-list laten zien, en doorgestuurd. Daarnaast heeft hij wat uitleg gegeven waardoor ik nu begrijp hoe ik content aan list-items toe kan voegen. Als laatste heb ik zelf nog een functie geschreven om items door te strepen. Ik heb op W3Schools een to-do-list gezien, en de functie die daar gebruikt werd voor het afstrepen van items als referentie gebruikt.</p>
        </div>
        <div class="afbeelding2">
            <img id="afbeelding1" src="../../img/development/todolist2.PNG " alt="projectimage">
        </div>
        <div class="text4">
            <h1>Wat heb ik geleerd?</h1>
            <p>Ik heb geleerd hoe ik arrays moet gebruiken in Javascript, en hoe ik deze array kan weergeven op een webpagina door het gebruiken van list-items. Ik vond het een erg lastig, maar leerzaam project, en ik denk dat ik veel inzicht heb opgedaan over het vekrijgen en bewerken van informatie op een webpagina door middel van Javascript.</p>
        </div>
        <div class="text5">
            <h1>Feedback</h1>
            <p>De gekregen feedback wordt hier genoteerd.</p>
        </div>
        <div class="links">
            <div class="download">
                <h2>Klik hier om het project te downloaden</h2>
                <a href="todolist.zip" download="todolist.zip">
                    <p><i class="bi bi-download"></i></p>
                </a>
            </div>
            <div class="testen">
                <h2>Klik hier om het project te testen</h2>
                <a href="webpagina's/todolist/index.php" target="_blank">
                    <p><i class="bi bi-play"></i></p>
                </a>
            </div>
            <div class="github">
                <h2>Klik hier om het project te bekijken op Github</h2>
                <a href="https://github.com/metteghijsen/ToDoList" target="_blank">
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
