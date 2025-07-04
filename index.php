<?php
//require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/autoload.php';

// $loader = new \Twig\Loader\FilesystemLoader('templates');
// $twig = new \Twig\Environment($loader, [
//     'debug' => true,
// ]);

// Tableau associatif avec les infos des teams
$teams = [
    [
        'name' => 'angry owls',
        'img' => 'angry-owls.png',
        'desc' => 'A team of angry owls',
        'alt'  => "Logo de l'équipe Angry Owls, tête de hibou violet stylisé sur fond violet",
        'link' => '#',
    ],
    [
        'name' => 'chatty parrots',
        'img' => 'chatty-parrots.png',
        'desc' => 'A team of chatty parrots',
        'alt'  => "Logo de l'équipe Chatty Parrots, perroquet stylisé avec des couleurs rouges et bleues",
        'link' => '#',
    ],
    [
        'name' => 'panthers',
        'img' => 'panthers.png',
        'desc' => 'A team of panthers',
        'alt'  => "Logo de l'équipe Panthers, tête de panthère noire et bleue stylisée",
        'link' => '#',
    ],
    [
        'name' => 'sparrow',
        'img' => 'sparrow.png',
        'desc' => 'A team of sparrow',
        'alt'  => "Logo de l'équipe Sparrow, oiseau bleu stylisé de profil",
        'link' => '#',
    ],
    [
        'name' => 'vendetta',
        'img' => 'vendetta.png',
        'desc' => 'A team of vendetta',
        'alt'  => "Logo de l'équipe Vendetta, lettre V stylisée entourée d’un cercle lumineux bleu",
        'link' => '#',
    ],
];
$gc = new GamesController();
$gc->listAllGames();

//require "views/templates/partials/home.phtml"; 
// Passe le tableau à Twig ici :
//echo $twig->render("teams.html.twig", [
   // 'teams' => $teams,
//]);

