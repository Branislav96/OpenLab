<?php namespace Bednar\kurz\Components;

use Cms\Classes\ComponentBase;
use Bednar\kurz\Models\kurz;

class vypisKurzov extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Vypis Kurzov',
            'description' => 'Vypis Kurzov'
        ];
    }

    public function onRun(){
        $this->kurzs = $this->loadKurzs();
    }

    protected function loadKurzs(){
        return kurz::all();
    }

    public $kurzs;

}
