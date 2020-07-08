<?php
//classe auxiliar que tem a função de fazer a conexão com o banco de dados
class Model
{
    
    protected $db;
    public function __construct()
    {
        //aqui eu puxo a variavel global que ja foi setada no arquivo de configuração e transfiro a informação pra variavel da instanciada nessa classe
        global $db;
        $this->db = $db;
    }
}