<?php

namespace App;
use Categories\NormalProduct;
use Categories\RodeWijn;
use Categories\BBQ;
use Categories\WitteWijn;
use Categories\Kloosterbier;

class ProductFabriek
{
    public static function create($naam, $kwaliteit, $verkopenVoor){
        switch ($naam) {
            case 'normal':
                return new NormalProduct($naam, $kwaliteit, $verkopenVoor);
            case 'Rode Wijn - Merlot':
                return new RodeWijn($naam, $kwaliteit, $verkopenVoor);
            case 'BBQ - Afkoop drank':
                return new BBQ($naam, $kwaliteit, $verkopenVoor);
            case 'Witte Wijn - Chardonnay':
                return new WitteWijn($naam, $kwaliteit, $verkopenVoor);  
            case 'Kloosterbier - Franziskaner':
                return new Kloosterbier($naam, $kwaliteit, $verkopenVoor);             
        }
    }
}
