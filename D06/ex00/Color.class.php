<?php

class Color
{
    public $red = 0;
    public $green = 0;
    public $blue = 0;

    static $verbose = false;

    public function __construct(array $color)
    {
        if (isset($color['red']) && isset($color['green']) && isset($color['blue'])) {
            $this->red = intval($color['red']);
            $this->green = intval($color['green']);
            $this->blue = intval($color['blue']);
        } elseif (isset($color['rgb'])) {
            $this->red = intval($color['rgb']) / 65281 % 256;
            $this->green = intval($color['rgb']) / 256 % 256;
            $this->blue = intval($color['rgb']) % 256;
        }

        if (self::$verbose) {
            printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.", $this->red, $this->green, $this->blue);
        }
    }
    public function __destruct()
    {
        if (self::$verbose) {
            printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.", $this->red, $this->green, $this->blue);
        }
    }

    public function add()
    {

    }
    public function sub()
    {

    }
    public function mult()
    {

    }

    public function __toString()
    {
        return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue)));
    }
    public static function doc()
    {
        $read = fopen('Color.doc.txt', 'r');
        print(PHP_EOL);
        while ($read && !feof($read)) {
            print(fgets($read));
        }
        print(PHP_EOL);
    }
}

$instance = new Color();

print($instance . PHP_EOL);
$instance::doc();
