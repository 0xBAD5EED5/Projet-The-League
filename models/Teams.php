<?php

class Teams
{
    private ?int $id = null;

    public function __construct(
        private string $name,
        private string $description,
        private string $logo
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
    public function getLogo(): string
    {
        return $this->logo;
    }
    public function setLogo(string $logo): void
    {
        $this->logo = $logo;
    }
}
