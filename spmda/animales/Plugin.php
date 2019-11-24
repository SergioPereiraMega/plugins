<?php namespace Spmda\Animales;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Spmda\Animales\Components\FilterDestacado' => 'filterdestacado'
        ];

    }

    public function registerSettings()
    {
    }
}
