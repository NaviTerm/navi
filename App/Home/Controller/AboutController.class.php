<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends PublicController {
    public function index(){

        //当前名称
        $channel ='About';

        //当前名称
        $current ='关于';

        //注入当前频道
        $this->assign( 'channel' , $channel );

        //注入当前名称
        $this->assign( 'current' , $current );

        $this->display();

    }
}