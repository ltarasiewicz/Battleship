<?php

namespace Battleship\Helpers;

use Battleship\Definitions\Battleship;
use Battleship\Definitions\PlayingBoard;

class ShipBuilder
{
    
    private $positionResolver;
    
    public function __construct(PositionResolver $positionResolver)
    {
        $this->positionResolver = $positionResolver;
    }
       
    public function buildShip($length, $position)            
    {           
        
        $resolvedPosition = $this->positionResolver->resolvePosition( $position );          
      
            $battleship = new Battleship($length, $resolvedPosition);            
        
        
        return $battleship;
                                                   
    }
   
}