<?php
class dingdan{
    function init(){
        $sobj=new Smarty();
        $sobj->setTemplateDir('template');
        $sobj->setCompileDir('compile');
        $sobj->setCacheDir('cache');
        $sobj->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
        $sobj->display("index/dingdan.html");
    }
}