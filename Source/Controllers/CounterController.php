<?php

namespace Source\Controllers;

require __DIR__ . "/../../vendor/autoload.php";

use Source\Models\Counter;
use League\Plates\Engine;

    class CounterController 
    {

         /** @var Engine */ 
        private $view;

        public function __construct($router)
        {
            $this->view = Engine::create(__DIR__."/../Public/views", "php");

            $this->view->addData(["router" => $router]);

            $this->router = $router;

        }  


        public function createCounter()
        {
            
            // $counters = (new Counter())->findById(1);
            $counters = new Counter();
            $counters->satisfied_customers = $_POST['satisfied_customers'];
            $counters->painting = $_POST['painting'];
            $counters->body_shop = $_POST['body_shop'];
            $counters->aesthetics = $_POST['aesthetics'];

            $result = $counters->save();
        
            if (isset($result) && $result == true){

                $this->router->redirect("adm");
            } else {
                $this->router->redirect("ops/{errcode}");

            }

                

        }


}