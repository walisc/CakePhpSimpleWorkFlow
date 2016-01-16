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
        $this->MapUserActionWorkflow = ClassRegistry::init('SimpleWorkflow.MapUserActionWorkflow');

    }

    public function GetAllWorkflowActions($workflow_id, $user_id)
    {
        $options = array("conditions" => array("MapUserActionWorkflow.is_active" => 1,
                                              "MapUserActionWorkflow.workflow_ref" => $workflow_id,
                                              "MapUserActionWorkflow.user_id" => $user_id));

        $user_workflow = $this->MapUserActionWorkflow->find("first", $options);

        if ($user_workflow["MapUserActionWorkflow"]["workflow_completed"])
        {
            return array("Completed");
        }

        $possible_actions_ref = array();

        foreach($user_workflow["WORKFLOW_MAP_USER_WA"] as $ac_ref)
        {
            if ($ac_ref["action_complete"] == 0 && $ac_ref["action_processed"] == 0)
            {
                array_push($possible_actions_ref, $ac_ref["workflow_action_ref"]);
            }
        }

        //TODO: cache all the workflow actions
        return $this->WorkflowActions->find("all", array("conditions" => array("WorkflowActions.id" => $possible_actions_ref)));
    }
}


