
<!DOCTYPE html>
<html lang='fr'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>snake</title>
    <style>
        canvas {
            border: 2px solid;
        }
    </style>
</head>

<body>
    <div id="qunit"></div>
    <div id="qunit-fixture"></div>


    <canvas width="400" height="400"></canvas>

    <script src="https://code.jquery.com/qunit/qunit-2.16.0.js"></script>


    <script>
// Sélection du canvas et du contexte 2D
const canvas = document.querySelector('canvas');
const context = canvas.getContext('2d');

// Taille d'une case
let box = 20;

// Initialisation du serpent et de la nourriture
let snake = [];
snake[0] = {
    x: 10 * box,
    y: 10 * box
};
let food = {
    x: Math.floor(Math.random() * 15 + 1) * box,
    y: Math.floor(Math.random() * 15 + 1) * box 
};

// Initialisation du score et de la direction
let score = 0;
let d;

// Écoute des événements de touche
document.addEventListener("keydown" , direction);

// Fonction pour définir la direction du serpent en fonction de la touche pressée
function direction(event) {
    let key = event.keyCode;
    if (key == 37 && d != "RIGHT") {
        d = "LEFT";
    } else if (key == 38 && d != "DOWN") {
        d = "UP";
    } else if (key == 39 && d != "LEFT") {
        d = "RIGHT";
    } else if (key == 40 && d != "UP") {
        d = "DOWN";
    }
}

// Fonction pour dessiner le jeu
function draw() {
    // Effacer le canvas
    context.clearRect(0, 0, 400, 400);

    // Dessiner le serpent
    for (let i = 0; i < snake.length; i++) {
        context.fillStyle = (i == 0) ? "green" : "white";
        context.fillRect(snake[i].x, snake[i].y, box, box);
        context.strokeStyle = "red";
        context.strokeRect(snake[i].x, snake[i].y, box, box);
    }

    // Dessiner la nourriture
    context.fillStyle = "orange";
    context.fillRect(food.x, food.y, box, box);

    // Déplacer le serpent
    let snakex = snake[0].x;
    let snakey = snake[0].y;
    if (d == "LEFT") snakex -= box;
    if (d == "UP") snakey -= box;
    if (d == "RIGHT") snakex += box;
    if (d == "DOWN") snakey += box;

    // Manger la nourriture
    if (snakex == food.x && snakey == food.y) {
        score++;
        food = {
            x: Math.floor(Math.random() * 15 + 1) * box,
            y: Math.floor(Math.random() * 15 + 1) * box
        };
    } else {
        snake.pop();
    }

    // Nouvelle tête du serpent
    let newhead = {
        x: snakex,
        y: snakey
    };

    // Vérifier les collisions
    if (snakex < 0 || snakey < 0 || snakex > 19 * box || snakey > 19 * box || collision(newhead, snake)) {
        clearInterval(game);
        alert("Game over !");
    }

    // Ajouter la nouvelle tête au serpent
    snake.unshift(newhead);

    // Afficher le score
    context.fillStyle = "red";
    context.font = "30px Arial";
    context.fillText(score, 2 * box, 1.6 * box);
}

// Fonction pour vérifier les collisions
function collision(head, array) {
    for (let z = 0; z < array.length; z++) {
        if (head.x == array[z].x && head.y == array[z].y) {
            return true;
        }
    }
    return false;
}

// Démarrer le jeu
let game = setInterval(draw, 100);

        </script>

    <script src="test.js"></script>



</body>

</html>
   