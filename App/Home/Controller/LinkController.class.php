<?php
namespace Home\Controller;
use Think\Controller;
class LinkController extends Controller {
    public function index(){

        //模型名称
        $model = 'Link' ;


        //查询过滤条件
        $map['status']  =   array('egt',0);


        //查询当前所有
        $PageList = M('Page')->where($map)->order('itemid desc')->limit()->select();

        //注入变量
        $this->assign('PageList',$PageList);

        //执行SQL
        $Link = M($model)->where($map)->order('listorder desc')->limit(10)->select();

        //注入变量
        $this->assign( 'Link' , $Link );


        $this->display();
    }
}