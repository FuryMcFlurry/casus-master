<?php

namespace Categories;

use Categories\Product;

class Kloosterbier extends Product{

    public function __construct($naam, $kwaliteit, $verkopenVoor, $maxKwaliteit = 50, $vervalsnelheid = 2) {
        //Calls upon Product.php's __construct function but modifies the $vervalsnelheid , avoids DRY. 
        parent::__construct($naam, $kwaliteit, $verkopenVoor, $maxKwaliteit, $vervalsnelheid);
    }
}
