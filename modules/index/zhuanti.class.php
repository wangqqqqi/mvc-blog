<?php
class zhuanti{
    function init(){
        $sobj=new Smarty();
        $sobj->setTemplateDir('template');
        $sobj->setCompileDir('compile');
        $sobj->setCacheDir('cache');
        $sobj->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
        if(isset($_SESSION["userlogin"])){
            $sobj->assign("userlogin",$_SESSION["userlogin"]);
        }
        $sobj->display("index/zhuanti.html");
    }
}