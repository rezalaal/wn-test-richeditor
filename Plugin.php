<?php namespace Rezalael\Test;

use Backend;
use System\Classes\PluginBase;

/**
 * Test Plugin Information File
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
            'name'        => 'Test',
            'description' => 'No description provided yet...',
            'author'      => 'Rezalael',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
        \Event::listen('backend.page.beforeDisplay', function ($controller, $action, $params) {                          
            $controller->addJs(\Config::get('cms.pluginsPath') . ('/rezalael/test/assets/js/test-script.js'));
        });
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
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Rezalael\Test\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'rezalael.test.some_permission' => [
                'tab' => 'Test',
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
        return []; // Remove this line to activate

        return [
            'test' => [
                'label'       => 'Test',
                'url'         => Backend::url('rezalael/test/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['rezalael.test.*'],
                'order'       => 500,
            ],
        ];
    }
}
