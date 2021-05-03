<?php
require('./vendor/autoload.php');
use Manialib\Gbx\Map;

if (count($argv) <= 1) {
    print "oh noes, no folder defined.";

} else {
    $maps = glob($argv[1] . "/*");
    foreach ($maps as $map) {
        if (preg_match("/(\.(map|challenge)\.gbx)/", strtolower($map))) {
            echo $map;
            try {
                $info = Map::loadFile($map);
                echo " Ok!\n";
            } catch (Exception $ex) {
                echo " Error: " . $ex->getMessage() . "\n";
            }
        }
    }
}
