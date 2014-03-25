<?php

class Main extends Controller
{
    function index()
    {
        $sh = $this->loadHelper('Session_helper');
        if (!$sh->hasKey('login') || !$sh->get('login'))
        {
            // Not logged in. Redirect to login screen.
            $this->redirect('login');
            return;
        }

        // Logged in.
        $this->render();
    }
}

?>
