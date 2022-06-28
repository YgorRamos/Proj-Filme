<?php

class Director{
    public string $name;
    public int $age;
    public string $works;

    public function __construct(
        string $name,
        ?int $age = null,
        ?string $works = null
    )
    {
        $this->name = $name;
        $this->age = $age;
        $this->works = $works;
    }
}