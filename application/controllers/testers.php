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
        $ph = $this->loadHelper('Post_helper');

        if ($ph->hasValue('tester-add'))
        {
            // Add a new tester.
            $this->add($ph);
        }
        else if ($ph->hasValue('tester-action') && strlen($ph->get('tester-action')) > 0)
        {
            $action = $ph->get('tester-action');
            switch ($action)
            {
                case 'tester-action-send-invites':
                {
                    $this->sendInvites($ph);
                    break;
                }

                case 'tester-action-remove-testers':
                {
                    $this->remove($ph);
                    break;
                }
            }
        }

        $testers = $this->model->findAll();
        $this->render(array("testers" => $testers));
    }

    private function add($ph)
    {
        if ($ph->hasValue('tester-email') && strlen($ph->get('tester-email')) > 0 &&
            $ph->hasValue('tester-first-name') && strlen($ph->get('tester-first-name')) > 0 &&
            $ph->hasValue('tester-last-name') && strlen($ph->get('tester-last-name')) > 0)
        {
            $email = $ph->get('tester-email');
            $firstName = $ph->get('tester-first-name');
            $lastName = $ph->get('tester-last-name');
            if (filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $this->model->insert(array("email" => $email, "first_name" => $firstName, "last_name" => $lastName));
            }
        }
    }

    private function remove($ph)
    {
        if ($ph->hasValue('tester-select'))
        {
            $toRemove = $ph->get('tester-select');
            error_log(print_r($toRemove, true));
            $toRemove = array_keys($toRemove);
            $this->model->delete('id', $toRemove);
        }
    }
}

?>
