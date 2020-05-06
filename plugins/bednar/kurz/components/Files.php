<?php namespace \Bednar\kurz\Components;

use Cms\Classes\ComponentBase;

class Files extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Files',
            'description' => 'Files'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){

        $this->files = $this->loadFiles();
    }

    protected function loadFiles(){

        return Files::all();
    }

    public $files;
}
