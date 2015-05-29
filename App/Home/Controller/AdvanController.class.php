<?php
namespace Home\Controller;
use Think\Controller;
class AdvanController extends PublicController {
    public function index(){

        //当前名称
        $channel ='Advan';

        //当前名称
        $current ='我们的优势';


        //注入当前频道
        $this->assign( 'channel' , $channel );

        //注入当前名称
        $this->assign( 'current' , $current );

        $this->display();

    }
}