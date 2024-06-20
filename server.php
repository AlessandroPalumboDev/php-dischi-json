<?php
$albums = [
    [
        'immagine'=> 'immagine',
        'titolo' => '39/Smooth',
        'artista' => 'Green Day',
        'anno' => 1990,
    ],
    [
        'immagine'=> 'immagine',
        'titolo' => 'Kerplunk',
        'artista' => 'Green Day',
        'anno' => 1992,
    ],
    [
        'immagine'=> 'immagine',
        'titolo' => 'Dookie',
        'artista' => 'Green Day',
        'anno' => 1994,
    ],
    [
        'immagine'=> 'immagine',
        'titolo' => 'Insomniac',
        'artista' => 'Green Day',
        'anno' => 1995,
    ],
    [
        'immagine'=> 'immagine',
        'titolo' => 'Nimrod',
        'artista' => 'Green Day',
        'anno' => 1997,
    ],
    [
        'immagine'=> 'immagine',
        'titolo' => 'Warning',
        'artista' => 'Green Day',
        'anno' => 2000,
    ],
    [
        'immagine'=> 'immagine',
        'titolo' => 'American Idiot',
        'artista' => 'Green Day',
        'anno' => 2004,
    ],
    [
        'immagine'=> 'immagine',
        'titolo' => '21st Century Breakdown',
        'artista' => 'Green Day',
        'anno' => 2009,
    ],
    [
        'immagine'=> 'immagine',
        'titolo' => '¡Uno!',
        'artista' => 'Green Day',
        'anno' => 2012,
    ],
    [
        'immagine'=> 'immagine',
        'titolo' => '¡Dos!',
        'artista' => 'Green Day',
        'anno' => 2012,
    ],
    [
        'immagine'=> 'immagine',
        'titolo' => '¡Tré!',
        'artista' => 'Green Day',
        'anno' => 2012,
    ],
    [
        'immagine'=> 'immagine',
        'titolo' => 'Revolution Radio',
        'artista' => 'Green Day',
        'anno' => 2016,
    ],
    [
        'immagine'=> 'immagine',
        'titolo' => 'Father of All Motherfuckers[',
        'artista' => 'Green Day',
        'anno' => 2020,
    ],
    [
        'immagine'=> 'immagine',
        'titolo' => 'Saviors',
        'artista' => 'Green Day',
        'anno' => 2024,
    ],
];

header('Content-Type: application/json');

echo json_encode($albums);

?>