<?php
function getAlbums($album)
{
    return[
        "id" => $album['id'],
        "immagine" => $album['immagine'],
        "titolo" => $album['titolo'],
        "artista" => $album['artista'],
        "anno" => $album['anno'],
    ];
}
function getAlbumInfo($album)
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