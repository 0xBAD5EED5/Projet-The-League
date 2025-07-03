<?php
// Classe représentant un match entre deux équipes
class Games
{
    private ?int $id = null;
    private string $name;
    private DateTime $date;
    private Teams $team_1;
    private Teams $team_2;
    private Teams $winner;

    public function __construct(
        string $name,
        DateTime $date,
        Teams $team_1,
        Teams $team_2,
        Teams $winner
    ) {
        $this->name = $name;
        $this->date = $date;
        $this->team_1 = $team_1;
        $this->team_2 = $team_2;
    }

    // Getter et setter pour l'identifiant du match
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    // Getter et setter pour le nom du match
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    // Getter et setter pour la date du match
    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    // Getter et setter pour la première équipe
    public function getTeam1(): Teams
    {
        return $this->team_1;
    }

    public function setTeam1(Teams $team_1): void
    {
        $this->team_1 = $team_1;
    }

    // Getter et setter pour la deuxième équipe
    public function getTeam2(): Teams
    {
        return $this->team_2;
    }

    public function setTeam2(Teams $team_2): void
    {
        $this->team_2 = $team_2;
    }

    // Getter et setter pour l'équipe gagnante
    public function getWinner(): Teams
    {
        return $this->winner;
    }

    public function setWinner(Teams $winner): void
    {
        $this->winner = $winner;
    }
}