<?php
class cata{
    function addCata(){
        $smarty=new Smarty();
        $smarty->setTemplateDir('template');
        $smarty->setCompileDir('compile');
        $smarty->setCacheDir('cache');
        $smarty->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
        $smarty->display("admin/addCata.html");
    }

    function addCataCon(){
        $db=new db('catagory');
        $pid=$_POST['pid'];
        $cname=$_POST['cname'];
        $cinfo=$_POST['cinfo'];
        $arr=array(
            "pid"=>"'{$pid}'",
            "cname"=>"'{$cname}'",
            "cinfo"=>"'{$cinfo}'"
        );
        if($db->insert($arr)){
            echo "<script>alert('添加成功！');location.href='index.php?m=admin&f=cata&a=showCataCon'</script>";
        }else{
            echo "<script>alert('添加失败');location.href='index.php?m=admin&f=cata&a=addCata'</script>";
        }
    }
    function showCata(){
        $arr=array();
        tree(0,$arr);
        echo json_encode($arr,true);
    }
    function showCataCon(){
        $obj=new Smarty();
        $obj->setTemplateDir('template');
        $obj->setCompileDir('compile');
        $obj->display("admin/showCataCon.html");
    }
    function tableCata(){
        $db=new db('catagory');
        $result=$db->select();
        $arr=array(
          array(
              "id"=>0,
              "cname"=>"一级选项"
          )
        );
        foreach ($result as $v){
           $arr[]=array(
               "id"=>$v["cid"],
               "cname"=>$v["cname"],
               "cinfo"=>$v["cinfo"],
               "pid"=>$v["pid"],
               "_parentId"=>$v['pid']
           );
        }
        $aa=array(
            "total"=>count($arr),
            "rows"=>$arr,
            "footer"=>array(array(
                "cname"=>"Total",
                "cinfo"=>count($arr),
                "iconCls"=>"icon-sum"
            ))
        );
        echo json_encode($aa);
    }
    function editCata(){
        $db=new db('catagory');
        $cid=$_POST['cid'];
        $field=$_POST['field'];
        $val=$_POST['val'];
        $arr=array(
            "$field"=>"'{$val}'"
        );
        $result=$db->where("cid=".$cid)->update($arr);
        if($result>0){
            echo "ok";
        }
    }
}