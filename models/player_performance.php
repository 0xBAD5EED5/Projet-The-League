<?php
class Player_performance
{
    private ?int $id = null;
    private Player $player;
    private Game $game;
    private string $points;
    private Teams $assists;

    public function __construct(
        Player $player,
        Game $game,
        string $points,
        Teams $assists,
    ) {
        $this->player= $player;
        $this->game = $game;
        $this->points = $points;
        $this->assists = $assists;
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


    // Getter et setter pour l'id du joueur
    public function getPlayer(): Player
    {
        return $this->player;
    }

    public function setPlayer(Player $player): void
    {
        $this->player= $player;
    }

    // Getter et setter pour numero du game
    public function getGame(): Game
    {
        return $this->game;
    }

    public function setGame(Game $game): void
    {
        $this->game = $game;
    }

    // Getter et setter pour des points
    public function getPoints(): string
    {
        return $this->points;
    }

    public function setPoints(string $assists): void
    {
        $this->points = $points;
    }
    
    // Getter et setter pour des assists
    public function getAssists(): string
    {
        return $this->assists;
    }

    public function setAssists(string $assists): void
    {
        $this->points = $assists;
    }
}