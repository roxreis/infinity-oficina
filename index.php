<?php

require __DIR__ . "/vendor/autoload.php";


$router = new \CoffeeCode\Router\Router(ROOT);



/**
 * APP
 */
$router->namespace("source\Controllers");

/**
 * WebController
 */
$router->group(null);
$router->get("/", "WebController:home");
$router->get("/quem-somos", "WebController:aboutUS");
$router->get("/trabalhe-conosco", "WebController:workWithUs");
$router->get("/contato", "WebController:contact");
$router->get("/adm", "WebController:adm");
$router->get("/logar", "WebController:logar");
$router->post("/email/enviar", "WebController:email");


/**
 * CounterController
 */
$router->group(null);
$router->post("/contador/criar", "CounterController:createCounter");
// $router->get("/listCounter", "CounterController:listCounter");

/**
 * UserController
 */
$router->group(null);
$router->post("/usuario/criar", "UserController:createUser");
$router->post("/login", "UserController:login");
// $router->get("/login", "UserController:login");
$router->get("/logout", "UserController:logout");
// $router->get("/usuario/listar", "UserController:index", "index.user");

/**
 * JobController
 */
$router->group(null);
$router->post("/vagas/criar", "JobController:createJob");
$router->post("/vagas/atualizar/{id}", "JobController:updateJob");
$router->get("/vagas/editar/{id}", "JobController:editJob");
$router->get("/vagas/excluir/{id}", "JobController:deleteJob");



/**
 * ERROR
 */
$router->group("ops");
$router->get("/{errcode}", "WebController:error");
/**
 * PROCESS
 */
$router->dispatch();

if ($router->error()) {
    $router->redirect("/ops/{$router->error()}");
}