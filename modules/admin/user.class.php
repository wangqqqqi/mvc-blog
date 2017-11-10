<?php
class user
{
    function init()
    {
        $smarty = new Smarty();
        $smarty->setTemplateDir('template');
        $smarty->setCompileDir('compile');
        $smarty->setCacheDir('cache');
        $smarty->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
        $smarty->display("admin/user.html");
    }
    function selectUser(){
        $db=new db('user');
        $result=$db->select();
        $arr=array();
        $arr['rows']=$result;
        $arr['results']=count($arr['rows']);
        echo json_encode($arr,true);
    }
    function addUser(){
        $db=new db('user');
        $uname=sql(P("uname"));
        $upass=md5(P("upass"));
        $ulevel=$_POST['ulevel'];
        $uphone=$_POST['uphone'];
        $arr=array(
            "uname"=>"'{$uname}'",
            "upass"=>"'{$upass}'",
            "ulevel"=>"'{$ulevel}'",
            "uphone"=>"'{$uphone}'"
        );
        $result=$db->insert($arr);
        if($result>0){
            echo $db->mysql->insert_id;
        }
    }
    function editUser(){
        $db=new db('user');
        $uid=$_POST['uid'];
        $uname=sql(P("uname"));
        $upass=md5(P("upass"));
        $ulevel=$_POST['ulevel'];
        $uphone=$_POST['uphone'];
        $arr=array(
            "uname"=>"'{$uname}'",
            "upass"=>"'{$upass}'",
            "ulevel"=>"'{$ulevel}'",
            "uphone"=>"'{$uphone}'"
        );
        $result=$db->where("uid=".$uid)->update($arr);
        if($result>0){
            echo "ok";
        }
    }
    function delUser(){
        $db=new db('user');
        $str=$_POST['uid'];
        if($db->where('uid in'.$str)->delete()){
            echo 'ok';
        }
    }
}