<?php

require_once 'Color.class.php';

class Vertex
{
    private $_x;
    private $_y;
    private $_z;
    private $_w = 1;
    private $_color;

    static $verbose = false;

    public function __construct($vert)
    {
        $this->_x = $vert['x'];
        $this->_y = $vert['y'];
        $this->_z = $vert['z'];
        if (isset($vert['w']) && !empty($vert['w'])) {
            $this->_w = $vert['w'];
        }

        if (isset($vert['color']) && !empty($vert['color']) && $vert['color'] instanceof Color) {
            $this->_color = $vert['color'];
        } else {
            $this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
        }
        if (Self::$verbose) {
            printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
        }

    }

    public function __destruct()
    {
        if (Self::$verbose) {
            printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
        }

    }

    public function __toString()
    {
        if (Self::$verbose) {
            return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) )", array($this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue)));
        }
        return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f )", array($this->_x, $this->_y, $this->_z, $this->_w)));
    }

    public static function doc()
    {
        $read = fopen("Vertex.doc.txt", 'r');
        print(PHP_EOL);
        while ($read && !feof($read)) {
            print(fgets($read));
        }
        print(PHP_EOL);
    }

    public function get_X()
    {
        return $this->_x;
    }

    public function set_X($x)
    {
        $this->_x = $x;
    }

    public function get_Y()
    {
        return $this->_y;
    }

    public function set_Y($y)
    {
        $this->_y = $y;
    }

    public function get_Z()
    {
        return $this->_z;
    }

    public function set_Z($z)
    {
        $this->_z = $z;
    }

    public function get_W()
    {
        return $this->_w;
    }

    public function set_W($w)
    {
        $this->_w = $w;
    }

    public function get_Color()
    {
        return $this->_color;
    }

    public function set_Color($color)
    {
        $this->_color = $color;
    }
}
