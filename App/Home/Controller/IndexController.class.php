<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){


        //查询过滤条件
        $map['status']  =   array('egt',0);

        //执行SQL
        $News = M('Article')->where($map)->order('itemid desc')->limit(5)->select();

        //注入变量
        $this->assign( 'News' , $News );

        //显示试图
        $this->display();

    }
}