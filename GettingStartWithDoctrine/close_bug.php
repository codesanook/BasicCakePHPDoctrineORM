<?php
// close_bug.php
require_once "bootstrap.php";

$theBugId = $argv[1];

$bug = $entityManager->find("Bug", (int)$theBugId);
$bug->close();

$entityManager->flush();//save

$bug = $entityManager->find("Bug", (int)$theBugId);
echo sprintf('bugId %d status %s', $bug->getId() ,$bug->getStatus()); 
?>