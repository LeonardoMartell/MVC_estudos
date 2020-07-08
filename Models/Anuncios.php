<?php
//Classe usada como modelo apenas para fins de estudo
Class Anuncios extends Model
{
    public function getQuantidade()
    {
        //Aqui eu puxo a quantidade de anuncios que existe no meu banco de dados 
        $sql = "SELECT COUNT(*) as c FROM anuncios";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            $qt = $sql['c'];
        } else{
            $qt = 0;
        }

        return $qt;
    }
}