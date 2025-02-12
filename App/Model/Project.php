<?php

use App\Model\Orm;

class Project extends Orm  {

    public function __construct()
    {
        parent::__construct('projects');
        if (!isset($_SESSION['id_project'])) {
            $_SESSION['id_project']=11;
            //Al config.php l'ultim id es el 9
        }
        $this->createTable();
        
    }
    public function createTable()
    {
        //crear la sentencia sql per crear la taula projects
        //utlitzar "CREATE TABLE IF NOT EXISTS"
        //executar el metode queryDataBase per executar la sentencia sql

    }


    public function getProjectOwner($project) {
        //retorna el nom i cognom del propietari del projecte

    }

    public function removeProjectByUser($id) {
        //elimina el projecte amb id_usuari=$id

    }





}


?>