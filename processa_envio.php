<?php
    
    //print_r($_POST)

    class Mensagem {
        private $para = null;
        private $assunto = null;
        private $mensagem = null;


        public function __get($atr){
            return $this->$atr;
        }

        public function __set($atr, $valor){
            $this->$atr = $valor;
        }

        public function mensagemValida(){
            if($_POST['email_destino'] == null || $_POST['email_assunto'] == null || $_POST['email_mensagem'] == null){
                return false;
            }
            return true;
        }
    }


    $m = new Mensagem();

    $m->__set('para',$_POST['email_destino']);
    $m->__set('assunto', $_POST['email_assunto']);
    $m->__set('mensagem', $_POST['email_mensagem']);


    if($m->mensagemValida()){
        echo 'mensagem é valida';
    }
    else {
        echo 'mensagem invalida';
    }

?>