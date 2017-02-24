<?php
/**
 * Created by PhpStorm.
 * User: Paper Crane
 * Date: 24/02/2017
 * Time: 10:25 SA
 */

class Shape {
    public static function getShape($type = null, $dimension = 0){
        if(!empty($type) && $dimension > 0){
            switch ($type){
                case 'circle':
                    return new Circle($dimension);
                case 'square':
                    return new Square($dimension);
                default:
                    throw new Exception("Unrecognized shape.");
            }
        }
        return null;
    }

    public function getType(){
        return get_class($this);
    }

    public function getArea(){
        $type = $this->getType();
        if(!empty($type)){
            switch ($type){
                case 'Circle':
                    return M_PI * pow($this->radius,2);
                case 'Square':
                    return pow($this->side,2);
            }
        }
    }

}

class Circle extends Shape{
    public $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
}

class Square extends Shape{
    public $side;
    public function __construct($side)
    {
        $this->side = $side;
    }
}