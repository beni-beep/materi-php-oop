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
$kodok = new Frog("Buduk");
echo "Name : ";
echo $kodok->name;
echo "<br>Legs : ";
echo $kodok->legs;
echo "<br>Cold blooded : ";
$kodok->cold_blooded();
$visibilitasPrivate = new VisibilitasPrivate();
echo "<br>Jump : ";
$visibilitasPrivate->Hop();
