<?php

namespace Battleship;

use Battleship\Definitions\PlayingBoard;
use Battleship\Definitions\Battleship;
use Battleship\Helpers\ShipBuilder;

class Player
{
    private $playerNo;    
    public  $shipBuilder;
    public  $playingBoard;
    
    public function __construct($playerNo, ShipBuilder $shipBuilder) 
    {
        $this->playerNo = $playerNo;
        $this->playingBoard = new PlayingBoard;
        $this->shipBuilder = $shipBuilder;
    }
                
    
    public function buildShips($length, $positions)
    {        
       foreach ($positions as $position) {
            $battleship = $this->shipBuilder->buildShip($length, $position);                            
            $this->playingBoard->positionShip($battleship);                 
       }
    }
}