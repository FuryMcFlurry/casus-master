<?php

namespace Categories;

abstract class Product{
    public $naam;

    public $kwaliteit;

    public $verkopenVoor;

    public $maxKwaliteit;

    public $vervalsnelheid;

    public function __construct($naam, $kwaliteit, $verkopenVoor, $maxKwaliteit = 50, $vervalsnelheid = 1){
        $this->naam = $naam;
        $this->kwaliteit = $kwaliteit;
        $this->verkopenVoor = $verkopenVoor;
        $this->maxKwaliteit = $maxKwaliteit;
        $this->vervalsnelheid = $vervalsnelheid;
    }

    /**
     * Clamps kwaliteit within the range of [0, maxKwaliteit].
     */
    public function clampQuality(){
        $this->kwaliteit = max(0, min($this->kwaliteit, $this->maxKwaliteit));
    }

    public function tick() {
        $this->verkopenVoor--;
        if ($this->verkopenVoor < 0) {
            $this->vervalsnelheid *= 2;
        }

        $this->kwaliteit -= $this->vervalsnelheid;
        $this->clampQuality();
    }
}
