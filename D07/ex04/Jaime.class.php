<?php

class Jaime
{
    public function sleepWith($got)
    {
        if ($got instanceof Cersei) {
            print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
        } elseif ($got instanceof Tyrion) {
            print("Not even if I'm drunk !" . PHP_EOL);
        } elseif ($got instanceof Sansa) {
            print("Let's do this." . PHP_EOL);
        }
    }
}
