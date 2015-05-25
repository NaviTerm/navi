<?php
namespace Home\Controller;
use Think\Controller;
class CourseController extends Controller {
    public function index(){

        //获取列表数据
        $model = 'Course' ;  //模型名称

        //查询过滤条件
        $map['status']  =   array('egt',0);

        //执行SQL
        $Course = M($model)->where($map)->order('dtitle desc')->limit(5)->select();

        //注入变量
        $this->assign( 'Course' , $Course );

        $this->display();

    }
}