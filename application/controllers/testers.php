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
        else if ($ph->hasStringValue('tester-action'))
        {
            $action = $ph->get('tester-action');
            $selectedIds = $this->getSelectedIds($ph);
            if (count($selectedIds) > 0)
            {
                switch ($action)
                {
                    case 'tester-action-send-invites':
                    {
                        $this->sendInvites($selectedIds);
                        break;
                    }

                    case 'tester-action-remove-testers':
                    {
                        $this->remove($selectedIds);
                        break;
                    }
                }
            }
        }

        $testers = $this->model->findAll();
        $this->render(array("testers" => $testers));
    }

    private function add($ph)
    {
        if ($ph->hasStringValue('tester-email') &&
            $ph->hasStringValue('tester-first-name') &&
            $ph->hasStringValue('tester-last-name'))
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

    private function getSelectedIds($ph)
    {
        $ids = array();

        if ($ph->hasValue('tester-select') && is_array($ph->get('tester-select')))
        {
            $ids = $ph->get('tester-select');
            $ids = array_keys($ids);
        }

        return $ids;
    }

    private function remove($selectedIds)
    {
        $this->model->delete('id', $selectedIds);
    }

    private function sendInvites($ph)
    {
    }
}

?>
