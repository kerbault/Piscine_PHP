<?php

class Tyrion
{
    public function sleepWith($got)
    {
        if ($got instanceof Jaime) {
            print("Not even if I'm drunk !" . PHP_EOL);
        } elseif ($got instanceof Sansa) {
            print("Let's do this." . PHP_EOL);
        } elseif ($got instanceof Cersei) {
            print("Not even if I'm drunk !" . PHP_EOL);
        }
    }
}
