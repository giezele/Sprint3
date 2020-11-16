<?php
require_once "bootstrap.php";

$newEmployeeName = $argv[1];

$employee = new Models\Employee();
$employee->setName($newEmployeeName);
$entityManager->persist($employee);
$entityManager->flush();

echo "Created Product with ID " . $employee->getId() . "\n";