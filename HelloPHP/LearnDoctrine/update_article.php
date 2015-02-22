<?php
require_once "bootstrap.php";

$id = $argv[1];
$newTitle = $argv[2];

$article = $entityManager->find('Article', $id);

if ($article == null) {
    echo "No article found.\n";
    exit(1);
}

$article->setTitle($newTitle);

$entityManager->flush();

echo sprintf("-%s\n", $article->getTitle());