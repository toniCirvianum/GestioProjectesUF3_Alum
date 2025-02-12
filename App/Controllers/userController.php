<?php



class userController extends Controller
{

    public function index()
    {

        // mostrem la vista de login
    }



    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Recuperem les dades via post
            $username = $_POST['username'] ?? null;
            $password = $_POST['pass'] ?? null;
            //Instanciem un nou model per comprovar credencials



            //Si son corectes desem l'usuari logejat

            //Inicialitzem la vista de l'aplicació amb el missatge corresponent
            //sino, tornem a mostrar el login amb el missatge d'error
        }
    }




    public function logout()
    {
        //Gestiona el logout de l'usuari
    }

    public function register()
    {
        //Registra un nou usuari
        //Recuperar dades del post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['nom'] ?? null;
            $surname = $_POST['cognom'] ?? null;
            $username = $_POST['username'] ?? null;
            $password = $_POST['password'] ?? null;
            $cpassword = $_POST['cpassword'] ?? null;
        }
        //fem les validacions, passem true perquè comprovi si l'usuari ja existeix

        //registrem usuari


        //redirigim a la vista de l'aplicació


        //si no supera les validacions
        //tornem a la vista i enviem el post per no perdre les dades que s'han introduit

    }


    public function profile()
    {
        //carregar la vista del perfil

    }

    public function editProfile()
    {
        //gestiona l'edició del perfil
        $this->userLogged();
        //Recuperar dades del post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['nom'] ?? $_SESSION['user_logged']['nom'];
            $surname = $_POST['cognom'] ?? $_SESSION['user_logged']['cognom'];
            $username = $_POST['username'] ?? $_SESSION['user_logged']['username'];
            $password = $_POST['password'] ?? $_SESSION['user_logged']['password'];
            $cpassword = $_POST['cpassword'] ?? $_SESSION['user_logged']['password'];
        }
        //com que l'usuari ha de ser unic comprovem si s'ha modificat
        //fem validacions

        //actualitzem usuari

        //redirigim a la vista de l'aplicació
        // header('Location: /project/index');

        //si hi ha errors en les validacions
        //enviem el psot per no perdre les dades i mostrem els errors

    }
}
