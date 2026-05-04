<?php 

require __DIR__ . '/inc/htmlspecialchars.php';
require __DIR__ . '/inc/autoload.php';
require __DIR__ . '/inc/dbconnection.php';

$notFoundController = new controllers\NotFoundController();

$urlController = ucfirst($_GET['controller'] ?? 'user');

$controllerName = $urlController . 'Controller';
$repositoryName = $urlController . 'Repository';

$action = $_GET['action'] ?? 'list';

if($action == 'update' && (int) $_GET['id'] <= 0) 
    $action = 'list';

if (!file_exists("controllers/$controllerName.php")) {
    $notFoundController->error();
}

$controllerClass = "Controllers\\$controllerName";
$repositoryClass = "Models\\$repositoryName";

$repository = new $repositoryClass($pdo);
$controller = new $controllerClass($repository);

if (!method_exists($controller, $action)) {
    $notFoundController->error();
}

$controller->$action();