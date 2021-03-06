<?php

class UsersController extends \Phalcon\Mvc\Controller
{

    public function indexAction($page=1, $sField="firstname",$sens="asc", $filter=NULL)
    {
        $users=User::find(array("order"=>$sField));
        $this->view->setVar('users', $users);
        
    }


    public function formAction($id=NULL)
    {
        $roles=Role::find();
        $this->view->setVar("roles",$roles);
        if(isset($id)) {
            $users = User::findFirst($id);
        }
        else
            $users = new User();
        $this->view->setVar('user', $users);

        if(isset($_POST["val"]) && $users.getID()== NULL)
        {
            if(!empty($_POST["nom"])) {
                $nom = $_POST["nom"];
                $users->setLastname($nom);
            }

            if(!empty($_POST["prenom"])){
                $prenom = $_POST["prenom"];
                $users->setFirstname($prenom);}

            $login = $_POST["login"];
            $mdp = $_POST["password"];
            $mail = $_POST["mail"];
            $role = $_POST["role"];



            $users->setLogin($login);
            $users->setPassword($mdp);
            $users->setEmail($mail);
            $users->setIdrole($role);
            $users->save();
            $users = new User();
            $this->view->setVar('user', $users);
        }
        else if(isset($_POST["val"]) && $users.getID()!= NULL)
        {

        }
    }

}

