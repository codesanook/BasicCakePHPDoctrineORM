<?php
// dashboard.php
require_once "bootstrap.php";

use Doctrine\Common\Util\Debug;
use Doctrine\ORM\Query\ResultSetMapping;

$userName = $argv[1];


// Equivalent DQL query: "select u from User u where u.name=?1"
// User owns no associations.
try{

  
    $sql = "SELECT * FROM users WHERE name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1,$userName);
    $stmt->execute(); 
    
    while ($row = $stmt->fetch()) {
        echo $row['name'];
    } 
    
}
catch(Exception $ex)
{
    echo $ex;    
}


?>