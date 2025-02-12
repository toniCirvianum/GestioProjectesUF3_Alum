<?php

class Controller
{
    protected function render($path, $params = [], $layout = "")
    {
        //rennderitzar la vista amb les dades que li passem
        ob_start();
        require_once(__DIR__ . "/../Views/" . $path . ".view.php");
        $params['content'] = ob_get_clean();
        require_once(__DIR__ . "/../Views/layouts/" . $layout . ".layout.php");
    }

    public function validate($data, $updateUsername)
    {
        //valida les dades que li passem
        $username = $data['username'];
        $password = $data['password'];
        $cpassword = $data['cpassword'];

        if (!$this->validateUsername($username)) {
            return "El username ha de tenir minuscules i entre 4 i 20 caracters";
        }

        if (!$this->uniqueUsername($username) && $updateUsername) {
            return "El username ja existeix";
        }

        if ($password != $cpassword) {
            return "Les contrasenyes no coincideixen";
        }

        if (!$this->validatePassword($password)) {
            return "La contrasenya ha de tenir almenys 8 caracters, una minúscula i una majúscula";
        }

        return null;
    }


    public function validateUsername($username)
    {
        //validar que el username tingui entre 4 i 20 caracters
        //Expressio regular corresponet '/^[a-z]{4,20}$/'
    }

    public function validatePassword($password)
    {
        // Verificar que la contraseña tiene al menos 8 caracteres, una minúscula y una mayúscula
        // Expressió regular corresponent '/^(?=.*[a-z])(?=.*[A-Z]).{8,}$/'

    }

    public function uniqueUsername($username)
    {
        //validar que el username no estigui repetit

    }

    public function showData($data)
    //mostra les dades que li passem formatejades
    {
        echo "<pre>";
        if (is_array($data)) {
            print_r($data);
        } else {
            echo $data;
        }
        echo "</pre>";
    }

    public function userLogged()
    //comprova si l'usuari esta logejat i en cas que no 
    //redirigeix a la pagina de home
    {
        
    }
}
