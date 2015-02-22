<?php
// list_products.php
require_once "bootstrap.php";

try{

    $articleRepository = $entityManager->getRepository('Article');
    $articles = $articleRepository->findAll();

    foreach ($articles as $article) {
        echo sprintf("[%s] %s \n", $article->getTitle() , $article->getContent());
    }

}
catch(Exception $ex)
{
    echo $ex;    
}

?>