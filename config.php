<?php
//Esta é a configuração geral do sistema. Aqui eu inicio uma sessão e faço as configurações do banco de dados
session_start();
require 'environment.php';

$config = array();

//informações caso o sistema esteja em um pc local por motivos de desenvolvimento
if(ENVIRONMENT == 'development'){
    define('BASE_URL', 'http://localhost/mvc/');
    $config['dbname'] = 'developmentDatabase';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'developmentUser';
    $config['dbpass'] = 'developmentPass';
//informações caso ele esteja em uma hospedagem
} elseif(ENVIRONMENT == 'production'){
    define('BASE_URL', 'http://www.meusite.com');
    $config['dbname'] = 'HostDatabase';
    $config['host'] = 'HostUrl';
    $config['dbuser'] = 'HostUser';
    $config['dbpass'] = 'HostPass';
}

//variavel global com a conexão ao banco de dados que vai ser usado em todo o sistema
global $db;

//Aqui é feita a conexão ao banco de dados
try{
    $db = new PDO('mysql:dbname='.$config['dbname'].';host='.$config['host'], $config['dbuser'], $config['dbpass']);
}catch(PDOException $e){
    echo "Erro! ".$e->getMessage();
    exit;
}