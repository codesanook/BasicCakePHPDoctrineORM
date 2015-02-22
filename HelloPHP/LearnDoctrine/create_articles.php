<?php
// create_product.php
require_once "bootstrap.php";

$title = $argv[1];
$content = $argv[2];

$article = new Article();
$article->setTitle($title);
$article->setContent($content);

$entityManager->persist($article);
$entityManager->flush();

echo "Created Article with ID " . $article->getId() . "\n";
?>