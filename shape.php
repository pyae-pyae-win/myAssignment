<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        abstract class Shape
        {
            public $color;
            public $fill;
            public function __construct($color,$fill)
            {
                $this->color=$color;
                $this->fill=$fill;

            }
            public function set_color($color)
            {
                $this->color=$color;
            }
            public function set_fill($fill)
            {
                $this->fill=$fill;
            }
            public function get_color($color)
            {
                 return $this->color;
            }
            public function get_fill($fill)
            {
                return $this->fill;
            }
            abstract public  function getArea();
            
            abstract public function getPerimeter();

            
            abstract public function Info();
        }

        class Circle extends Shape
        {
            public $radius;
            public function __construct($radius)
            {   
                
                $this->radius=$radius;
            }
            public function getArea()
            {   
                $area=pi()*$this->radius*$this->radius;
                $this->area=$area;
                return  $this->area ;
            }

            public function getPerimeter()
            {
                $perimeter=2*pi()*$this->radius;
                $this->perimeter=$perimeter;
                return $this->perimeter;
            }
            public function Info()
            {
                echo "Color= {$this->color} <br> Filled={$this->fill} <br> The area of a circle= {$this->area} <br> The perimeter of a circle={$this->perimeter} ";
            }
        }

        class Rectangle extends Shape
        {
            public $width;
            public $height;
            public function __construct($width,$height)
            {   
                
                $this->width=$width;
                $this->height=$height;
            }
            public function getArea()
            {   
                $area=$this->width*$this->height;
                $this->area=$area;
                return  $this->area ;
            }

            public function getPerimeter()
            {
                $perimeter=2*(($this->width)+($this->height));
                $this->perimeter=$perimeter;
                return $this->perimeter;
            }
            public function Info()
            {
                echo " Color= {$this->color} <br> Filled={$this->fill} <br> The area of a rectangle= {$this->area} <br> The perimeter of a rectangle={$this->perimeter} ";
            }
        }

        class Square extends Rectangle
        {
        
            
            public function __construct($width, $height)
            {   
                
                $this->width=$width;
                $this->height=$height;
            }
            
            public function Info()
            {
                echo "Color= {$this->color} <br> Filled={$this->fill} <br> The area of a square= {$this->area} <br> The  perimeter of a square={$this->perimeter} ";
            }
        }
        ?>
    
</body>
</html>