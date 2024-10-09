<?php

/**
 * Signup class
 */
class Signup
{
    use Controller;

    public function index()
    {   
        $user = new User;
        $user->insert($_POST);
        $this->view('signup');
    }
}
