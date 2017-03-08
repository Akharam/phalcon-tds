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
        $lv->setFields(["name","price"]);
        $this->jquery->compile($this->view);
    }
}