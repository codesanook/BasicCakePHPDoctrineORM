<?php
// dashboard.php
require_once "bootstrap.php";

use Doctrine\Common\Util\Debug;
use Doctrine\ORM\Query\ResultSetMapping;

$userName = $argv[1];


// Equivalent DQL query: "select u from User u where u.name=?1"
// User owns no associations.
try{

    $rsm = new ResultSetMapping();
    $rsm->addEntityResult('User', 'u');
    $rsm->addFieldResult('u', 'id', 'id');
    $rsm->addFieldResult('u', 'name', 'name');
    //public function addFieldResult($alias, $columnName, $classFieldName)


    $query = $entityManager->createNativeQuery('SELECT id, name FROM users WHERE name = :name',$rsm );
    $query->setParameter("name", $userName);

    $sql = $query->getSQL();
    Debug::dump($sql);

    $users = $query->getScalarResult();
    //$users = $query->getSingleScalarResult();
    Debug::dump($users[0]);

    
    $rsm = new ResultSetMapping();
    $rsm->addEntityResult('QueryResult', 'q');
    $rsm->addFieldResult('q', 'rowsCount', 'userCount');
    
    $query = $entityManager->createNativeQuery('SELECT COUNT(Id) AS rowsCount FROM users',$rsm);
    $count =   $query->getSingleResult();
    Debug::dump($count);
    
}
catch(Exception $ex)
{
    echo $ex;    
}

class UserCount
{
    protected $count;    
}

?>