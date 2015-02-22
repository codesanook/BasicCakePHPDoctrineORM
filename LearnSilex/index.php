<?php
require_once 'vendor/autoload.php';
require_once 'database.php';


$smarty = new Smarty();

$smarty->setTemplateDir('views');
$smarty->setCompileDir('templates_c');
$smarty->setConfigDir('config');
$smarty->setCacheDir('cache');

////** un-comment the following line to show the debug console
$smarty->debugging = true;


$app = new Silex\Application();

$app->get('/', function (){
    return 'home';
});


$app->get('/products', function () use($app,$smarty, $entityManager) {

    try{

    $productRepository = $entityManager->getRepository('Product'); 
    $products = $productRepository->findAll(); 
    $arry =  array();
    foreach ($products as $product) { 
        $arry[] = $product->getName(); 
    }

    
    $smarty->assign('products',$arry);
    
    return $smarty->fetch('product/list.tpl');
    
     return $output;
    }
    catch(Exception $ex)
   {
        return $ex;    
   }
});



$app->get('/product/{productId}', function ($productId) use($app,$smarty, $entityManager) {

    try{

            $product = $entityManager->find('Product', $productId);

    $arry =  array('id'=> $product->getId(), 'name' => $product->getName());

    
    $smarty->assign('product',$arry);
    
    return $smarty->fetch('product/detail.tpl');
    
     return $output;
    }
    catch(Exception $ex)
   {
        return $ex;    
   }
});

$app->get('/hello/{user1}/{user2}', function ($user1,$user2) use ($app,$smarty) {

    
    $smarty->assign('user1',$user1);
    $smarty->assign('user2',$user2);
    
    return $smarty->fetch('home/index.tpl');
});

$app->run();


?>