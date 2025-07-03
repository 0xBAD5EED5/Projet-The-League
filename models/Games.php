<?php
class Games
{
    private ?int $id = null;
    private string $name;
    private DateTime $date;
    private string $team_1;
    private string $team_2;
    private ?string $winner = null;

    public function __construct(
        string $name,
        DateTime $date,
        string $team_1,
        string $team_2
    ) {
        $this->name = $name;
        $this->date = $date;
        $this->team_1 = $team_1;
        $this->team_2 = $team_2;
    }

    
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }



    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

   
   
    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    
    
    public function getTeam1(): string
    {
        return $this->team_1;
    }

    public function setTeam1(string $team_1): void
    {
        $this->team_1 = $team_1;
    }



    
    public function getTeam2(): string
    {
        return $this->team_2;
    }

    public function setTeam2(string $team_2): void
    {
        $this->team_2 = $team_2;
    }
    
    

    public function getWinner(): ?string
    {
        return $this->winner;
    }

    public function setWinner(?string $winner): void
    {
        $this->winner = $winner;
    }
}