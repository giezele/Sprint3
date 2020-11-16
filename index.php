<?php
require_once 'bootstrap.php';
$request = $_SERVER['REQUEST_URI'];

// print($request);
// print('<br>');
// echo ROOT_PATH;

$rout_prefix = ROOT_PATH;
switch ($request) {
    case $rout_prefix . '/' :
        require __DIR__ . '/src/views/landingPage.php';
        break;
    case $rout_prefix . '' :
        require __DIR__ . '/src/views/landingPage.php';
        break;
    case $rout_prefix . '/landingPage' :
        require __DIR__ . '/src/views/landingPage.php';
        break;
    case preg_filter('/delete=[0-9]+/', '$0', $request): 
        require __DIR__ . '/src/views/landingPage.php'; 
        break;
    case preg_filter('/updatable=[0-9]+/', '$0', $request): 
        require __DIR__ . '/src/views/landingPage.php';
        break;
    case preg_filter('/name=[a-zA-Z0-9._-]+/', '$0', $request):
        require __DIR__ . '/src/views/landingPage.php';
        break;
    case $rout_prefix . '/projectsPage' :
        require __DIR__ . '/src/views/projectsPage.php';
        break;    
    case preg_filter('/deleteProj=[0-9]+/', '$0', $request): 
        require __DIR__ . '/src/views/projectsPage.php'; 
        break;
    case preg_filter('/updatableProj=[0-9]+/', '$0', $request): 
        require __DIR__ . '/src/views/projectsPage.php';
        break;
    case preg_filter('/nameProj=[a-zA-Z0-9._-]+/', '$0', $request):
        require __DIR__ . '/src/views/projectsPage.php';
        break;
    
    default:
        http_response_code(404);
        require __DIR__ . '/src/views/404.php';
        break;
}
