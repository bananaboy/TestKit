<?php

class Login extends Controller
{
    function index()
    {
		global $config;

        if (!isset($_POST['username']) || !isset($_POST['password']))
        {
            // No login post vars so render the login view.
            $this->render();
        }
        else
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == $config['admin_username'] && $password == $config['admin_password'] && $config['admin_password'] != 'testkit')
            {
                // Success! Redirect to main and set the session var.
                $sh = $this->loadHelper('Session_helper');
                $sh->set('login', true);
                $this->redirect('');
            }
            else
            {
                // Failure, show error message and render login again.
                $this->render(array('message' => 'Invalid username or password!'));
            }
        }
    }
}

?>
