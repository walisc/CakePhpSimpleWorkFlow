<?php

/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2016/01/16
 * Time: 12:55 AM
 */

App::uses("SimpleWorkflowAppModel","Plugin/SimpleWorkflow/Model");

class UserWorkflowActions extends SimpleWorkflowAppModel
{
    public $useTable = "t_user_workflow_actions";


    public $belongsTo = array(
        'USER_WA_ACTION' => array(
            'className' => 'SimpleWorkflow.WorkflowActions',
            'foreignKey' => 'workflow_action_ref'
        )
    );

}