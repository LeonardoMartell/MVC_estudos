<?php
//Aqui eu puxo as configurações basicas de todo o sistema
require 'config.php';

//Nesta versão eu estou usando a PSR-0 que ja foi depreciada. Neste caso estou usando por motivos de estudo apenas
spl_autoload_register(function($class){

    //Autoload caso a classe esteja na pasta Controllers
    if(file_exists('Controllers/'.$class.'.php')){
        require 'Controllers/'.$class.'.php';
    //Autoload caso a classe esteja na pasta Models        
    } elseif(file_exists('Models/'.$class.'.php')){
        require 'Models/'.$class.'.php';
    //Autoload caso a classe esteja na pasta Core
    } elseif(file_exists('Core/'.$class.'.php')){
        require 'Core/'.$class.'.php';
    }
});

//Aqui eu instancio a classe core e uso o método start que da inicio a todo o sistema
$core = new Core();

$core->start();