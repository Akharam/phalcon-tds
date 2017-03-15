<?php

/**
 * Created by PhpStorm.
 * User: Anthony
 * Date: 08/03/2017
 * Time: 14:29
 * @property Ajax\JsUtils $jquery
 */
class ProductsController extends ControllerBase
{
    public function indexAction(){
        $semantic = $this->jquery->semantic();
        $products=Products::find();
        $lv=$semantic->dataTable("lv","Products",$products);
        $lv->setFields(["name","productType"]);
        $lv->setIdentifierFunction(function($i,$inst){return $inst->getId();});
        $this->jquery->getOnClick("#lv tr", "Products/detail", "#productDetail", ["attr"=>"data-ajax"]);
        $this->jquery->compile($this->view);
    }

    public function detailAction($id){
        $semantic = $this->jquery->semantic();
        $client=Products::findFirst();
        $de=$semantic->dataElement("de",$client);
        $de->setFields(["name","price","active"]);
        $de->setCaptions(["Name","Price","Stock ?"]);
        $this->jquery->compile($this->view);
    }
}