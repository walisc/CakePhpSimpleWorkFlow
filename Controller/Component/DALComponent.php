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

        $this->UserWorkflowActions = ClassRegistry::init('SimpleWorkflow.UserWorkflowActions');
        $this->UserWorkflowActions->setDataSource(Configure::read("SimpleWorkflow.dbconfig"));

    }

    public function GetAllWorkflowActions()
    {
        return $this->UserWorkflowActions->find("all");
    }
}


