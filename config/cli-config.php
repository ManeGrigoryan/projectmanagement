<?php
$isDevMode = true;
$config = \Doctrine\ORM\Tools\Setup::createYAMLMetadataConfiguration(array(__DIR__.'/../gago' ), $isDevMode);
// Any way to access the EntityManager from  your application
$connectionOptions = array(
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'dbname'   => 'test_db',
    'user'     => 'root',
    'password' => '',
);
$em = \Doctrine\ORM\EntityManager::create($connectionOptions, $config);

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));
return $helperSet;

?>