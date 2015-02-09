<?php

namespace Battleship\Definitions;

class PlayingBoard
{
    private $theBoard = array();
    private $takenSlots = array();
    private $shipCollection = array();
    
    public function __construct() 
    {
        $this->theBoard = range(1, 100);
    }
    
    public function positionShip($battleship)
    {

        foreach($battleship->getPositionOfMasts() as $positionOfMast) {                                
            if ( in_array($positionOfMast, $this->takenSlots) ) {            
                return false;                       
            }                   
            
            $this->takenSlots[] = $positionOfMast;
        }
        
        $this->shipCollection[] = $battleship;
        
        return true;
                        
    }
    
    public function getShipCollection()
    {
        return $this->shipCollection;
    }
    
}