<?php
class IndexController extends Zend_Controller_Action
{
    function indexAction()
    {
        $a = new Templates_Gpecs_Lib_Dir_Test();
        $this->view->title = "app controller";
    }

    function ajouterAction()
    {
        $this->view->title = "Ajouter un nouvel album";
    }

    function modifierAction()
    {
        $this->view->title = "Modifier un album";
    }

    function supprimerAction()
    {
        $this->view->title = "Supprimer un album";
    }
}
