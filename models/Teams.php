<?php

class Teams
{
    private ?int $id = null;

    public function __construct(
        private string $name,
        private string $description,
        private Media $logo
    ) {}

    // ID
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    // Name
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    // Logo
    public function getLogo(): Media
    {
        return $this->logo;
    }
    public function setLogo(Media $logo): void
    {
        $this->logo = $logo;
    }
}
