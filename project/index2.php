<?php
class Singleton
{
    private static $instance = null;
    private $x;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
    
    public function setx($x){
        $this->x=$x;
    }
    public function getx(){
        return $this->x;
    }
}

$singleton = Singleton::getInstance();
$singleton->setx(20);
echo $singleton->getx().'<br>';

$singleton1 = Singleton::getInstance();
echo $singleton1->getx();

?>