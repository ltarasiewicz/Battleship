<?php

require_once 'vendor/autoload.php';

use Battleship\Player;
use Battleship\Helpers\PositionResolver;
use Battleship\Helpers\ShipBuilder;

$positionResolver = new PositionResolver;
$shipBuilder = new ShipBuilder($positionResolver);

$lukasz = new Player(1, $shipBuilder);
$rysiek = new Player(2, $shipBuilder);


$lukasz->buildShips(1, array([1,1], [1,1], [1,8]));


var_dump( $lukasz->playingBoard->getShipCollection() );
