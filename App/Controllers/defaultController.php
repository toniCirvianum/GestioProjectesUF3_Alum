<?php

class defaultController extends Controller
{


    public function index($values = null)
    {
        //mostra la pagina de l'aplicació
        if (!isset($_SESSION['user_logged'])) {
            $params['title'] = 'Home';
            $this->render('home/index', $params, 'site');
        } else {
            //enviar a l'aplicació
        }
    }

    public function login($values = null)
    {
        //mostra la pagina de login
    }

    public function register($values = null)
    {
        //mostra la pagina de registre
    }
}
