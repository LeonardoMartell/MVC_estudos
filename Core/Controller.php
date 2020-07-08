<?php
//Classe responsavel por fazer a conexão dos controllers aos seus devidos views
class Controller
{
    //Aqui eu puxo diretamente o view referente ao controller que o instancia, e mandando informações em variáveis através do extract.
    public function loadView($viewName, $viewData = array())
    {
        extract($viewData);
        require 'Views/'.$viewName.'.php';
    }

    //Esse método aqui puxa o template que vai estar presente em quase todas as paginas do sistema
    public function loadTemplate($viewName, $viewData = array())
    {
        require 'Views/template.php';
    }
}