<?php
class GamesManager  extends AbstractManager {

    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }
//Récupère toutes les parties
    public function findAll(): array {
    $query = $this->db->prepare('SELECT * FROM games');
    $query->execute();
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);

    $games = []; // Correction ici

    foreach ($rows as $row) {
        $games[] = new Games( // On ajoute à la liste avec []
            $row['name'],
            DateTime::createFromFormat('Y-m-d H:i:s', $row['date']),
            $row['team_1'],
            $row['team_2'],
            $row['winner']
        );
    }

    return $games;
}
    
    //Récupère une partie précise (par ID)
    public function gameById(int $id): ?array {
        $query = $this->db->prepare('SELECT * FROM games WHERE id = :id');
        $query->execute(['id' => $id]);
        $game = $query->fetch(PDO::FETCH_ASSOC);

        return $game ?: null;
    }
    
    //Récupère tous les joueurs qui ont joué dans une partie
    
    public function getPlayersForGame(int $gameId): array {
    $query = $this->db->prepare("
        SELECT players.*, perf.points, perf.assists
        FROM players
        JOIN player_performance perf ON perf.player = players.id
        WHERE perf.game = ?
    ");
    $query->execute([$gameId]);
    return $query->fetchAll(PDO::FETCH_ASSOC);
    
    }
    
}
        
       
