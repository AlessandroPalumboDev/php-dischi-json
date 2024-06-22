<?php
require_once __DIR__ .'/function.php';

$database_file = (__DIR__.'/albums.json');

// lettura della base dati
$data = file_get_contents(__DIR__.'/albums.json');

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
    // echo 'cerco di creare un album';


    $new_album = [
        "id"=> strlen($albums +1),
        "immagine" => $_POST[''],
        "titolo" => $_POST[''],
        "artista" => $_POST[''],
        "anno" => $_POST[''],
        "descrizione" => $_POST[''],
        "brani" => $_POST['']
    ];

    $result = [...$albums, $new_album];

    file_put_contents($database_file, json_encode($result));

    // 500 internal server error



}
if(isset($_GET['action']) && $_GET['action'] === 'update'){

}
if(isset($_GET['action']) && $_GET['action'] === 'delete'){

}


header('Content-Type: application/json');

echo json_encode($result);

?>