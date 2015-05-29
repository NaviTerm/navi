<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller{
    //网站logo
    public $config_logo;
    //网站名称
    public $config_webname;
	
	//网站域名
	public $config_domain;
	
	//网站关键字
	public $config_keyword;
	
	//网站描述
	public $config_description;

    //网站备案号
    public $config_icp;

    //公司地址
    public $config_address;

    //公司email
    public $config_email;

    //公司电话
    public $config_mobile;

	//底部链接
    public $footer_Link;
	
	
    /**
     * 初始化
     * 如果 继承本类的类自身也需要初始化那么需要在使用本继承类的类里使用parent::_initialize();
     */
    public function _initialize() {

        //执行SQL
        $map['elite']  =   array('eq',2);
        $this->footer_Link = M('Link')->where($map)->order('listorder desc')->limit(10)->select();


        //条件
        $logo['name']  =   array('eq','logo');
        //查询logo
        $this->config_logo = M('Config')->where($logo)->select();

        //条件
        $webname['name']  =   array('eq','webname');
        //查询网站名称
        $this->config_webname = M('Config')->where($webname)->select();

        //条件
        $domain['name']  =   array('eq','webname');
        //查询网站域名
        $this->config_domain = M('Config')->where($domain)->select();

        //条件
        $keyword['name']  =   array('eq','keyword');
        //查询网站关键字
        $this->config_keyword = M('Config')->where($keyword)->select();

        //条件
        $description['name']  =   array('eq','description');
        //查询网站描述
        $this->config_description = M('Config')->where($description)->select();

        //条件
        $icp['name']  =   array('eq','icp');
        //查询网站备案号
        $this->config_icp = M('Config')->where($icp)->select();

        //条件
        $address['name']  =   array('eq','address');
        //查询网站备案号
        $this->config_address = M('Config')->where($address)->select();

        //条件
        $email['name']  =   array('eq','email');
        //查询email
        $this->config_email = M('Config')->where($email)->select();

        //条件
        $mobile['name']  =   array('eq','mobile');
        //查询email
        $this->config_mobile = M('Config')->where($mobile)->select();



    }





}