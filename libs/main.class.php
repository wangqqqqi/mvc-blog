<?php

class main{
    function __construct(){
          $smarty=new Smarty();
          $smarty->setTemplateDir("template/admin");
          $this->smarty=$smarty;
//          $this->session=new session();
          $smarty->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
    }

    function jump($message,$url){
      echo "<script>alert('{$message}');location.href='{$url}';</script>";
    }
}