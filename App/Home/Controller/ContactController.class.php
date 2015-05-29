<?php
namespace Home\Controller;
use Think\Controller;
class ContactController extends PublicController {
    public function index(){


        //当前名称
        $channel ='Case';

        //当前名称
        $current ='联系我们';

        //注入当前频道
        $this->assign( 'channel' , $channel );

        //注入当前名称
        $this->assign( 'current' , $current );


        $this->display();

    }

    public function show(){

        $this->display();

    }
}