<?php
function getAlbums($album)
{
    return[
        "immagine" => $album['immagine'],
        "titolo" => $album['titolo'],
        "artista" => $album['artista'],
        "anno" => $album['anno'],
    ];
}
function getAlbumsInfo($album)
{
    return[
        "immagine" => $album['immagine'],
        "titolo" => $album['titolo'],
        "artista" => $album['artista'],
        "anno" => $album['anno'],
        "brani" => $album['brani'],
        "descrizione" => $album['descrizione'],
    ];
}