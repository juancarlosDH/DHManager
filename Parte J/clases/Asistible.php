<?php
namespace MiApp;
trait Asistible{
    private $dia;
    private $clase;

    public function tomarAsistencia(){
        $this->dia = '2019-04-26';
        $this->clase = 'PHP + POO 6';
        //mandara un mails
    }
}



 ?>
