<?php

class NightsWatch implements IFighter
{
    public $team = array();
    public function recruit($new)
    {
        $this->team[] = $new;
    }
    public function fight()
    {
        foreach ($this->team as $new) {
            if (method_exists(get_class($new), 'fight')) {
                $new->fight();
            }

        }
    }
}
