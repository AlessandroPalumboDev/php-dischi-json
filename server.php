<?php
require_once __DIR__ .'/function.php';

$database_file = __DIR__.'/albums.json';

// lettura della base dati
$data = file_get_contents($database_file);

// parametro - azione (crea, leggi, aggiungi, elimina) => CRUD (create, read, update, delete)

$albums = json_decode($data, true); // restituisce un array associativo php

$result = $albums;

$result = array_map('getAlbums', $result);


if(isset($_GET['action']) && $_GET['action'] === 'read'){

    // echo 'voglio leggere un album';

    if(isset($_GET['id'])){

        $index = $_GET['id'];

        $album_position = array_search($_GET['id'], array_column($albums, 'id'));

        if($album_position!== false){
            $result = $albums[$album_position];
        }

    };



}
if(isset($_POST['action']) && $_POST['action'] === 'create'){


    $new_album = [
        "id"=> rand(30, 50),
        "immagine" => $_POST['immagine'],
        "titolo" => $_POST['titolo'],
        "artista" => $_POST['artista'],
        "anno" => $_POST['anno'],
        "descrizione" => $_POST['descrizione'],
        "brani" => $_POST['brani']
    ];

    $result = [...$albums, $new_album];


    file_put_contents($database_file, json_encode($result));

    // COSA SUCCEDE AL FILE ALBUMS.JSON DOPO CHE FACCIO LA CHIAMATA POST???




}
if(isset($_GET['action']) && $_GET['action'] === 'update'){

}
if(isset($_GET['action']) && $_GET['action'] === 'delete'){

}


header('Content-Type: application/json');

echo json_encode($result);

?>