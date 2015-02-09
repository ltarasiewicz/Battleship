<?php

namespace Battleship\Definitions;

class Battleship {  
    private $length;
    private $positionOfMasts = array();
    private $sunk = false;
    
    
    public function __construct($length, $position) 
    {
        $this->length = $length;
        $this->positionOfMasts[] = $position;
    }    
    
    public function getPositionOfMasts()
    {
        return $this->positionOfMasts;
    }
    
    
    public function getLength()
    {
        return $this->length;
    }
    
    public function isSunk()
    {
        return $this->sunk;
    }
    

    
}