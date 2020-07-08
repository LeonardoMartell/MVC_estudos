<?php
//Classe usada como modelo apenas para fins de estudos
class Usuarios extends Model
{
    //Aqui eu só instancio uma informação que vai ser passada pro meu controller
    public function getName()
    {
        $nome = 'Leon';

        return $nome;
    }
}