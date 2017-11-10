<?php
class login{
    function init(){
        $sobj=new Smarty();
        $sobj->setTemplateDir('template');
        $sobj->setCompileDir('compile');
        $sobj->setCacheDir('cache');
        $sobj->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
        $sobj->display("admin/login.html");

    }
    function check(){
        //1.  验证码
        $imgcode=strtolower($_POST["imgcode"]);
        if($_SESSION["imgcode"]!==$imgcode){
            echo "<script>alert('验证码错误！');location.href='index?m=admin&f=login'</script>";
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


        $obj=new Smarty();
        $obj->setTemplateDir('template');
        $obj->setCompileDir('compile');
        //3.  用户名
        $aname=sql(P("aname"));
        //4. 密码
        $apass=md5(P("apass"));

        $db=new db("admin");
        $result=$db->where("aname='{$aname}' and apass='{$apass}'")->find();

        if($result){
            $_SESSION["login"]="yes";
            $_SESSION["roleid"]=$result['roleid'];
            $_SESSION['aname']=$result['aname'];
            echo "<script>alert('登录成功！');location.href='index.php?m=admin&f=index'</script>";
        }else{
            echo "<script>alert('用户名或密码错误！');location.href='index?m=admin&f=login'</script>";
        }
    }

//    function main(){
//        if($this->session->get("login")) {
//            $this->smarty->assign("aname",$_SESSION["aname"]);
//            $this->smarty->assign("aid",$_SESSION["aid"]);
//            $this->smarty->display("index.html");
//        }else{
//            echo "<script>alert('请登陆');location.href='index.php?m=admin&f=login'</script>";
//        }
//    }

    function imgcode(){
        include LIBS_PATH."/code.class.php";
        $obj=new code();
        $obj->codeUrl="asd.ttf";
        $obj->output();
    }
    function logout(){
        unset($_SESSION["login"]);
        unset($_SESSION["aname"]);
        unset($_SESSION["roleid"]);
        echo "<script>alert('退出成功');location.href='index?m=admin&f=login'</script>";
    }
}
