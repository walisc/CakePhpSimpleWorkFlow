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
    public $components = array('SimpleWorkflow.DAL');

    public function initialize(Controller $controller)
    {
        $this->DAL->initialize($controller);
    }

    public function GetNextActions($workflow_id, $user_id)
    {
        return $this->DAL->GetAllWorkflowActions($workflow_id, $user_id);
    }

    public function RegisterCompletedAction()
    {

    }

}