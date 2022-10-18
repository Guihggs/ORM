<?php

 require_once 'vendor/autoload.php';

 $entityManager = \Alura\Doctrine\Helper\EntityManagerCreator::createEntityManger();

 var_dump($entityManager);

