<?php
class Figure {
    public $area;
    public $color;

    const COUNTSIDE = 4;

    public function infoAbout() {
        echo '<br> Это геометрическая фигура!';
    }
}

class Rectangle extends Figure {
    private $a;
    private $b;

    const SIDE_COUNT = 4;

    public function __construct($a, $b)
    {
    $this->a = $a;
    $this->b = $b;  
    }
    public function getArea1($a, $b)
    {
        $area = ($this->a) * ($this->b); 
        return $area;
    }

    final public function infoAbout()
    {
        echo '<b> Это класс прямоугольника. У него' . self::SIDE_COUNT . 'стороны.';
    }
}
$rectangle1 = new Rectangle(4, 6);
$rectangle2 = new Rectangle(12, 17);

echo '<b>Площадь прямоугольника 1:' . $rectangle1->getArea1();
echo '<b>Площадь прямоугольника 2:' . $rectangle2->getArea1();

class Triangle extends Figure {
    private $a;
    private $b;
    private $c;

    const SIDE_COUNT = 3;

    public function __construct($a, $b, $c)
    {
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;  
    }
    
    public function getArea2($a, $b, $c)
    {
        $p = ($a + $b + $c)/2;
        $area = sqrt($p * ($p - ($this->a)) * ($p - ($this->b)) * ($p - ($this->c)));
        return $area;
    }
    final public function infoAbout()
    {
        echo '<b> Это класс треугольника. У него' . self::SIDE_COUNT . 'стороны.';
    }

}
$triangle1 = new Treangle(2, 7, 5);
$triangle2 = new Treangle(12, 34, 92);

echo '<b>Площадь треугольника 1:' . $triangle1->getArea2();
echo '<b>Площадь треугольника 2:' . $triangle2->getArea2();

Class Square extends Figure {
    private $a;

    const SIDE_COUNT = 4;

    public function __construct($a)
    {
    $this->a = $a;   
    }

    public function getArea3($a)
    {
        $area = pow(($this->a), 2);
        return $area;
    }

    final public function infoAbout()
    {
        echo '<b> Это класс квадрата. У него' . self::SIDE_COUNT . 'стороны.';
    }
}

$square1 = new Square(7);
$square2 = new Square(13);

echo '<b>Площадь квадрата 1:' . $square1->getArea3();
echo '<b>Площадь вкадрата 2:' . $square2->getArea3();