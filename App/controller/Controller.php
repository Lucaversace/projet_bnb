<?php

 class Controller
{
    public function view($view)
    {
        require VIEWS . DIRECTORY_SEPARATOR . $view . ".php";
    }
}






