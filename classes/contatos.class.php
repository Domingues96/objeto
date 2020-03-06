<?php

class contactForm{

    // ATRIBUTOS - CARACTERÍSTICAS
    private $formerror = '';                                       //msg de erro  
    private $action;                                              // URL do action do formulário
    private $formname = '';                                      // Valor do campo de nome do usuário
    private $formemail = '';                                    // Valor do email do usuário
    private $formsubject = '';                                 //  Assunto do formulário
    private $formmsg = '';                                    // Mensagem do formulário
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

        // método get para formerror
        public function getFormError(){
            return $this->formerror;
        }
        // método set para formerror
        public function setFormError($formerror){
            $formerror = trim($formerror);               // ┌» ISSO É UMA CONSTANTE
            $formerror = filter_var($formerror, FILTER_SANITIZE_STRING);    
            $this->formerror = $formerror;        
        }
        // método get para formname
        public function getFormName(){
            return $this->formname;
        }
        // método set para formname
        public function setFormName($formname = ''){
            $formname = trim($formname);               
            $formname = filter_var($formname, FILTER_SANITIZE_STRING);    
            $this->formname = $formname;        
        }
         // método get para formemail
         public function getFormEmail(){
            return $this->formemail;
        }
        // método set para formemail
        public function setFormEmail($formemail = ''){
            $formemail = trim($formemail);               
            $formemail = filter_var($formemail, FILTER_SANITIZE_EMAIL);    
            $this->formemail = $formemail;        
        }
         // método get para formsubject
         public function getFormSubject(){
            return $this->formsubject;
        }
        // método set para formsubject
        public function setFormSubject($formsubject = ''){
            $formsubject = trim($formsubject);               
            $formsubject = filter_var($formsubject, FILTER_SANITIZE_STRING);    
            $this->formsubject = $formsubject;        
        }
         // método get para formmsg
         public function getFormMsg(){
            return $this->formmsg;
        }
        // método set para formmsg
        public function setFormMsg($formmsg = ''){
            $formmsg = trim($formmsg);               
            $formmsg = filter_var($formmsg, FILTER_SANITIZE_STRING);    
            $this->formmsg = $formmsg;        
        }
        // método get para template
         public function getTemplate(){
            return $this->template;
        }
        //metódo set para template
        public function setTemplate($template = ''){
            $template = trim($template);
            $template = filter_var($template,FILTER_SANITIZE_URL);
            if ( $template != '') {//Se nã for vazio
            $this->template = $template; //Atribui
            } //Se vazio, mantem o valor default

        }

}

$action = $_SERVER['PHP_SELF'];       // Endereço desta mesma página (contatos.php)

    // CRIAR OBJETO -            ┌» VALORES PASSADOS PARA O CONSTRUTOR 
    $contato = new contactForm($action); 

    // altera o valor de formerror
    $contato->setFormError('É........ Não foi dessa vez');
    echo '/n';
    // lê o valor de formerror
    echo $contato->getFormError();

    // altera o valor de formname
    $contato->setFormName('É........ Não foi dessa vez');
    // lê o valor de formname
    echo $contato->getFormName();
    echo '/n';

    // altera o valor de formemail
    $contato->setFormEmail('É........ Não foi dessa vez');
    // lê o valor de formemail
    echo $contato->getFormEmail();
    echo '/n';

    // altera o valor de formsubject
    $contato->setFormSubject('É........ Não foi dessa vez');
    // lê o valor de formsubject
    echo $contato->getFormSubject();
    echo '/n';

    // altera o valor de formmsg
    $contato->setFormMsg('É........ Não foi dessa vez');    
    // lê o valor de formmsg
    echo $contato->getFormMsg();
    echo '/n';

    // altera o valor de formmsg
    $contato->setTemplate('É........ Não foi dessa vez');
    // lê o valor de formmsg
    echo $contato->getTemplate();
    echo '/n';

?>