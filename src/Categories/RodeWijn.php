<?php

namespace Categories;

use Categories\Product;

class RodeWijn extends Product{

    public function tick() {
        $this->verkopenVoor--;
        if ($this->verkopenVoor < 0) {
            $this->vervalsnelheid *= 2;
        }

        $this->kwaliteit += $this->vervalsnelheid;
        $this->clampQuality();
    }
}
