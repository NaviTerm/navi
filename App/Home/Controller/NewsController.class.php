<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends PublicController {

    public function index(){

        //当前名称
        $channel ='News';

        //当前名称
        $current ='新闻列表';

        //获取列表数据
        $model = 'Article' ;  //模型名称


        $mapc['moduleid']  =   array('eq',1);

        //查询新闻分类
        $Category = M('Category')->where($mapc)->limit(5)->select();

        //注入变量
        $this->assign( 'Category' , $Category );



        $cat = intval($_GET['cat']);

        if( !empty($cat) ){
            //查询过滤条件
            $map['catid']  =   array('eq',$cat);

        }

        //查询过滤条件
        $map['status']  =   array('eq',3);


        //查询总条数
        $count = M($model)->where($map)->count();

        $page = new \Think\Page($count,10);  // 实例化分页类 传入总记录数和每页显示的记录数
        $show = $page->show();              // 分页显示输出
        $list = M($model)->where($map)->order('itemid desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign("list",$list);
        $this->assign("page",$show);
        $this->assign("count",$count);


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



    public function show($id = 0){

        //当前名称
        $channel ='News_show';


        //频道名称
        $model = 'Article' ;
		
        $mapc['moduleid']  =   array('eq',1);

        //查询新闻分类
        $Category = M('Category')->where($mapc)->limit(5)->select();

        //注入变量
        $this->assign( 'Category' , $Category );
		
        //查询当前文章id
        $map['itemid']  =   array('eq',$id);

        $show  =  M($model)->where($map)->select();


        $hits =$show['0']['hits']+1;
        M($model)-> where($map)->setField('hits',"$hits");



        //当前名称
        $current = $show['0']['title'];


        //注入当前频道
        $this->assign( 'channel' , $channel );


        //注入当前名称
        $this->assign( 'current' , $current );


		
		//查询内容信息
		$content  =  M('Article_data')->where($map)->select();
		
		//注入基本信息
        $this->assign( 'show' , $show );
		
		//注入内容信息
		$this->assign( 'content' , $content );



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