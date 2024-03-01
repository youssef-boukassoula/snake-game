<!DOCTYPE html>
<html lang='fr'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>snake</title>
    <style>

        body {
            
            background-image: url(' data:image/png;base64,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 ');
           
            background-repeat: repeat;
           
            background-size: cover;
        }
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

const canvas = document.querySelector('canvas');
const context = canvas.getContext('2d');


let box = 20;


let snake = [];
snake[0] = {
    x: 10 * box,
    y: 10 * box
};
let food = {
    x: Math.floor(Math.random() * 15 + 1) * box,
    y: Math.floor(Math.random() * 15 + 1) * box 
};


let score = 0;
let d;


document.addEventListener("keydown" , direction);


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


function draw() {
  
    context.clearRect(0, 0, 400, 400);

  
    for (let i = 0; i < snake.length; i++) {
        context.fillStyle = (i == 0) ? "green" : "white";
        context.fillRect(snake[i].x, snake[i].y, box, box);
        context.strokeStyle = "red";
        context.strokeRect(snake[i].x, snake[i].y, box, box);
    }

    
    context.fillStyle = "orange";
    context.fillRect(food.x, food.y, box, box);

   
    let snakex = snake[0].x;
    let snakey = snake[0].y;
    if (d == "LEFT") snakex -= box;
    if (d == "UP") snakey -= box;
    if (d == "RIGHT") snakex += box;
    if (d == "DOWN") snakey += box;

    
    if (snakex == food.x && snakey == food.y) {
        score++;
        food = {
            x: Math.floor(Math.random() * 15 + 1) * box,
            y: Math.floor(Math.random() * 15 + 1) * box
        };
    } else {
        snake.pop();
    }

  
    let newhead = {
        x: snakex,
        y: snakey
    };

    
    if (snakex < 0 || snakey < 0 || snakex > 19 * box || snakey > 19 * box || collision(newhead, snake)) {
        clearInterval(game);
        alert("Game over !");
    }

    
    snake.unshift(newhead);

   
    context.fillStyle = "red";
    context.font = "30px Arial";
    context.fillText(score, 2 * box, 1.6 * box);
}


function collision(head, array) {
    for (let z = 0; z < array.length; z++) {
        if (head.x == array[z].x && head.y == array[z].y) {
            return true;
        }
    }
    return false;
}


let game = setInterval(draw, 100);

        </script>

    <script src="test.js"></script>



</body>

</html>
