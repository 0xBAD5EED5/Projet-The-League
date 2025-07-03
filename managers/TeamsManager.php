<?php
// Manager pour la gestion des équipes
class TeamsManager extends AbstractManager {

    public function __construct()
    {
        parent::__construct();
    }

    // Récupère toutes les équipes
    public function findAll(): array {
        $stmt = $this->db->query("SELECT * FROM teams");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $teams = [];

        foreach ($rows as $row) {
            $mediaManager = new MediaManager();
            $logo = $mediaManager->findOne($row['alt']);

            $team = new Teams(
                $row['name'],
                $row['description'],
                $logo
            );
            $team->setId($row['id']);
            $teams[] = $team;
        }
        return $teams;
    }

    // Récupère une équipe par son ID
    public function findOne(int $id): ?Teams {
        $stmt = $this->db->prepare("SELECT * FROM teams WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $mediaManager = new MediaManager();
            $logo = $mediaManager->findOne($row['alt']);

            $team = new Teams(
                $row['name'],
                $row['description'],
                $logo
            );
            $team->setId($row['id']);
            return $team;
        }
        return null;
    }
}