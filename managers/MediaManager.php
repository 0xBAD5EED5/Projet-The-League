<?php


class MediaManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function findAll(): array {
        $stmt = $this->db->query("SELECT * FROM medias");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $medias = [];
    
        foreach ($rows as $row) {
            $media = new Media(
                $row['id'],
                $row['url'],
                $row['alt'],
            );
            $medias[] = $media;
        }
        return $medias;
    }

   public function findOne(int $id) : ? Media
    {
        $query = $this->db->prepare('SELECT * FROM medias WHERE id=:id');

        $parameters = [
            "id" => $id
        ];

        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($result)
        {
            $media = new Media($result["id"], $result["url"], $result["alt"]);
            $media->setId($result["id"]);

            return $media;
        }

        return null;
    }
}