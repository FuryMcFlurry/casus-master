<?php

namespace Categories;

use Categories\Product;

class WitteWijn extends Product{

    /*
    Different rates for $kwaliteit at different level of $verkopenVoor. See below.
	-if on tick VerkopenVoor was 10 or less, Kwaliteit raises by two increments instead. (set $vervalsnelheid to 2)
	-If on tick VerkopenVoor was 5 or less, Kwaliteit raises by three instead. (set $vervalsnelheid to 3)
	-However if VerkopenVoor's value was 0, set the Kwaliteit to 0.
    */

    public function tick() {
        $this->verkopenVoor--;

        switch (true) {
            case $this->verkopenVoor < 0:
                $this->kwaliteit = 0; 
                $this->vervalsnelheid = 0;
                return;
            case $this->verkopenVoor <= 5:
                $this->vervalsnelheid = 3;
                break;
            case $this->verkopenVoor < 10:
                $this->vervalsnelheid = 2;
                break;
            default:
                $this->vervalsnelheid = 1;
                break;
        }

        $this->kwaliteit += $this->vervalsnelheid;
        $this->clampQuality();
    }
}
