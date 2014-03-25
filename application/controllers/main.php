<?php

class Main extends Controller
{
    function index()
    {
        $this->render();
    }

    function logout()
    {
        $sh = $this->loadHelper('Session_helper');
        $sh->clear('login');
        $this->redirect('login');
    }
}

?>
