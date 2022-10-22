<?php
class Animal
{
    public function name()
    {
        echo "Shaun ";
    }
    public $legs = 4;

    protected $sheep = "no";
    public function cold_blooded()
    {
        echo $this->sheep;
    }
}
$sheep = new Animal("shaun");
echo "Name : ";
echo $sheep->name; // "shaun"
echo "<br>Legs : ";
echo $sheep->legs; // 4
echo "<br>Cold blooded : ";
$sheep->cold_blooded(); // "no"