<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends PublicController {
    public function index(){


        //当前名称
        $channel ='Message';

        //当前名称
        $current ='留言';

        //查询过滤条件
        $map['status']  =   array('eq',3);

        //查询当前所有
        $PageList = M('Page')->where($map)->order('itemid desc')->limit()->select();

        //注入变量
        $this->assign('PageList',$PageList);

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

        $this->display();

    }


    /*添加文章*/
    public function add(){


        if(IS_POST){
            $data = I('post.');
            $data['addtime'] = time();
            $data['status'] = 3;
            $data['ip'] = get_client_ip();
            $message = M('message');
            $result = $message->create($data);
            if($result){
                $result1 = $message->add($result);
                 if($result1){
                    $this->success("留言成功,谢谢您的意见",U('message/index'));
                }else{
                    $this->error("留言失败,刷新页面后重试");
                }
            }
        }
    }
}