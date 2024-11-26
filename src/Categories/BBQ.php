<?php

namespace Categories;

use Categories\Product;

class BBQ extends Product{

    public function __construct($naam, $kwaliteit, $verkopenVoor , $maxKwaliteit = 80) {
        //Calls upon Product.php's __construct function applying the new upper $maxKwaliteit , avoids DRY. 
        $vervalsnelheid = 0;
        parent::__construct($naam, $kwaliteit, $verkopenVoor, $maxKwaliteit, $vervalsnelheid);
    }

    public function tick() {
        // $this->kwaliteit = $this->maxKwaliteit;
    }
}
