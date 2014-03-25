<?php

class Main extends Controller
{
    function index()
    {
		global $config;

        if (!isset($_POST['username']) || !isset($_POST['password']))
        {
            // No login post vars so render the login view.
            $template = $this->loadView('main_view');
            $template->render();
        }
        else
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == $config['admin_username'] && $password == $config['admin_password'])
            {
                // Success! Redirect to main.
            }
            else
            {
                // Failure, show error message and render login again.
                $template = $this->loadView('main_view');
                $template->set('message', 'Invalid username or password!');
                $template->render();
            }
        }
    }
}

?>
