<?php
/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2015/12/19
 * Time: 8:45 PM
 */

App::uses('Component', 'Controller');

class SimpleWorkflowAPIComponent extends Component
{
    public $components = array('QuickEmailer.DAL');

    public function GetNextActions()
    {
        echo "hellow";
    }

    public function RegisterCompletedAction()
    {

    }

}