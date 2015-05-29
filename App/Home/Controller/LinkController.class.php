<?php
namespace Home\Controller;
use Think\Controller;
class LinkController extends PublicController {
    public function index(){

        //当前名称
        $channel ='Link';

        //当前名称
        $current ='友情链接';

        //模型名称
        $model = 'Link' ;


        //查询过滤条件
        $map['status']  =   array('eq',3);


        //查询当前所有
        $PageList = M('Page')->where($map)->order('itemid desc')->limit()->select();

        //注入变量
        $this->assign('PageList',$PageList);

        //执行SQL
        $Link = M($model)->where($map)->order('listorder desc')->limit(10)->select();

        //注入当前频道
        $this->assign( 'channel' , $channel );

        //注入当前名称
        $this->assign( 'current' , $current );

        //注入变量
        $this->assign( 'Link' , $Link );

        //网站名称注入变量
        $this->assign( 'config_webname' , parent::$this->config_webname['0']['value'] );
        //网站关键字注入变量
        $this->assign( 'config_keyword' , parent::$this->config_keyword['0']['value'] );
        //网站描述注入变量
        $this->assign( 'config_description' , parent::$this->config_description['0']['value'] );
        //网站域名注入变量
        $this->assign( 'config_domain' , parent::$this->config_domain['0']['value'] );
        //联系电话注入变量
        $this->assign( 'config_mobile' , parent::$this->config_mobile['0']['value'] );
        //email注入变量
        $this->assign( 'config_email' , parent::$this->config_email['0']['value'] );
        //公司地址注入变量
        $this->assign( 'config_address' , parent::$this->config_address['0']['value'] );
        //网站备案号注入变量
        $this->assign( 'config_icp' , parent::$this->config_icp['0']['value'] );
        //底部友情链接注入变量
        $this->assign( 'footer_Link' , parent::$this->footer_Link );


        $this->display();
    }
}