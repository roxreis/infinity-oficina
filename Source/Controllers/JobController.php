<?php

namespace Source\Controllers;

require __DIR__ . "/../../vendor/autoload.php";

use Source\Models\Job;
use Source\Models\Counter;
use Source\Models\User;
use League\Plates\Engine;

    class JobController 
    {

         /** @var Engine */ 
         private $view;

         public function __construct($router)
         {
             $this->view = Engine::create(__DIR__."/../Public/views", "php");
 
             $this->view->addData(["router" => $router]);

             $this->router = $router;
 
         }  


        public function createJob()
        {
            $jobs = new Job();
            $jobs->job_name = $_POST['job_name'];
            $jobs->job_description = $_POST['job_description'];
            $jobs->job_need = $_POST['job_need'];
            $jobs->job_money = $_POST['job_money'];
            $result = $jobs->save();

            if (isset($result) && $result == true){

                $this->router->redirect("adm");
            } else {
                $this->router->redirect("ops/{errcode}");
            }
        }

        public function deleteJob($id): void
        {
            if(!isset($_SESSION)) 
            { 
                session_start(); 
            }

            if ($_SESSION == NULL) {
    
                    $this->router->redirect("logar"); 
            
                    } else {

                        $jobs =(new Job())->find("id > :id", "id=$id")->fetch(true);
                        if ($jobs) {
                            foreach ($jobs as $job) {
                                $job->destroy();
                                $this->router->redirect("adm");
                            }
                    }
                }
           
        }

        public function editJob($id): void
        {
           
            if(!isset($_SESSION)) 
            { 
                session_start(); 
            }


            if ($_SESSION == NULL) {
    
                    $this->router->redirect("logar"); 
         
                } else {

                    $jobs = (new Job())->find("id > :id", "id=$id")->fetch(true);
                    if (isset($jobs)) {
                        foreach ($jobs as $job) {
                            echo $this->view->render("edit-job", [
                            "title" => "Editar Vaga | ". SITE,
                            "job" => $job]);
                            }
                    }
                
            } 
        
        }


        public function updateJob($id): void
        {
            $jobs =(new Job())->find("id > :id", "id=$id")->fetch(true);
            if ($jobs) {
                foreach ($jobs as $job) {
                    $job->job_name = $_POST['job_name'];
                    $job->job_description = $_POST['job_description'];
                    $job->job_need = $_POST['job_need'];
                    $job->job_money = $_POST['job_money'];
                    $result = $job->save();

                    if (isset($result) && $result == true){

                        $this->router->redirect("adm");
                    } else {
                        $this->router->redirect("ops/{errcode}");
                    }
                }
            }
        }




    }

        // public function update($id)
        // {
        //     $counter = (new Counter())->findById($id);
        //     $counter->satisfied_customers = $_POST['satisfied_customers'];
        //     $counter->painting = $_POST['painting'];
        //     $counter->body_shop = $_POST['body_shop'];
        //     $counter->aesthetics = $_POST['aesthetics'];
        //     $counter->save();
     
        //     header('Location:/');
        // }


        // public function listCounter()
        // {
        //     $counter = new Counter();
        //     $counters = $counter->find()->fetch(true);

        //     if(isset($counters)) {

        //         $loader = new \Twig\Loader\FilesystemLoader('Source/Views');
        //         $twig = new \Twig\Environment($loader);
        //         $template = $twig->load('adm.html');
        //         $template2 = $twig->load('home.html');
    
        //         $param = [];
        //         $param['counters'] = $counters;
        //         $param2 = [];
        //         $param2['counters'] = $counters;
    
        //         $template->render($param);
        //         $template2->render($param2);

        //     } else {

        //         $loader = new \Twig\Loader\FilesystemLoader('Source/App/Views');
        //         $twig = new \Twig\Environment($loader);
        //         $template = $twig->load('adm.html');
        //         $template2 = $twig->load('home.html');
        //     }

          

                  
        // }













    // public function listarContadores()
    // {
    //     $counters = Counter::all();
    //     return $this->view('home', ['counters' => $counters]);
    // }

    /**
     * Mostrar formulário para editar um contato
     */
    // public function editar($dados)
    // {
    //     $id      = (int) $dados['id'];
    //     $counter = Counter::find($id);

    //     return $this->view('form', ['contato' => $counter]);
    // }

    /**
     * Salvar o contato submetido pelo formulário
     */
  
    //     $counter                      = new Counter;
    //     $counter->satisfied_customers = $this->request->satisfied_customers;
    //     $counter->painting            = $this->request->painting;
    //     $counter->body_shop           = $this->request->body_shop;
    //     $counter->esthetics           = $this->request->esthetics;
    //     if ($counter->save()) {
    //         return $this->listarContadores();
    //     }
    // }

    /**
     * Atualizar o contato conforme dados submetidos
     */
    // public function atualizar($dados)
    // {
    //     $id                           = (int) $dados['id'];
    //     $counter                      = Counter::find($id);
    //     $counter->satisfied_customers = $this->request->satisfied_customers;
    //     $counter->painting            = $this->request->painting;
    //     $counter->body_shop           = $this->request->body_shop;
    //     $counter->esthetics           = $this->request->esthetics;
    //     $counter->save();

    //     return $this->listarContadores();
    // }

    /**
     * Apagar um contato conforme o id informado
      */
//     public function excluir($dados)
//     {
//         $id      = (int) $dados['id'];
//         $counter = Counter::destroy($id);
//         return $this->listarContadores();
//     }
// }

    // private function viewHome(){
    //     include_once "views/home.php";
    // }


    // private function cadastroContador(){
    //     $newCounter = new Counter();
    //     $satisfied_customers = $_POST['satisfied_customers'];
    //     $painting = $_POST['painting'];
    //     $body_shop = $_POST['body_shop'];
    //     $esthetics = $_POST['esthetics'];
      

    //     $result = $newCounter->criarContador($satisfied_customers, $painting, $body_shop, $esthetics);
        
        
    //         if($result){

    //             header('Location:/infinity-mvc/adm');
                                
    //         }else{
    //             echo "Dados inconsistentes para cadastro!";
    //         }
    // }

    // private function listarContadores(){
    //     $counter = new Counter();
    //     $listCounter = $counter->listarContadores();
    //     $_REQUEST['home'] = $listCounter;
    //     $this->viewHome();
    // }

