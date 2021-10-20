<?php namespace Rezalael\Test\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Test Controller Back-end Controller
 */
class TestController extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    /**
     * @var string Configuration file for the `FormController` behavior.
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string Configuration file for the `ListController` behavior.
     */
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Rezalael.Test', 'test', 'testcontroller');
    }

    public function index()
    {         
        // $this->addJs('/modules/backend/formwidgets/richeditor/assets/js/build-min.js','core');
        // $this->addJs('/modules/backend/formwidgets/richeditor/assets/js/richeditor.js', 'core');
        // $this->addCss('/modules/backend/formwidgets/richeditor/assets/css/richeditor.css', 'core');
        return parent::index();
        
        
    }


    public function onContentModal()
    {
        $config = $this->makeConfig('$/rezalael/test/models/testmodel/fields_content.yaml');

        $config->model = new \Rezalael\Test\Models\TestModel;
        $widget = $this->makeWidget('Backend\Widgets\Form', $config);

        $this->vars['widget'] = $widget;
    }
}
