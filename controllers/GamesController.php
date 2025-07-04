<?php
<<<<<<< HEAD

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
=======
/**
 * Contrôleur pour la gestion des matchs (Games).
 * Gère les actions liées à l'affichage, la création, la modification et la suppression des matchs.
 * Étend AbstractController pour bénéficier des méthodes utilitaires de rendu et de redirection.
 */
class GamesController extends AbstractController
{
    // Exemple de méthode d'affichage de la liste des matchs
    // public function index() {
    //     // Récupérer les matchs via GamesManager
    //     // Appeler $this->render() avec le template et les données
    // }
}
>>>>>>> 74a7ed0dd751271b62bc64bba1eaf1fe7a23544b
