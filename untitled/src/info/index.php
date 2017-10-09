<?php // index.php
Class GameConstraints
{
    var $size;
    var $strategies;
    public function __construct(array $data)
    {
        $this->size = $data['size'];
        $this->strategies = $data['strategies'];
    }
}
$infoArray = array('size'=>15, 'strategies'=>["Smart","Random"]);
$gameInfo = new GameConstraints($infoArray);
echo json_encode($gameInfo);

?>