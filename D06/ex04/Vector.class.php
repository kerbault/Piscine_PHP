<?php
class Vector
{
    private $_x;
    private $_y;
    private $_z;
    private $_w = 0;

    static $verbose = false;

    public function __construct(array $vector)
    {
        if (isset($vector['dest']) && $vector['dest'] instanceof Vertex) {
            if (isset($vector['orig']) && $vector['orig'] instanceof Vertex) {
                $orig = new Vertex(array('x' => $vector['orig']->get_X(), 'y' => $vector['orig']->get_Y(), 'z' => $vector['orig']->get_Z()));
            } else {
                $orig = new Vertex(array('x' => 0, 'y' => 0, 'z' => 0));
            }
            $this->_x = $vector['dest']->get_X() - $orig->get_X();
            $this->_y = $vector['dest']->get_Y() - $orig->get_Y();
            $this->_z = $vector['dest']->get_Z() - $orig->get_Z();
            $this->_w = 0;
        }
        if (Self::$verbose) {
            printf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f ) constructed\n",
                $this->_x, $this->_y, $this->_z, $this->_w);
        }

    }
    public function __destruct()
    {
        if (Self::$verbose) {
            printf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f ) destructed\n",
                $this->_x, $this->_y, $this->_z, $this->_w);
        }

    }
    public function __toString()
    {
        return (vsprintf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f )",
            array($this->_x, $this->_y, $this->_z, $this->_w)));
    }
    public static function doc()
    {
        $read = fopen("Vector.doc.txt", 'r');
        print(PHP_EOL);
        while ($read && !feof($read)) {
            print(fgets($read));
        }
        print(PHP_EOL);
    }
    public function magnitude()
    {
        return (float) sqrt(($this->_x * $this->_x) + ($this->_y * $this->_y) + ($this->_z * $this->_z));
    }
    public function normalize()
    {
        $longeur = $this->magnitude();
        if ($longeur == 1) {
            return clone $this;
        }
        return new Vector(array('dest' => new Vertex(array('x' => $this->_x / $longeur, 'y' => $this->_y / $longeur, 'z' => $this->_z / $longeur))));
    }
    public function add(Vector $rhs)
    {
        return new Vector(array('dest' => new Vertex(array('x' => $this->_x + $rhs->_x, 'y' => $this->_y + $rhs->_y, 'z' => $this->_z + $rhs->_z))));
    }
    public function sub(Vector $rhs)
    {
        return new Vector(array('dest' => new Vertex(array('x' => $this->_x - $rhs->_x, 'y' => $this->_y - $rhs->_y, 'z' => $this->_z - $rhs->_z))));
    }
    public function opposite()
    {
        return new Vector(array('dest' => new Vertex(array('x' => $this->_x * -1, 'y' => $this->_y * -1, 'z' => $this->_z * -1))));
    }
    public function scalarProduct($k)
    {
        return new Vector(array('dest' => new Vertex(array('x' => $this->_x * $k, 'y' => $this->_y * $k, 'z' => $this->_z * $k))));
    }
    public function dotProduct(Vector $rhs)
    {
        return (float) (($this->_x * $rhs->_x) + ($this->_y * $rhs->_y) + ($this->_z * $rhs->_z));
    }
    public function cos(Vector $rhs)
    {
        return ((($this->_x * $rhs->_x) + ($this->_y * $rhs->_y) + ($this->_z * $rhs->_z)) / sqrt((($this->_x * $this->_x) + ($this->_y * $this->_y) + ($this->_z * $this->_z)) * (($rhs->_x * $rhs->_x) + ($rhs->_y * $rhs->_y) + ($rhs->_z * $rhs->_z))));
    }
    public function crossProduct(Vector $rhs)
    {
        return new Vector(array('dest' => new Vertex(array(
            'x' => $this->_y * $rhs->get_Z() - $this->_z * $rhs->get_Y(),
            'y' => $this->_z * $rhs->get_X() - $this->_x * $rhs->get_Z(),
            'z' => $this->_x * $rhs->get_Y() - $this->_y * $rhs->get_X(),
        ))));
    }

    public function get_X()
    {
        return $this->_x;
    }
    public function get_Y()
    {
        return $this->_y;
    }
    public function get_Z()
    {
        return $this->_z;
    }
    public function get_W()
    {
        return $this->_w;
    }
}
