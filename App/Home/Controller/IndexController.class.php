<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends PublicController {
    public function index(){

        //当前名称
        $channel ='Index';

        //当前名称
        $current ='首页';


        //查询过滤条件
        $map['status']  =   array('eq',3);

        //执行SQL
        $News = M('Article')->where($map)->order('itemid desc')->limit(5)->select();


        //执行SQL
        $Mall = M('Mall')->where($map)->order('itemid desc')->limit(15)->select();

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
        $banner = M('Banner')->where('status=3')->order('listorder desc')->limit(0,8)->select();
        // dump($banner);
        // exit();

        //注入变量
        $this->assign( 'banner' , $banner );

        //注入变量
        $this->assign( 'News' , $News );


        //注入当前频道
        $this->assign( 'channel' , $channel );

        //注入当前名称
        $this->assign( 'current' , $current );


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



        //显示试图
        $this->display();

    }
}