<?php

namespace Source\Controllers;

use League\Plates\Engine;
use Source\Models\Counter;
use Source\Models\User;
use Source\Models\Job;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    class WebController 
    {

        /** @var Engine*/
        private $view;

        public function __construct($router)
        {
            $this->view = Engine::create(__DIR__."/../Public/views", "php");
            $this->view->addData(["router" => $router]);
            $this->router = $router;

        }

        public function home(): void
        {
            $counters = (new Counter())->findById(1);
            echo $this->view->render("home", [
                "title" => "Home | ". SITE,
                "counters" => $counters
            ]);
        }


        public function adm()
        {  
            // if(!isset($_SESSION)) { 
            //     session_start(); 
            // }

            // if ($_SESSION == NULL) {
            //         $this->router->redirect("logar"); 
            //     } else {
                    $counters = (new Counter())->findById(1);
                    $users = (new User())->find()->fetch(true);
                    $jobs = (new Job())->find()->fetch(true);
    
                    echo $this->view->render("adm", [
                        "title" => "Painel Adm | ". SITE,
                        "counters" => $counters,
                        "users" => $users,
                        "jobs" => $jobs,
                    ]);
                // } 
        }
        

        public function contact(): void
        {
            echo $this->view->render("contato", [
                "title" => "Contato | ". SITE,]);
        }

        public function logar(): void
        {
            echo $this->view->render("login-adm", [
                "title" => "Login | ". SITE,]);
        }     

        public function aboutUs()
        {
            echo $this->view->render("sobre", [
                "title" => "Quem Somos | ". SITE,]);
        }

        

        public function workWithUs(): void
        {
            $model = New JOb;
            $jobs = $model->find()->order("created_at DESC")->fetch(true);

            echo $this->view->render("trabalheConosco", [
                "title" => "Trabalhe Conosco | ". SITE,
                "jobs" => $jobs

            ]);
        }

        public function error(array $data): void
        {
            
            echo $this->view->render("error", [
                "title" => "Erro {$data["errcode"]} | ". SITE,
                "error" => $data["errcode"]
                ]);
        }

        public function email(): void
        {
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $mesage = $_POST['msg'];

                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->Host = 'smtp.infinityoficina.com';
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->Username = 'infinity@infinityoficina.com.br';
                $mail->Password = '123@mudar';
                $mail->setFrom($email, $name);
                $mail->addAddress('infinity@infinityoficina.com.br', 'Contato Infinity');
                $mail->Body = $mesage;
                $enviado = $mail->Send();

                $mail->ClearAllRecipients();
                $mail->ClearAttachments();

                if ($enviado) {
                    $sucess =  "E-mail enviado com sucesso!";
                    } else {
                        $erro = "Não foi possível enviar o e-mail.
                    
                    ";
                    echo "Informações do erro:
                    " . $mail->ErrorInfo;
                    }

                    echo $this->view->render("contato", [
                        "sucess" => $sucess,
                        "erro" => $erro
                        ]);
        }

              
        
    }