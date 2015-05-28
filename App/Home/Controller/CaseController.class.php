<?php
namespace Home\Controller;
use Think\Controller;
class CaseController extends Controller {
    public function index(){



        $mapc['moduleid']  =   array('eq',2);

        //查询新闻分类
        $Category = M('Category')->where($mapc)->limit(5)->select();

        //注入变量
        $this->assign( 'Category' , $Category );


        //模型名称
        $model = 'Mall' ;

        //查询过滤条件
        $map['status']  =   array('egt',0);


        $cat = intval($_GET['cat']);

        if( !empty($cat) ){
            //查询过滤条件
            $map['catid']  =   array('eq',$cat);

        }


        //查询总条数
        $count = M($model)->where($map)->count();

        $page = new \Think\Page($count,10);  // 实例化分页类 传入总记录数和每页显示的记录数
        $show = $page->show();              // 分页显示输出
        $list = M($model)->where($map)->order('itemid desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign("list",$list);
        $this->assign("page",$show);
        $this->assign("count",$count);


        $this->display();

    }


    public function show($id = 0){



        $this->display();
    }
}