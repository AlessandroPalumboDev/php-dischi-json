<?php
require_once __DIR__ .'/function.php';

$data = file_get_contents(__DIR__.'/albums.json');

// elaborare i risultati - ricerca, aggiunta album

$albums = json_decode($data, true); // restituisce un array associativo php

// elaborazione per richiesta per tutti gli albums

$result = $albums;

$result = array_map('getAlbums', $result);



header('Content-Type: application/json');

echo json_encode($result);

?>