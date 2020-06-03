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
    
    public function defineProperties()
    {
        return [];
    }
    
/*
    public function onRun(){

        $this->files = $this->loadFiles();
    }

    protected function loadFiles(){

        return files::all();
        //return files::all();
        // $product = Product::find($this->id);
        //$product = $this->find($this->id);
    }*/
/*
    public function getImageAttribute()
{
        // $product = Product::find($this->id);
        $image = $this->find($this->id);
        return '<img src="'.$image->image[0]->getThumb(50, 50, 'crop').'" />';
}
*/
    public $files;
}
