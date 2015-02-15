<?php
// update_product.php <id> <new-name>
require_once "bootstrap.php";

//[0] is file name
$id = $argv[1];//row id
$newName = $argv[2]; //new name

$product = $entityManager->find('Product', $id);

if ($product === null) {
    echo "Product $id does not exist.\n";
    exit(1);
}

$product->setName($newName);

$entityManager->flush();//save

?>