<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){

        //获取列表数据
        $model = 'Article' ;  //模型名称

        //查询过滤条件
        $map['status']  =   array('egt',0);

        //查询总条数
        $count = M($model)->where($map)->count();

        $page = new \Think\Page($count,10);  // 实例化分页类 传入总记录数和每页显示的记录数
        $show = $page->show();              // 分页显示输出
        $list = M($model)->where($map)->order('itemid desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign("list",$list);
        $this->assign("page",$show);
        $this->assign("count",$count);




        //查询新闻分类
        $Category = M('Category')->where()->order()->limit(5)->select();

        //注入变量
        $this->assign( 'Category' , $Category );

        //显示试图
        $this->display();

    }

    public function show($id = 0){

        //频道名称
        $model = 'Article' ;

        //查询当前文章id
        $map['itemid']  =   array('eq',$id);

        $show  =  M($model)->where($map)->select();

        $this->assign( 'show' , $show );

        $this->display();

    }
}