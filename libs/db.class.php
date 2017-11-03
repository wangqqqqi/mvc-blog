<?php
class db {
    function __construct($tablename=""){
        global $configs;
        $this->host=$configs["database"]["host"];
        $this->port=$configs["database"]["port"];
        $this->user=$configs["database"]["user"];
        $this->password=$configs["database"]["password"];
        $this->database=$configs["database"]["database"];
        $this->table=$tablename;

        $this->ziduan='*';
        $this->where=$this->limit='';
        $this->connect();


    }

    function connect(){
        $this->db=new mysqli($this->host,$this->user,$this->password,$this->database,$this->port);
        if(mysqli_connect_error()){
            echo "数据库连接错误";
            exit;
        }
        $this->db->query("set names utf8");
    }

    function selectTable($tablename){
        $this->table=$tablename;
    }

    /*查询多条数据*/
    public function select($parm='')
    {
        if ($parm) {
            $sql = $parm;
        } else {
            $sql = "select " . $this->ziduan . " from " . $this->table . $this->where . $this->limit;
        }
        $result=$this->db->query($sql);
        $arra=$result->fetch_all(MYSQLI_ASSOC);
        return $arra;
    }

    //查询单条数据
    public function find(){
        $sql="select ".$this->ziduan." from ".$this->table.$this->where.$this->limit;
        $result=$this->db->query($sql);
        $row=$result->fetch_assoc();
        return $row;
    }
    /*执行自定义的sql*/

    function exec($sql){
        $result=$this->db->query($sql);

        return $result;

    }

    function filed($filed){
        $this->opt["field"]=$filed;
        return $this;
    }
    public function where($where){
        $this->where=" where ".$where;
        return $this;
    }
    function order($order){
        $this->opt["order"]="ORDER BY ".$order;
        return $this;
    }
    public function limit($limit){
        $this->limit=" limit ".$limit;
        return $this;
    }

    /*插入*/



    public function insert($arr){
        $key='';
        $value='';
        foreach ($arr as $k=>$v){
            $key.=$k.',';
            $value.=$v.',';
        }
        $key=substr($key,0,-1);
        $value=substr($value,0,-1);
        $sql="insert into ".$this->table." (".$key.")"." values (".$value.")";
        $this->db->query($sql);
    }
    public function update($arr){
        $str='';
        foreach ($arr as $k=>$v){
            $str.=$k.'='.$v.', ';
        }
        $str=substr($str,0,-2);

        $sql="update ".$this->table." set ".$str.$this->where;
        $this->db->query($sql);
    }

    public function delete(){
        $sql="delete from ".$this->table.$this->where;
        $this->db->query($sql);
    }

}








