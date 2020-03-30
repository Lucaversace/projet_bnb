<?php
namespace App\Controller;

class RouteController extends Controller
{
    public function get_home()
    {
        $this->view('home');
    }

    public function get_deposit()
    {
        $this->view('membre/deposit');
    }

    public function get_registration()
    {
        $this->view('registration');
    }

    public function get_login()
    {
        $this->view('login');
    }

    public function get_help()
    {
        $this->view('help');
    }

    public function get_profil()
    {
        $this->view('profil');
    }
}