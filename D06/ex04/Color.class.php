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
            $this->red = self::limit(intval($color['red']));
            $this->green = self::limit(intval($color['green']));
            $this->blue = self::limit(intval($color['blue']));
        } elseif (isset($color['rgb'])) {
            $this->red = self::limit(0xFF & intval($color['rgb']) >> 16);
            $this->green = self::limit(0xFF & intval($color['rgb']) >> 8);
            $this->blue = self::limit(0xFF & intval($color['rgb']));
        }

        if (self::$verbose) {
            printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n",
                $this->red, $this->green, $this->blue);
        }
    }
    public function __destruct()
    {
        if (self::$verbose) {
            printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n",
                $this->red, $this->green, $this->blue);
        }
    }

    public function add($add)
    {
        return (new color(array('red' => self::limit($this->red + $add->red),
            'green' => self::limit($this->green + $add->green),
            'blue' => self::limit($this->blue + $add->blue))));
    }
    public function sub($sub)
    {
        return (new color(array('red' => self::limit($this->red - $sub->red),
            'green' => self::limit($this->green - $sub->green),
            'blue' => self::limit($this->blue - $sub->blue))));
    }
    public function mult($mult)
    {
        return (new color(array('red' => self::limit($this->red * $mult),
            'green' => self::limit($this->green * $mult),
            'blue' => self::limit($this->blue * $mult))));
    }

    public function __toString()
    {
        return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )",
            array($this->red, $this->green, $this->blue)));
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
    private static function limit($color)
    {
        if ($color > 255) {
            return (255);
        } elseif ($color < 0) {
            return (0);
        } else {
            return ($color);
        }
    }
}
