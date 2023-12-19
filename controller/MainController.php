<?php
class MainController{

    private function genererPage($data){
        extract($data);
        ob_start();
        require_once "$view";
        $page_content = ob_get_clean();
        require_once($template);
    }

    public function accueil(){
        $data_page = [
            "page_title" => "Titre de la page d'accueil",
            "page_description" => "Description de la page d'accueil",
            "view" => "./views/accueil.view.php",
            "template" =>  "views/common/template.php"
        ];

        $this->genererPage($data_page);

        // $page_title = "Titre de la page d'accueil"; 
        // $page_description = "Description de la page d'accueil"; 
        // ob_start();
        // require_once("./views/accueil.view.php");
        // $page_content = ob_end_clean();
        // require_once "views/common/template.php";
    }
    public function page1(){

        $data_page = [
            "page_title" => "Titre de la page page 1",
            "page_description" => "Description de la page 1",
            "view" => "./views/page1.view.php",
            "template" =>  "views/common/template.php"
        ];
        $this->genererPage($data_page);


        // $page_title = "Titre de la page page 1"; 
        // $page_description = "Description de la page 1"; 
        // ob_start();
        // require_once("./views/page1.view.php");
        // $page_content = ob_end_clean();
        // require_once "views/common/template.php";
    }
    public function page2(){

        $data_page = [
            "page_title" => "Titre de la page page 2",
            "page_description" => "Description de la page 2",
            "view" => "./views/page2.view.php",
            "template" =>  "views/common/template.php"
        ];
        $this->genererPage($data_page);



        // $page_title = "Titre de la page page 2"; 
        // $page_description = "Description de la page 2"; 
        // ob_start();
        // require_once("./views/page2.view.php");
        // $page_content = ob_end_clean();
        // require_once "views/common/template.php";
    }
    public function page3(){

        $data_page = [
            "page_title" => "Titre de la page page 3",
            "page_description" => "Description de la page 3",
            "view" => "./views/page3.view.php",
            "template" =>  "views/common/template.php"
        ];
        $this->genererPage($data_page);

        
        // $page_title = "Titre de la page page 3"; 
        // $page_description = "Description de la page 3"; 
        // ob_start();
        // require_once("./views/page3.view.php");
        // $page_content = ob_get_clean(); 
        // require_once("views/common/template.php");

       
    }

    public function pageErreur($message){

        $data_page = [
            "page_title" => "Titre ERREUR",
            "page_description" => "Page Erreur",
            "message" => $message,
            "view" => "./views/erreur.view.php",
            "template" =>  "views/common/template.php"
        ];
        $this->genererPage($data_page);

        
        // $page_title = "Titre de la page page 3"; 
        // $page_description = "Description de la page 3"; 
        // ob_start();
        // require_once("./views/page3.view.php");
        // $page_content = ob_get_clean(); 
        // require_once("views/common/template.php");

       
    }
    
}