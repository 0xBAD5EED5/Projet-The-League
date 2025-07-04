<?php
class GamesController extends AbstractController {

    private GamesManager $gamesManager;

    public function __construct() {
        $this->gamesManager = new GamesManager();
    }
// Liste de toutes les parties
    public function listAllGames(): void {
        $games = $this->gamesManager->findAll();
        $partials = "matchs.phtml";
        require 'views/templates/layout.phtml';
        
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

        require 'views/templates/showGameDetails';
    }
}

