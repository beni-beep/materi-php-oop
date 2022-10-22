<?php
class Frog
{
    public function name()
    {
        echo "Buduk ";
    }
    public $legs = 4;

    protected $kodok = "no";
    public function cold_blooded()
    {
        echo $this->kodok;
    }
}
class VisibilitasPrivate
{
    private $loncat = "Hop Hop";
    public function Hop()
    {
        echo $this->loncat;
    }
}
$sungokong = new Frog("Buduk");
echo "Name : ";
echo $sungokong->name;
echo "<br>Legs : ";
echo $sungokong->legs;
echo "<br>Cold blooded : ";
$sungokong->cold_blooded();
$visibilitasPrivate = new VisibilitasPrivate();
echo "<br>Jump : ";
$visibilitasPrivate->Hop();
