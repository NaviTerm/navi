<?php
namespace Home\Controller;
use Think\Controller;
class ServiceController extends Controller {
    public function index(){


        //模型名称
        $model = 'Page' ;


        //改变为整数类型
        $p = intval($_GET['p']);


        //查询过滤条件
        $map['status']  =   array('egt',0);

        $MapValue['status']  =   array('egt',0);
        if( !empty($p) ){
            $MapValue['itemid']  =   array('eq',$p);
            //查询当前
            $PageValue = M($model)->where($map)->select();


        }else{

            //查询当前所有
            $PageValue = M($model)->where($map)->order('listorder desc')->limit(1)->select();


        }

        //注入所有变量
        $this->assign( 'PageValue' , $PageValue );


        //查询当前所有
        $PageList = M($model)->where($map)->order('itemid desc')->limit()->select();

        //注入变量
        $this->assign('PageList',$PageList);




        $this->display();

    }

}