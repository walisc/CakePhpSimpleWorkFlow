<?php

/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2016/01/16
 * Time: 12:56 AM
 */

App::uses("SimpleWorkflowAppModel","Plugin/SimpleWorkflow/Model");

class MapUserActionWorkflow extends SimpleWorkflowAppModel
{
    public $useTable = "tmap_user_action_workflow";

    public $hasMany = array(
        'WORKFLOW_MAP_USER_WA' => array(
            'className' => 'SimpleWorkflow.UserWorkflowActions',
            'foreignKey' => 'tmap_user_action_workflow_ref'
        )

    );
}