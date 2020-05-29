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
    public function get_annonce()
    {
        $this->view('annonce');
    }

    public function get_search()
    {
        $this->view('search');
    }
    public function get_profil_member()
    {
        $this->view('profil_member');
    }
    public function util_logout()
    {
        $this->utils('logout');
    }
    public function get_forget()
    {
        $this->view('forgetpasswd');
    }
    public function delete_annonce()
    {
        $this->utils('supprimer_annonce');
    }
}

