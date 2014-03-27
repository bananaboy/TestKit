<?php

class Apps extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = $this->loadModel('app');
    }

    function index()
    {
        $apps = $this->model->findAll();
        $this->render(array("apps" => $apps));
    }

    function addremove()
    {
        $ph = $this->loadHelper('Post_helper');

        if ($ph->hasValue('add') && !$ph->hasValue('remove'))
        {
            // Add a new app.
            $this->add($ph);
        }
        else if ($ph->hasValue('remove') && !$ph->hasValue('add'))
        {
            // Remove apps.
            $this->remove($ph);
        }

        $this->redirect('apps');
    }

    private function add($ph)
    {
        if ($ph->hasValue('name') && strlen($ph->get('name')) > 0)
        {
            $name = $ph->get('name');
            $this->model->insert(array("name" => $name));
        }
    }

    private function remove($ph)
    {
        if ($ph->hasValue('removeApp'))
        {
            $toRemove = $ph->get('removeApp');
            $toRemove = array_keys($toRemove);
            $this->model->delete('id', $toRemove);
        }
    }
}

?>
