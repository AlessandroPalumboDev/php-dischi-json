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
