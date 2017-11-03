<?php
class index{
    function init(){
        $sobj=new Smarty();
        $sobj->setTemplateDir('template');
        $sobj->setCompileDir('compile');
//        $sobj->setCacheDir('cache');
//        $sobj->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
//        $sobj->setTemplateURL();
//        $sobj->setCompileURL();
//        $sobj->setCacheURL();
//        $sobj->cache=true;
//        $sobj->assign('title','我是标题哦');
        $sobj->display('index/index.html');
    }
}
