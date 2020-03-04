<?php

class contactForm{

    // ATRIBUTOS - CARACTERÍSTICAS
    private $formerror = '';                                       //msg de erro  
    private $action;                                              // URL do action do formulário
    private $name = '';                                          // Valor do campo de nome do usuário
    private $email = '';                                        // Valor do email do usuário
    private $assunto = '';                                     //  Assunto do formulário
    private $msg = '';                                        // Mensagem do formulário
    private $template = 'templates/contatos.php';            // Arquivo com template HTML

    // MÉTODOS - AÇÕES QUE MEU FORMULÁRIO EXECUTA 
    // método construtor - executa ao criar o objeto 
    public function __construct($action){

        $action = trim(filter_var($action,FILTER_SANITIZE_STRING));
        if ($action == ''){
            die('Erro: O parâmetro de construtor tem que ser um URL');
        }
        $this->action = $action;
    }


}

$action = $_SERVER['PHP_SELF'];       // Endereço desta mesma página

    // CRIAR OBJETO - VALORES PASSADOS PARA O CONSTRUTOR 
    $contato = new contactForm($action); 







?>