<?php
//Classe responsavel unica e exclusivamente pra puxar o view de erro, caso o usuario passe alguma url que não existe
class NotFoundController extends Controller
{
    public function index()
    {
        $dados = array();
        $this->loadView('notFound', $dados);
    }
}