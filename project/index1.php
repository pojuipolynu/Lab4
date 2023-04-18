<?php
class Food
{
    public $name;
    public $taste;

    public function __construct($name, $taste)
    {
        $this->name = $name;
        $this->taste = $taste;
    }
    public function __destruct()
    {
        echo "<br>The food is $this->name and tastes $this->taste";
    }
    public function food_name()
    {
        echo "<br>The food is $this->name.";
    }
}
class Fruit extends Food
{
    public $color;
    public $shape;
    public function __construct($name, $taste, $color, $shape) {
        parent::__construct($name, $taste);
        $this->color = $color;
        $this->shape = $shape;
    }
    public function getcolor(){
        return $this->color;
    }
    public function getshape(){
        return $this->shape;
    }

}

$food1 = new Food("Lemon", "sour");
$fruit1 = new Fruit("Apple", "sweet", "green", "round");
$food1 -> food_name();
echo "<br>". $fruit1->food_name(). "Fruit`s shape and color are: ". $fruit1->getcolor(). ", ". $fruit1->getshape(). ".";
?>