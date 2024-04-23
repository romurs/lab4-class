<?php

class Tomato
{
    private const NOTHING = 0;
    private const FLOWER = 1;
    private const GREEN_TOMATO = 2;
    private const RED_TOMATO = 3;


    private $index;
    private $state;

    public function __construct($index)
    {
        $this->index = $index;
        $this->state = self::NOTHING;
    }

    public function grow()
    {
        if ($this->state < self::RED_TOMATO) {
            $this->state++;
        }
    }

    public function isRipe()
    {
        if ($this->state == self::RED_TOMATO) {
            return true;
        }
        return false;
    }
}
