document.addEventListener('keydown', logKey);

function logKey(e) {
    const body = document.getElementById("body");
    switch(e.key) {
        case 'a':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("darkred");
            break;

        case 'b':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("lightred")
            break;

        case 'c':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("red")
            break;

        case 'd':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("orange")
            break;

        case 'e':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("lightorange")
            break;

        case 'f':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("darkorange")
            break;

        case 'g':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("yellow")
            break;

        case 'h':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("lightyellow")
            break;

        case 'i':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("darkyellow")
            break;

        case 'j':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("lightgreen")
            break;

        case 'k':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("green")
            break;

        case 'l':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("darkgreen")
            break;

        case 'm':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("greenyellow")
            break;

        case 'n':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("blue")
            break;

        case 'o':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("darkblue")
            break;

        case 'p':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("bluegreen")
            break;

        case 'q':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("lightblue")
            break;

        case 'r':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("purple")
            break;

        case 's':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("mediumpurple")
            break;

        case 't':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("darkpurple")
            break;

        case 'u':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("black")
            break;

        case 'v':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("gray")
            break;

        case 'w':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("lightgray")
            break;

        case 'x':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("darkgray")
            break;

        case 'y':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("white")
            break;

        case 'z':
            body.classList.remove(body.classList.toString());
            body.classList.toggle("epicgreen")
            break;
    }
}


