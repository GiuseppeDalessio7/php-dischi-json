<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>



    <h1 class="text-center">La mia libreria dei dischi</h1>

    <div v-for="album in disc" class="card" style="background-color:orangered; border-color:darkblue;">
        <img class="card-img-top" src="disc.poster" alt="Title">
        <div class="card-body">
            <h4 class="card-title">{{disc.title}}</h4>
            <p class="card-text">{{disc.year}}</p>
        </div>
    </div>



    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./main.js"></script>
</body>


</html>