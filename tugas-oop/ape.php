<?php
class Ape
{
    public function name()
    {
        echo "kera sakti ";
    }
    public $legs = 2;

    protected $sungokong = "no";
    public function cold_blooded()
    {
        echo $this->sungokong;
    }
}
class VisibilitasPrivate
{
    private $suara = "Auoo";
    public function Auo()
    {
        echo $this->suara;
    }
}
$sungokong = new Ape("kera sakti");
echo "Name : ";
echo $sungokong->name();
echo "<br>Legs : ";
echo $sungokong->legs;
echo "<br>Cold blooded : ";
$sungokong->cold_blooded();
$visibilitasPrivate = new VisibilitasPrivate();
echo "<br>Yell : ";
$visibilitasPrivate->Auo();
