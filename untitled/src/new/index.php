<?php
$strategies = array("Smart", "Random"); // supported strategies

    if (!array_key_exists ("strategy", $_GET)) {
        $toJSON=array('response'=>false,'reason'=>"Strategy not specified");
    }
     else {
         if ($_GET['strategy'] == "Smart"|| $_GET['strategy']=="Random"){
            $toJSON=array('response'=>true, 'pid'=>uniqid());
         }
     }
echo json_encode($toJSON);

?>