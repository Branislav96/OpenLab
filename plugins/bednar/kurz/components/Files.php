<?php namespace Bednar\kurz\Components;

use Cms\Classes\ComponentBase;
use Bednar\kurz\Models\kurz;

class files extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Files',
            'description' => 'Files'
        ];
    }
    /*
    public function defineProperties()
    {
        return [];
    }
    */

    public function onRun(){

        $this->files = $this->loadFiles();
    }

    protected function loadFiles(){

        return files::all();
    }

    public $files;
}
