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
        $users=User::findFirst($id);
        $this->view->setVar('user', $users);
    }

}

