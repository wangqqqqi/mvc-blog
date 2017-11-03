<?php
class reg{
    function init(){
        $sobj=new Smarty();
        $sobj->setTemplateDir('template');
        $sobj->setCompileDir('compile');
        $sobj->setCacheDir('cache');
        $sobj->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
        $sobj->display("index/reg.html");

    }
    function check(){
        //1.  验证码
        $imgcode=strtolower($_POST["imgcode"]);
        if($_SESSION["imgcode"]!==$imgcode){
            echo "imgcode error!";
            exit;
        }

        /*
        //2.  手机验证
        $phonecode=$_POST["phonecode"];
        if($phonecode!==$_SESSION["phonecode"]){
            echo "phonecode error!";
            exit;
        }
        */
        //3.  用户名
        $aname=sql(P("aname"));
        //4. 密码
        $apass=md5(P("apass"));

        $dbobj=new db("admin");
        if(count($dbobj->where("aname='{$aname}' and apass='{$apass}'")->find())>0){
            $_SESSION["login"]="yes";
            echo "<script>alert('登录成功！');location.href='index.php?m=admin&f=index'</script>";

        }else{
            echo "error";
        }
    }

    function main(){
//        if($this->session->get("login")) {
//            $this->smarty->assign("name",$_SESSION["name"]);
//            $this->smarty->assign("rid",$_SESSION["rid"]);
//
//            $this->smarty->display("index.html");
//        }else{
//            echo "<script>alert('请登陆');location.href='index.php?m=admin&f=login'</script>";
//        }
    }

    function imgcode(){
        include LIBS_PATH."/code.class.php";
        $obj=new code();
        $obj->codeUrl="asd.ttf";
        $obj->output();
    }
}
