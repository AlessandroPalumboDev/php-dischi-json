<?php
require_once __DIR__ .'/function.php';

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
if(isset($_GET['action']) && $_GET['action'] === 'create'){

}
if(isset($_GET['action']) && $_GET['action'] === 'update'){

}
if(isset($_GET['action']) && $_GET['action'] === 'delete'){

}


header('Content-Type: application/json');

echo json_encode($result);

?>