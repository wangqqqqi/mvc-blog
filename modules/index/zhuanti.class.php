<?php
class zhuanti{
    function init(){
        $sobj=new Smarty();
        $sobj->setTemplateDir('template');
        $sobj->setCompileDir('compile');
        $sobj->setCacheDir('cache');
        $sobj->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
        $sobj->display("index/zhuanti.html");
    }
}