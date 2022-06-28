<?php

enum MovieGender{
    case DRAMA;
    case ACTION;
    case HORROR;
    case THRILLER;
    case COMEDY;

    public function __toString()
    {
        return $this->name;
    }
}
