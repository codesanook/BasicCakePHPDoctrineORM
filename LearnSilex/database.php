<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Platforms\SQLServer2008Platform;

$entityManager;
$conn;
try{
    // Create a simple "default" Doctrine ORM configuration for Annotations
    $isDevMode = false;

    //$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
    // or if you prefer yaml or XML
    $config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"),$isDevMode);
    //$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

    // database configuration parameters
    $connectionParams = array(
        'dbname' => 'BugTracker',
        'user' => 'dbsa',
        'password' => '12345*****',
        'host' => '.\SQLEXPRESS',
        'port' => 1433,
        'driver' => 'sqlsrv', 
        'platform' => new SQLServer2008Platform()
    );

    //create connection
    $conn = DriverManager::getConnection($connectionParams, $config);

    /*
    7.3. Microsoft SQL Server

    SQLServerPlatform for version 2000 and above.
    SQLServer2005Platform for version 2005 and above.
    SQLServer2008Platform for version 2008 and above.
    SQLServer2012Platform for version 2012 and above.

     */ 
    //platfrom
    //http://doctrine-dbal.readthedocs.org/en/latest/reference/platforms.html
    $platform = $conn->getDatabasePlatform();

    // obtaining the entity manager
    $entityManager = EntityManager::create($conn, $config);
    
}
catch(Exception $e)
{
    echo $e->getMessage(); 
}

?>
