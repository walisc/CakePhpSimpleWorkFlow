<?php
/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2015/12/24
 * Time: 9:38 PM
 */

App::uses('Component', 'Controller');

class DALComponent extends Component
{
    public function initialize(Controller $controller)
    {
        parent::initialize($controller);

        $this->WorkflowActions = ClassRegistry::init('SimpleWorkflow.WorkflowActions');
        $this->UserWorkflowActions = ClassRegistry::init('SimpleWorkflow.UserWorkflowActions');

    }

    public function GetAllWorkflowActions()
    {
        return $this->UserWorkflowActions->find("all");
    }
}


