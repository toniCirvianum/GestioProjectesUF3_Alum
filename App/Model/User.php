<?php

use App\Model\Orm;

class User extends Orm
{

    public function __construct()
    {
        parent::__construct('users');
        if (!isset($_SESSION['id_user'])) {
            $_SESSION['id_user'] = 4;
        }
        $this->createTable();
    }

    public function createTable()
    {
        //crear la sentencia sql per crear la taula users
        //utlitzar "CREATE TABLE IF NOT EXISTS"
        //executar el metode queryDataBase per executar la sentencia sql
    }

    public function login($us, $pass)
    {
        //gestiona el login de l'usuari
        //retorna l'usuari logejat o null si no s'ha logejat

    }

    public function getByUsername($username)
    {
        //Retorna el usuari amb username=$username o null si no existeix

    }

    public function promote($id)
    {
        //promo a admin usuari amb id=$id
        //retorna el usuari promocionat

    }
}
