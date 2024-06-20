<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!-- bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div id="app">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col text-center py-3">
                        <h1>
                            {{title}}
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-10 d-flex flex-wrap align-items-center justify-content-center">
                        <div class="card" style="width: 18rem;" v-for="album in albums">
                            <img :src="album.immagine" class="card-img-top" :alt="album.titolo">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{album.titolo}}</h5>
                                <span class="card-text">{{album.artista}}</span>
                                <span class="card-text">{{album.anno}}</span>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- main.js -->
     <script src="src/main.js"></script>
</body>
</html>