<?php
require_once "bootstrap.php";

$id = $argv[1];

$article = $entityManager->find('Article', $id);

if ($article == null) {
    echo "No article found.\n";
    exit(1);
}

$entityManager->remove($article);
$entityManager->flush();

echo "remove";