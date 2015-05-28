<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){



        //查询过滤条件
        $map['status']  =   array('egt',0);

        //执行SQL
        $News = M('Article')->where($map)->order('itemid desc')->limit(5)->select();


        //执行SQL
        $Mall = M('Mall')->where($map)->order('itemid desc')->select();

        //注入产品变量
        $this->assign('Mall',$Mall);

        //查询过滤条件
        $left['status']  =   array('egt',0);
        $left['level']  =   array('eq',2);


        //执行SQL
        $News_left = M('Article')->where($left)->order('itemid desc')->limit(3)->select();


        //注入左边文章变量
        $this->assign('News_left',$News_left);


        //执行SQL
        $Banner = M('Banner')->where($left)->order('itemid desc')->limit(5)->select();


        //注入变量
        $this->assign( 'Banner' , $Banner );

        //注入变量
        $this->assign( 'News' , $News );


        //执行SQL
        $map['elite']  =   array('eq',2);
        $footer_Link = M('Link')->where($map)->order('listorder desc')->limit(10)->select();


        //注入变量
        $this->assign( 'footer_Link' , $footer_Link );


        //显示试图
        $this->display();

    }
}