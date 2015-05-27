<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends SystemController {
    public function _initialize() {
        parent::_initialize();
    }
    public function index(){
        $link = M('link');
        $count = $link->count();
        $page = new \Think\Page($count,10);
        $show = $page->show();
        $lists = $link->order('listorder desc,addtime desc')->limit($page->firstRow.','.$page->listRows)->select();
        // dump($lists);
        $this->assign("lists",$lists);
        $this->assign("page",$show);
        $this->assign("count",$count);
        $this->display();
    }
    public function add(){
        if(I('post.')){
            $data = I('post.');
            $data['addtime'] = time();
            $data['status'] = 3;
            $link = M('link');
            $result = $link->create($data);
            if($result){
                $result1 = $link->add($result);
                 if($result1){
                    $this->success("添加成功",U('link/index'));
                }else{
                    $this->error("添加失败");
                }
            }
        }else{
            $this->display();
        }
    }
    public function update_seva(){
        if(I('post.')){
            $data = I('post.');
            $arr = array();
            $link = M('link');
            foreach($data as $k => $v){
                list($action,$itemid) = explode('_', $k);
                //$k = "listorder_16";
                //$action ="listorder",$itemid=16;$v=listorder值
                //$k = "elite_16";  $arr = array('listorder'=>$v,'itemid'=>$itemid);
                //$action ="elite",$itemid="16";$v= elite的值
                //$arr = array('elite'=>$v,'itemid')
                $arr[$itemid][$action] = $v;
            }
/*          dump($arr);
            exit();*/
            foreach($arr as $k => $v){
                $v['itemid'] = $k;
                $redata = $link->create($v);
                $result += $link->save($redata);
            }
            if($result){
                $this->success("修改成功".$result."条数据",U('link/index'));
            }else{
                $this->error("修改失败");
            }
        }
    }
    public function update($itemid){
        $link = M('link');
        $list = $link->where("itemid=".$itemid)->find();
        $this->assign('list',$list);
        if(I('post.')){
            $data = I('post.');
            if($data){
                $result = $link->save($data);
                if($result){
                    $this->success("编辑成功",U('link/index'));
                }else{
                    $this->error("编辑失败");
                }
            }
        }else{
            $this->display('add');
        }
    }
    public function delete($itemid){
        $link = M('link');
        $result = $link->delete($itemid);
        if($result){
            $this->success("世界那么大,它出去看看了",U('link/index'),3);
        }else{
            $this->error("删除失败");
        }
    }

}