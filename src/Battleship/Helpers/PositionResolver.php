<?php

namespace Battleship\Helpers;

class PositionResolver
{    
    
    public function resolvePosition($position = array())
    {
      
        $resolvedPosition[] = $position[0] + 1 + $position[1] * 6; 
        
        return $resolvedPosition;
    }
       

}