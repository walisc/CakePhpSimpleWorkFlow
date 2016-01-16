<?php

/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2016/01/16
 * Time: 2:30 AM
 */

App::uses("AppModel","Model");

class SimpleWorkflowAppModel extends AppModel
{
    public function __construct($id = false, $table = null, $ds = null)
    {
        parent::__construct();
        $this->useDbConfig = Configure::read("SimpleWorkflow.dbconfig");
    }
}