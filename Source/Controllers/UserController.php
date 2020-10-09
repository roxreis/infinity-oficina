<?php

namespace Source\Controllers;

require __DIR__ . "/../../vendor/autoload.php";

use Source\Models\User;
use League\Plates\Engine;


    class UserController 
    {

         /** @var Engine */ 
         private $view;

         public function __construct($router)
         {
             $this->view = Engine::create(__DIR__."/../Public/views", "php");
 
             $this->view->addData(["router" => $router]);

            $this->router = $router;

 
         }    
        

        public function createUser()
        {
            $user = new User();
            $user->user_name =  $_POST['name'];
            $name = $_POST['name'];
            $user->pass =  md5($_POST['password']);
            $sameName = $user->find("user_name = :name", "name=$name")->fetch();
            
            if ($sameName == false) {
                $result = $user->save();
                if (isset($result) && $result == true){
                    $this->router->redirect("adm");
                }                
            } else {
                echo $this->view->render("adm", [
                    "title" => "Painel Adm | ". SITE,
                    "erroUsuário" => 'Nome de usuário ja cadastrado!'
                    ]);
                }
            
        }

        public function login(){
            
            // Recupera o login
            $name = isset($_POST["name"]) ? addslashes(trim($_POST["name"])) : FALSE;
             // Recupera a senha, a criptografando em MD5
            $pass = isset($_POST["pass"]) ? md5(trim($_POST["pass"])) : FALSE;

            if ($name != null && $pass != null) {

                $user = new User();
                $users = $user->find("user_name = :name AND pass = :pass", "name=$name&pass=$pass")->fetch(true);
               
                if (isset($users)) {
                    foreach ($users as $user) {
                        if ($user->user_name == $name && $user->pass == $pass) {
                            if (!isset($_SESSION)) { 
                                session_start();
                                $_SESSION['name'] = $name;
                                $_SESSION['pass'] = $pass;
                                $this->router->redirect("adm"); 
                            } else {
                                $this->router->redirect("home"); 
                            } 
                        } else {
                            echo $this->view->render("login-adm", [
                                "title" => "Logar | ". SITE,
                                "loginVazio" => 'Usuário ou senha incorretos!']);
                            }
                    } 
               }  
            } else {
                echo $this->view->render("login-adm", [
                    "title" => "Logar | ". SITE,
                    "loginVazio" => 'Favor preencher usuário e senha!']);
                }
        }

        public function logout()
        {
            session_start();
            unset($_SESSION["name"]);
            unset($_SESSION["pass"]);
            $this->router->redirect("/");
        }
        
        // public function index(): void
        // {
        //     $users = (new User())->find()->fetch(true);

        //     echo $this->view->render("adm", [
        //         "title" => "Adm | ". SITE,
        //         "users" => $users

        //     ]);
        // }
    // private function viewCadastroUsuarioAdm(){
    //     include_once "views/adm.php";
    // } 

 

    // private function cadastroUsuarioAdm(){
    //     $newUser = new UserAdm();
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
              
    //     $segurePass = password_hash($_POST['password'], PASSWORD_BCRYPT);


    //     $result = $newUser->criarUsuario($name, $email, $segurePass);
        
        
    //         if($result){

    //             include ("views/adm.php");
                                
    //         }else{
    //             echo "Dados inconsistentes para cadastro!";
    //         }

    }

  
        
    
