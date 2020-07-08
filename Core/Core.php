<?php
class Core
{
    public function start()
    {
        //Aqui eu pego a url digitada na barra de endereço. '/' vai para a raiz do sistema.

        $url = '/';
        if(isset($_GET['url'])){
            //Caso algo a mais seja digitado na barra de endereço, aqui eu concateno à url
            $url.= $_GET['url'];
        }

        //array vazio caso não haja nenhum
        $params = array();
        
        //Caso alguma url tenha sido digitada, aqui eu pego a informação e quebro em partes que levam ao endereço certo no meu sistema
        if(!empty($url) && $url != '/'){
            $url = explode('/', $url);
            array_shift($url);

            //O primeiro item da minha url tem que levar à uma pagina referente a uma controller. Caso nada tenha sido digitado, o padrão é controller home
            $result = $url[0].'Controller';

            //parte responsavel por direcionar um usuario que use um endereço inxistente a uma pagina de erro 404
            if(file_exists('Controllers/'.$result.'.php')){
                $currentController = $result;
            } else {
                $currentController = 'notFoundController';
            }
            array_shift($url);

            //Caso a url tenha mais um item adicionado, o nosso sistema interpreta como um metodo do controller em questão
            if(!empty($url[0]) && $url[0] != '/'){
                //Verificação pra saber se o método realmente existe no sistema, afim de evitar possiveis erros
                if(method_exists($currentController, $url[0])){
                    //Aqui eu pego o resultado e transformo no método. Caso nenhum valor tenha sido passado, o padrão é o método index
                    $currentAction = $url[0];
                    array_shift($url);
                } else {
                    //Caso o metodo não exista, o usuario vai ser redirecionado ao erro 404
                    $currentController = 'notFoundController';
                    $currentAction = 'index';
                }
            } else{
                $currentAction = 'index';
            }
            //caso haja mais algum item na url, este será interpretado como parametro
            if(count($url) > 0){
                $params = $url;
            }
        } else{
            //Valores padrões caso nenhum valor tenha sido passado
            $currentController = 'homeController';
            $currentAction = 'index';
        }

        //variavel $c responsavel por instanciar a classe que foi passada pela url
        $c = new $currentController();
        //função responsavel por procurar o metodo e possiveis parametros na determinada classe
        call_user_func_array(array($c, $currentAction), $params);
    }
}