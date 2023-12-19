<?php
require "controller/MainController.php";
$mc = new MainController;
if (empty($_GET['page'])) {
    $page = "accueil";
   
} else {
    $url =  explode("/",filter_var($_GET['page'], FILTER_SANITIZE_URL));
    // $url = $_GET['page'];
    $page = $url['0'];
    // var_dump($url);
    var_dump($page);
}

try {
    switch ($page) {
        case 'accueil':
            $mc->accueil();
            break;
        case 'page1':
           $mc->page1();
            break;
        case 'page2':
            $mc->page2();
            break;
        case 'page3':
          $mc->page3();
            break;
        
        default: throw new Exception("<mark><strong>La page n'existe pas</strong></mark>");
        
            
            break;
    }
} catch (Exception $e) {
   
            $mc->pageErreur($e->getMessage()); 
}



// $page_title = "Titre de la page d'accueil"; 
// $page_description = "Description de la page d'accueil"; 
// $page_content = "<h1> PHP MVC </h1>"; 

require_once "views/common/template.php";
