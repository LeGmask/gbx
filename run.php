<?php
require './vendor/autoload.php';
use Manialib\Gbx\Map;

if (count($argv) <= 1) {
    print "oh noes, no folder defined.";

} else {
    $maps = glob($argv[1] . "/*");
    foreach ($maps as $map) {
        if (preg_match("/\.map\.gbx/", strtolower($map))) {
            echo $map ."\n";
            $info = Map::loadFile($map);            
            echo "name: " . $info->getName() . " -> ";
            echo $info->getCheckpointsPerLap() . " / " . $info->getNbLaps() . "\n";

        }

    }
}
