<?php
// 本类由系统自动生成，仅供测试用途
class WebAction extends Action {
  //添加
    public function add(){
   
     $data['phone']  ='13800138000';
     $data['nickname']  ='中国移动';
     $data['password']  =md5('123');
 
    $re = M('user')->add($data);
    
    echo $re;
    //返回值为ID 
  }
  //修改
  public function mod(){

      $data['phone'] = '110';
      $data['nickname'] = '公安局';
        
        $id =6;
        $re = M('user')->where("id=$id")->save($data);
        echo $re;
        //返回值  成功为1  失败为0

  }

   //删除
  public function delete(){

          //条件
       $phone ='13800138000';
      $re = M('user')->where("phone=$phone")->delete();

      echo $re;

  }
  
  public function article_show(){

    $re = M('luntan') -> order("time") -> select();

     echo json_encode($re);
  }
    public function article_count(){

    $re = M('luntan') -> order("time") -> select();
    $count =count($re);
     echo json_encode($count);
  }
  public function article_delete(){
    $iid = $_GET['iid_data'];
    $re = M('luntan') -> where("`id` = $iid") ->select();
    echo json_encode($re);
  }
  public function article_edit(){
    $iid = $_GET['iiid_data'];
    $re = M('luntan') -> where("`id` = $iid") ->select();
    echo json_encode($re);
  }
  public function article_edit1(){
    $iid = $_GET['id_data'];
    $re = M('luntan') -> where("`id` = $iid") ->select();
    echo json_encode($re);
  }
  public function article_save(){
    $data['biaoti'] = $_GET['bt_data'];
    $data['yuyan'] = $_GET['yy_data'];
    $data['name'] = $_GET['zz_data'];
    $data['neirong'] = $_GET['nr_data'];
    $id = $_GET['id_data'];
    
        $re = M('luntan')->where("id=$id")->save($data);
        echo json_encode($re);
  }
  public function user_show(){
    $re =M('yonghuxinxi') ->order("id") -> select();
    $count =count($re);
     echo json_encode($re);

  }
    public function user_count(){
    $re =M('yonghuxinxi') ->order("id") -> select();
    $count =count($re);
     echo json_encode($count);

  }
  public function user_delete(){
    $iid = $_GET['iid_data'];
    $re = M('yonghuxinxi') -> where("`id` = $iid") ->delete();
    echo json_encode($re);
  }
    public function admin_show(){
      $re = M('root') -> order("id") -> select();

      echo json_encode($re);
    }
    public function admin_count(){
      $re = M('root') -> order("id") -> select();
      $count =count($re);

      echo json_encode($count);
    }
    public function admin_delete(){
    $iid = $_GET['iid_data'];
    $re = M('root') -> where("`id` = $iid") ->delete();
    echo json_encode($re);
  }

  }
?>