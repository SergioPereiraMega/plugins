<?php namespace Spmda\Animales\Components;

use Cms\Classes\ComponentBase;
use Input;
use Illuminate\Support\Facades\DB;
use Spmda\Animales\Models\Toro;

class FilterDestacado extends ComponentBase
{
    public function componentDetails(){

        return [

            'name' => 'filtro Toro',

            'description' => 'filtro de Toros destacados'

        ];
    }


    public function onRun() {

        $this->toros = $this->filterToroDestacado();
    
    }

    protected function filterToroDestacado() {
    
                
        $toros = Toro::where('destacado', true)->get();

        return $toros;
            
    }

    public $toros;

}