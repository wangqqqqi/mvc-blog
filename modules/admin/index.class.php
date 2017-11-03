<?php
class index{
    function init(){
        $smarty=new Smarty();
        $smarty->setTemplateDir('template');
        $smarty->setCompileDir('compile');
        $smarty->setCacheDir('cache');
        $smarty->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
        $smarty->assign("aname",$_SESSION["aname"]);
        $smarty->display("admin/index.html");
    }
    function showRole(){
        $smarty=new Smarty();
        $smarty->setTemplateDir('template');
        $smarty->setCompileDir('compile');
        $smarty->display("admin/showRole.html");
    }
    function selectRole(){
        $db=new db('arole');
        $result=$db->select();
        $arr=array();
        $arr['rows']=$result;
        $arr['results']=count($arr['rows']);
        echo json_encode($arr,true);
    }
    function addRole(){
        $db=new db('arole');
        $rname=$_POST['rname'];
        $con=$_POST['con'];
        $message=$_POST['message'];
        $adminUser=$_POST['adminUser'];
        $arr=array(
            "rname"=>"'{$rname}'",
            "con"=>"'{$con}'",
            "message"=>"'{$message}'",
            "adminUser"=>"'{$adminUser}'"
        );
        if($db->insert($arr)){
          echo $db->db->insert_id;
        }
    }
    function editRole(){
        $db=new db('arole');
        $roleid=$_POST['roleid'];
        $rname=$_POST['rname'];
        $con=$_POST['con'];
        $message=$_POST['message'];
        $adminUser=$_POST['adminUser'];
        $arr=array(
            "rname"=>"'{$rname}'",
            "con"=>"'{$con}'",
            "message"=>"'{$message}'",
            "adminUser"=>"'{$adminUser}'"
        );
        if($db->where("roleid=".$roleid)->update($arr)){
            echo "ok";
        }
    }
    function delRole(){
        $db=new db('arole');
        $str=$_POST['roleid'];
        if($db->where('roleid in'.$str)->delete()){
            echo 'ok';
        }
    }
    function showAdmin(){
        $obj=new Smarty();
        $db=new db('admin');
        $obj->setTemplateDir('template');
        $obj->setCompileDir('compile');
        $result=$db->select("select admin.*,arole.rname from admin,arole where admin.roleid=arole.roleid");
        $obj->assign('message',$result);
        $obj->display("admin/showAdmin.html");
    }
    function addAdmin(){
        $obj=new Smarty();
        $obj->setTemplateDir('template');
        $obj->setCompileDir('compile');
        $db=new db('arole');
        $result=$db->select("select arole.* from arole");
        $obj->assign('title',$result);
        $obj->display("admin/addAdmin.html");
    }
    function addAdminCon(){
        $db=new db('arole');
        $result=$db->where("roleid={$_SESSION['roleid']} and find_in_set(1,adminUser)")->select();
        if(count($result)>0){
            $db=new db('admin');
            $aname=sql(P('aname'));
            $apass=md5(P('apass'));
            $roleid=isset($_POST['roleid'])?$_POST['roleid']:2;
            $arr=array(
                "aname"=>"'{$aname}'",
                "apass"=>"'{$apass}'",
                "roleid"=>"'{$roleid}'"
            );
            $result=$db->insert($arr);
            var_dump($result);
            exit;
            if($result){
                echo "<script>alert('添加成功！');location.href='index.php?m=admin&f=index&a=showAdmin'</script>";
            }
        }else{
            echo "<script>alert('没有此权限');location.href='index.php?m=admin&f=index&a=addAdmin'</script>";
        }
    }
}