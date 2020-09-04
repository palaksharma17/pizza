<?php

namespace App\Utilities;
use App\Utilities\Oven;
use App\Models\Ingredient;
class Bake implements Oven{
    public function heatUp(){
        echo "10 mins to heatup";
    }
    public function bake(Pizza &$pizza){
        
        $ingradient = new Ingredient();
        $ing = $ingradient::select('*')->count();
        $pizza1 = &$pizza;
        $total = $pizza1 + $ing;
        echo $total;
    }

    public function turnOff()
    {
        echo "oven is off";
    }
}
?>