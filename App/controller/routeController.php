<?php

require_once "Controller.php";
    
class RouteController extends Controller
{
    public function get_home()
    {
        $this->view('home');
    }

    public function get_deposit()
    {
        $this->view('deposit');
    }

    public function get_registration()
    {
        $this->view('registration');
    }

    public function get_help()
    {
        $this->view('help');
    }

}