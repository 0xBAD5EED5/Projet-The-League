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
    
    //Récupère une partie précise avec les noms et logos des deux équipes
    public function gameById(int $id): ?array {
    $query = $this->db->prepare("
        SELECT g.*, 
               t1.name AS team1_name, t1.logo AS team1_logo,
               t2.name AS team2_name, t2.logo AS team2_logo
        FROM games g
        JOIN teams t1 ON g.team_1 = t1.id
        JOIN teams t2 ON g.team_2 = t2.id
        WHERE g.id = :id
    ");
    $query->execute(['id' => $id]);
    $game = $query->fetch(PDO::FETCH_ASSOC);

    return $game ?: null;
}
    //Récupère tous le joueur (son nom, le mon de l'équipe... dans un tableau) 
    
    public function getPlayersForGame(int $gameId): array {
    $query = $this->db->prepare("
        SELECT players.nickname, teams.name AS team_name, perf.points, perf.assists
        FROM players
        JOIN player_performance perf ON perf.player = players.id
        JOIN teams ON players.team = teams.id
        WHERE perf.game = ?
    ");
    $query->execute([$gameId]);
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
    
}
        
       
