<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {
    public function index(){


        //查询过滤条件
        $map['status']  =   array('egt',0);

        //查询当前所有
        $PageList = M('Page')->where($map)->order('itemid desc')->limit()->select();

        //注入变量
        $this->assign('PageList',$PageList);

        $this->display();

    }


    /*添加文章*/
    public function add(){


        if(IS_POST){
            $Message = D('Message');
            $data = $Message->create();
            if($data){
                $id = $Message->add();
                if($id){
                    $this->success('新增成功');
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error($Message->getError());
            }

        }
    }
}