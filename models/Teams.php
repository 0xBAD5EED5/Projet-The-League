<?php
// Classe représentant une équipe
class Teams
{
    private ?int $id = null;

    public function __construct(
        private string $name,
        private string $description,
        private Media $logo
    ) {}

    // Getter et setter pour l'identifiant de l'équipe
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    // Getter et setter pour le nom de l'équipe
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    // Getter et setter pour le logo de l'équipe
    public function getLogo(): Media
    {
        return $this->logo;
    }
    public function setLogo(Media $logo): void
    {
        $this->logo = $logo;
    }
}
