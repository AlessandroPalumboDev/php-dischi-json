<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <link rel="icon" href="./src/img/logo.webp" />
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Rocker&family=Rock+Salt&display=swap" rel="stylesheet">    
    <!--  my css -->
    <link rel="stylesheet" href="./src/css/style.css">
</head>
<body class="bg-black user-select-none">
    <div id="app" v-cloak>
        <header class="bg-dark mb-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center py-1 d-flex align-items-center justify-content-around">
                        <div id="logo">
                            <img src="./src/img/logo.webp" alt="">
                        </div>
                        <div>
                            <h1 class="text-light rock-salt-regular">
                                {{title}}
                            </h1>
                        </div>
                        <div>
                            <button id="aggiungi" class="btn btn-secondary text-light rock-salt-regular py-2 px-3">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="container">

                <div class="row align-items-center justify-content-center">

                    <div class="col-11 d-flex flex-wrap align-items-center justify-content-center ">

                            <!-- CARD -->
                        <div class="card rounded-5 m-3 d-flex align-items-center text-center bg-dark text-light" v-for="album in albums" data-bs-toggle="modal" data-bs-target="#albumModal">

                            <img :src="album.immagine" class="card-img-top p-3 rounded-5" :alt="album.titolo">

                            <div class="card-body d-flex flex-column gap-3 mb-4">

                                <h5 class="card-title new-rocker-regular">{{album.titolo}}</h5>
                                <span class="card-text rock-salt-regular">{{album.artista}}</span>
                                <span class="card-text rock-salt-regular">{{album.anno}}</span>
                                
                            </div>

                        </div>

                            <!-- Modal -->
                        <div class="modal fade" id="albumModal" tabindex="-1" aria-labelledby="albumModalLabel" aria-hidden="false">
                            <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content  bg-dark text-light">
                                    <div class="modal-header ">
                                        <h1 class="modal-title fs-5 rock-salt-regular" id="albumModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close text-success" data-bs-dismiss="modal" aria-label="Close" ></button>
                                    </div>
                                    <div class="modal-body d-flex align-items-center justify-content-between">
                                        <div class="container-fluid">
                                            <div class="row justify-content-center">
                                                <div class="col-3 text-center mb-3">immagine copertina</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <h5 class="rock-salt-regular">Brani</h5>
                                                    <ul>
                                                        <li class="rock-salt-regular">
                                                            brano 
                                                        </li>
                                                        <li>
                                                            brano 
                                                        </li>
                                                        <li>
                                                            brano 
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-7">
                                                    <h5 class="rock-salt-regular">Info</h5>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. A iure maxime minus animi vero, corrupti itaque fugiat libero impedit perferendis quod accusantium consectetur asperiores obcaecati est temporibus unde facere nostrum?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>


                </div>

            </div>
        </main>
        <footer>
            <span class="rock-salt-regular p-3">AP</span>
        </footer>
    </div>
    <!-- bootstrap js -->
     <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- main.js -->
     <script src="src/js/main.js"></script>
</body>
</html>