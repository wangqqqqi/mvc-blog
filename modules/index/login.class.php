<?php
class login extends main{
    function init(){
        $sobj=new Smarty();
        $sobj->setTemplateDir('template');
        $sobj->setCompileDir('compile');
        $sobj->setCacheDir('cache');
        $sobj->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
        $sobj->display("index/login.html");

    }
    function check(){
        //1.  验证码
        $imgcode=strtolower($_POST["imgcode"]);
        if($_SESSION["imgcode"]!==$imgcode){
            echo "<script>alert('验证码错误！');location.href='index?m=index&f=login'</script>";
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
        $uname=sql(P("uname"));
        //4. 密码
        $upass=md5(P("upass"));

        $dbobj=new db("user");
        $result=$dbobj->where("uname='{$uname}' and upass='{$upass}'")->find();
        if(count($result)>0){
            $index=md5("uekblog");
            $_SESSION[$index]="yes";
            $_SESSION["uid"]=$result['uid'];
            $_SESSION['uname']=$result['uname'];
            echo "<script>alert('登录成功！');location.href='index.php?m=index&f=index&a=init'</script>";

        }else{
            echo "<script>alert('用户名或密码错误！');location.href='index?m=index&f=login'</script>";
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
    function logout(){
        foreach ($_SESSION as $k=>$v){
            unset($_SESSION[$k]);
        }
        $this->smarty->assign("errorInfo","退出成功");
        $this->smarty->assign("uppage","index.php");
        $this->smarty->display("index/success.html");
    }
}
