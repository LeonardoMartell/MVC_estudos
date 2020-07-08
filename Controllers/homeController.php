<?php
//controller responsavel pela primeira pagina do sistema
class HomeController extends Controller
{
    public function index()
    {
        //Aqui eu puxo as respectivas classes através do autoload
        $anuncios = new Anuncios();
        $usuarios = new Usuarios();

        //variável responsavel por passar os dados dinamicos que vão ser usados na pagina
        $dados = array(
            'qt' => $anuncios->getQuantidade(),
            'nome' => $usuarios->getName()
        );
        //Aqui eu dou o comando que puxa o view responsavel pelo controller e passo as informações adicionais que vão ser usados na pagina
        $this->loadTemplate('home', $dados);
    }
}