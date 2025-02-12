<?php

class adminController extends Controller
{


    public function showUsers()
    {
        //mostra els usuaris de l'aplicació en format de card

    }

    public function promote()
    {
        //promou un usuari a admin

    }

    public function showuser()
    {
        //mostra la info d'un usuari

    }

    public function storeuser()
    {

        //recuperem dades del post
        if ($_SESSION['user_logged']['admin']) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $id = $_POST['id'] ?? null;
                $name = $_POST['nom'] ?? null;
                $surname = $_POST['cognom'] ?? null;
                $username = $_POST['username'] ?? null;
                $password = $_POST['password'] ?? null;
                $cpassword = $_POST['cpassword'] ?? null;
            }
            //com que l'usuari ha de ser unic comprovem si s'ha modificat

            //fem les validacions, passem true perquè comprovi si l'usuari ja existeix

            //redirigim a la vista de l'aplicació


            //si hi ha errors els mostrem


        }
    }

    public function deleteuser()
    {
        //elimina un usuari i els seus projectes

    }
}
