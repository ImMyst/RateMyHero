<?php

class Review
{
    private $name;
    private $type;
    private $note;

    public function __construct(string $name, string $type, int $note)
    {
        $this->name = $name;
        $this->type = $type;
        $this->note = $note;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getNote(): integer
    {
        return $this->note;
    }
}


$review = [
new Review("Light Yagami","antagoniste", 3),
new Review("John Snow","heros", 5),
new Review("L","heros", 8),
];
foreach($reviews as $review)
{
    echo sprintf(
      "%s %s à obtenu une note de %d",
      $type === 'heros' ? "Le héro" : "L'antagoniste",
      $name,
      $note
    );
}
