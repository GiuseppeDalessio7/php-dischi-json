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


    <div id="app">
        <div class="container">
            <div class="row" style="background-color: #333;">
                <h1 class="text-center red_c">La mia libreria di dischi</h1>

                <div class="dark modal fade " :id="`${album.author.replace(/\s+/g, '')}${index}`" tabindex="-1" :aria-labelledby="`${album.author.replace(/\s+/g, '')}${index}Label`" aria-hidden="true" v-for="(album, index) in mylist" :key="`${album.author.replace(/\s+/g, '')}${index}`">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="album card border-0 h-100 modal-body">
                                <img class="img-card-top" style="background-color: greenyellow;" :src="album.poster" alt="">
                                <div class="card-body text-center">
                                    <h2>{{album.title}}</h2>
                                    <p>{{album.author}}</p>
                                    <h4>{{album.year}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4 g-5" v-for="(album, index) in mylist" :key="`${album.author.replace(/\s+/g, '')}${index}`">
                    <div class="album card border-0 h-100" data-bs-toggle="modal" :data-bs-target="`#${album.author.replace(/\s+/g, '')}${index}`" :id="`${album.author.replace(/\s+/g, '')}${index}`">
                        <img class="img-card-top py-3 px-4 img_card" :src="album.poster" alt="">
                        <div class="card-body text-center text-white img_card">
                            <h2>{{album.title}}</h2>
                            <p>{{album.author}}</p>
                            <h4>{{album.year}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./main.js"></script>
</body>


</html>