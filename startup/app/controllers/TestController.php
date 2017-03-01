<?php
class TestController extends ControllerBase{

    protected $semantic;

    public function initialize(){
        $this->semantic=$this->jquery->semantic();
    }
    public function hideShowAction(){
        $ck= $this->semantic->htmlCheckbox("ckShowHide","Masquer/afficher");
        $message=$this->semantic->htmlMessage("zone","cdfhkdhfdh");
        $ck->setChecked(true);
        $ck->on("change", $message->jsToggle("$(this).prop('checked')"));

        $this->jquery->compile($this->view);
    }

    public function changeCssAction (){
        $bt1=$this->semantic->htmlButton("btPage1","Page 1");
        $bt2=$this->semantic->htmlButton("btPage2","Page 2");
        $bt1->getOnClick("test/page1", "#pageContent");
        $bt2->getOnClick("test/page2", "#pageContent");

        $message=$this->semantic->htmlMessage("pageContent");

        $this->jquery->compile($this->view);

    }


    public function page1Action(){
        echo "Page 1............";
    }

    public function page2Action(){
        echo "............Page 2";
    }

}

?>