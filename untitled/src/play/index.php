<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 10/5/2017
 * Time: 7:27 AM
 */

if (!array_key_exists ("strategy", $_GET)) {
    $toJSON=array('response'=>false,'reason'=>"Strategy not specified");
}
else {
    if ($_GET['strategy'] == "Smart"|| $_GET['strategy']=="Random"){
        $toJSON=array('response'=>true, 'pid'=>uniqid());
    }
}
$coords = explode(",", $_GET["move"]);

$x = intval($coords[0]);
$y = intval($coords[1]);
$playerMove = $game->makePlayerMove($x,$y);
