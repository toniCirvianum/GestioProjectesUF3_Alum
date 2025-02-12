<?php

class projectController extends Controller
{

    public function index()
    {
        //crida al metode showPorjects per mostrar els projectes
    }

    public function showProjects()
    {
        //carrega la vista amb els projectes de cada usuari i en cas de ser admin de tots els usuaris
    }

    public function show($id)
    {
        //mostra la info del projecte amb id=$id 
       
    }

    public function edit($id)
    {
        //mostra el formulari per editar el projecte amb id=$id
       
    }

    public function store()
    //desem el projecte actualitzat
    {
        //recuperem el POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['nom'] ?? null;
            $description = $_POST['descripcio'] ?? null;
            $data_inici = $_POST['data_inici'] ?? null;
            $data_fi = $_POST['data_fi'] ?? null;
            $estat = $_POST['estat'] ?? null;
            $id = $_POST['id'] ?? null;
            $id_usuari = $_POST['id_usuari'] ?? null;
        }
        //actualitzem el projecte
        
        //Amb el model el desem a la variable de sessió

        //mostrem el missatge de confirmació
       
        //tornem a mostrar els projectes
        
    }


    public function delete()
    {
        
        //recuperem el post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'] ?? null;
        }
        //eliminem el projecte amb id=$id
        
        //mostrem el missatge de confirmació i mostrem projectes
        
    }

    public function new()
    {
        //mostra la vista per crear un nou projecte

    }

    public function create()
    {
        //logica per crear un nou projecte
        //recuperem el post

        //creem el nou projecte

        
        //mostrem el missatge de confirmació i mostrem els projectes
      

    }
}
