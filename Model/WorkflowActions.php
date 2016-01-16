<?php

/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2016/01/16
 * Time: 12:56 AM
 */

App::uses("SimpleWorkflowAppModel","Plugin/SimpleWorkflow/Model");

class WorkflowActions extends SimpleWorkflowAppModel
{
    public $useTable = "t_workflow_actions";
}