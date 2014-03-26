<?php

class Testers extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = $this->loadModel('tester');
    }

    function index()
    {
        $testers = $this->model->findAll();
        $this->render(array("testers" => $testers));
    }

    function addremove()
    {
        $ph = $this->loadHelper('Post_helper');

        if ($ph->hasValue('add') && !$ph->hasValue('remove'))
        {
            // Add a new tester.
            $this->add($ph);
        }
        else if ($ph->hasValue('remove') && !$ph->hasValue('add'))
        {
            // Remove testers.
            $this->remove($ph);
        }

        $this->redirect('testers');
    }

    private function add($ph)
    {
        if ($ph->hasValue('email') && strlen($ph->get('email')) > 0)
        {
            $email = $ph->get('email');
            if (filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $this->model->insert(array("email" => $email));
            }
        }
    }

    private function remove($ph)
    {
        if ($ph->hasValue('removeTester'))
        {
            $toRemove = $ph->get('removeTester');
            $toRemove = array_keys($toRemove);
            $this->model->delete('id', $toRemove);
        }
    }
}

?>
