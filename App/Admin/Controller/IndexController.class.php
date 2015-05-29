<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends SystemController {
    public function _initialize() {
        parent::_initialize();
        // $this->is_login();      
    }

    public function index(){

        $this->display();
    }
    public function top(){
        // var_dump(S('_user'));
    	 $this->display();
    }
    public function left(){

    	$this->display();
    }
    public function main(){

    	$this->display();
    }
    public function right(){
        $article = M('article')->where('status=3')->order('edittime desc')->limit('0','9')->select();//最新文章
        $message = M('message')->where('status=3')->order('addtime desc')->limit('0','7')->select();//最新留言
        // var_dump($message);
        $art_count = M('article')->where('status=3')->count();//文章总数
        $mall_count = M('mall')->where('status=3')->count();//产品总数
        $link_count = M('link')->where('status=3')->count();//友链数量
        $mes_count = M('message')->where('status=3')->count();//留言数量
        $this->assign('message',$message);
        $this->assign('article',$article);
        $this->assign('art_count',$art_count);
        $this->assign('mall_count',$mall_count);
        $this->assign('link_count',$link_count);
        $this->assign('mes_count',$mes_count);
        $this->display();   
    }

}