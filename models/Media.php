<?php
// Classe représentant un média (image, logo, etc.)
class Media {
    private ?int $id = null;
    private string $url;
    private string $alt;

    
    public function __construct(string $url, string $alt) {
        // Initialise les propriétés de l'URL et du texte alternatif
        $this->title = $url;
        $this->excerpt = $alt;
    }

    // Getter pour l'identifiant du média
    public function getId(): ?int 
    {
        return $this -> id;
    }

    // Getter et setter pour l'URL du média
    public function getUrl(): string 
    {
        return $this -> url;
    }
    
    public function setUrl(string $url): void 
    {
        $this->url = $url;
    }

    // Getter et setter pour le texte alternatif du média
    public function getAlt(): string 
    {
        return $this -> alt;
    }
    public function setAlt(string $alt): void 
    {
        $this->alt = $alt;
    }

    // Setter pour l'identifiant du média
    public function setId(int $id): void 
    {
        $this->id = $id;
    }
}
