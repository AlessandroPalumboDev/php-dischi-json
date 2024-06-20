<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <link rel="icon" href="./src/img/logo.webp" />
    
    <!-- bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!--  my css -->
      <link rel="stylesheet" href="./src/css/style.css">
    </head>
<body class="bg-black">
    <div id="app">
        <header class="bg-dark mb-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center py-1 d-flex align-items-center justify-content-around">
                        <div id="logo">
                            <img src="./src/img/logo.webp" alt="">
                        </div>
                        <h1 class="text-light">
                            {{title}}
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="container">

                <div class="row align-items-center justify-content-center">

                    <div class="col-10 d-flex flex-wrap align-items-center justify-content-center ">

                            <!-- CARD -->
                        <div class="card m-3 d-flex align-items-center text-center bg-dark text-light" v-for="album in albums">

                            <img :src="album.immagine" class="card-img-top p-3" :alt="album.titolo">

                            <div class="card-body d-flex flex-column gap-2 mb-3">

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
     <script src="src/js/main.js"></script>
</body>
</html>