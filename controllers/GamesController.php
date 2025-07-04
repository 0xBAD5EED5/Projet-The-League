<?php

require_once 'models/managers/GamesManager.php';

class GameController {

    private GamesManager $gamesManager;

    public function __construct(PDO $pdo) {
        $this->gamesManager = new GamesManager($pdo);
    }
// Liste de toutes les parties
    public function listAllGames(): void {
        $games = $this->gamesManager->findAll();
        require 'views/games/listAllGames';
        
    }

    //les détails d’une partie en particulier

    public function showGameDetails(int $id): void {
        $game = $this->gamesManager->gameById($id);

        if (!$game) {
            // Match introuvable → redirection ou message d’erreur
            echo "Partie non trouvée.";
            return;
        }

        $players = $this->gamesManager->getPlayersForGame($id);

        require 'views/games/showGameDetails';
    }
}