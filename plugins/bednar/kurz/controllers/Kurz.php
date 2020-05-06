<?php namespace Bednar\Kurz\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Kurz Back-end Controller
 */
class Kurz extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Bednar.Kurz', 'kurz', 'kurz');
    }
}
