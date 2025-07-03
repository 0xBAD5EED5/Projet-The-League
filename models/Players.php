<?php

class Players
{
    
    private ?int $id = null;
    private string $nickname;
    private string $bio;
    private Media $portrait;
    private Teams $team;
    
    public function __construct (string $nickname, string $bio, Media $portrait, Teams $team)
    {
        
        $this -> nickname = $nickname;
        $this -> bio = $bio;
        $this -> portrait = $portrait;
        $this -> team = $team;
    }
    
    
    
    
    public function getId(): ?int
    {
        return $this->id;
    }
    
      public function setId(int $id): void
    {
        $this->id = $id;
    }
    

    public function getNickname(): string
    {
        return $this->nickname;
    }
    
    public function setNickname(string $nickname): void
    {
        $this->nickname = $nickname;
    }


    public function getBio(): string
    {
        return $this->bio;
    }
    
    public function setBio(string $bio): void
    {
        $this->bio = $bio;
    }

    public function getPortrait(): Media
    {
        return $this->portrait;
    }

    public function setPortrait(Media $portrait): void
    {
        $this->portrait = $portrait;
    } 
    
    public function getTeam(): Teams
    {
        return $this->team;
    }
    
    public function setTeam(Teams $team): void
    {
        $this->team = $team;
    }
}