<?php
require_once "bootstrap.php";

$newProjectName = $argv[1];

$project = new Models\Project();
$project->setProjectName($newProjectName);
$entityManager->persist($project);
$entityManager->flush();

echo "Created Product with ID " . $project->getProjectId() . "\n";

// $this->createQueryBuilder('projects')
//             ->select('projects')
//             ->addSelect("group_concat(employees.name SEPARATOR '; ') AS 'Employees on project', projects.project_id, projects.project_name 
//             FROM projects 
//             LEFT JOIN employees ON employees.project_id = projects.project_id
//             GROUP BY project_id, project_name");

//         $result = $queryBuilder->getQuery()->getResult();