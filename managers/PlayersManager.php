<?php
// Manager pour la gestion des joueurs
class PlayersManager extends AbstractManager
{

        public function __construct()
        {
            parent::__construct();
        }
        
        
        // Récupère tous les joueurs
        public function findAll(): array {
        $stmt = $this->db->query("SELECT * FROM players");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $players = [];

        foreach ($rows as $row) {
            $mediaManager = new MediaManager();
            $mm = $mediaManager->findOne($row['portrait']);
            
            $teamManager = new TeamManager();
            $tm = $mediaManager->findOne($row['logo']);

            $team = new Players($row['nickname'], $row['bio'], $mm, $tm);
            $team->setId($row['id']);
            $players[] = $team;
        }
        return $players;
        
    }
    
    // Récupère un joueur par son ID
     public function findOne(int $id) : ? Players
    {
        $query = $this->db->prepare('SELECT * FROM players WHERE id=:id');

        $parameters = [
            "id" => $id
        ];

        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($result)
        {
            $mediaManager = new MediaManager();
            $mm = $mediaManager->findOne($row['alt']);
            
            $teamManager = new TeamManager();
            $tm = $mediaManager->findOne($row['alt']);

            
            $players = new Players($result["nickname"], $result["bio"], $mm, $tm);
            $players->setId($result["id"]);

            return $players;
        }

        return null;
    }
    
    
}







