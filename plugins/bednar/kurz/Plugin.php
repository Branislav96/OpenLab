<?php namespace Bednar\Kurz;

use Backend;
use System\Classes\PluginBase;

/**
 * kurz Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'kurz',
            'description' => 'No description provided yet...',
            'author'      => 'bednar',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'bednar\kurz\Components\files' => 'files',
            'bednar\kurz\Components\vypisKurzov' => 'kurzy'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    
     /*
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'bednar\kurz\components\files' => 'Files',
        ];
    }
*/
    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'bednar.kurz.some_permission' => [
                'tab' => 'kurz',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'kurz' => [
                'label'       => 'kurz',
                'url'         => Backend::url('bednar/kurz/kurz'),
                'icon'        => 'icon-leaf',
                'permissions' => ['bednar.kurz.*'],
                'order'       => 500,
            ],
            'krok' => [
                'label'       => 'krok',
                'url'         => Backend::url('bednar/kurz/krok'),
                'icon'        => 'icon-leaf',
                'permissions' => ['bednar.kurz.*'],
                'order'       => 500,
            ]
        ];
    }
}
