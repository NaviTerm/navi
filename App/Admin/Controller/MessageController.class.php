<?php
namespace Admin\Controller;
use Think\Controller;
class MessageController extends SystemController {
    public function _initialize() {
        parent::_initialize();   
    }
    public function index(){
        $link = M('message');
        $count = $link->where("status=2")->count();
        $page = new \Think\Page($count,10);
        $show = $page->show();
        $lists = $link->where('status=2')->order('itemid desc')->limit($page->firstRow.','.$page->listRows)->select();
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
            $data['status'] = 2;
            $data['ip'] = get_client_ip();
            $link = M('message');
            $result = $link->create($data);
            if($result){
                $result1 = $link->add($result);
                 if($result1){
                    $this->success("添加成功",U('message/index'));
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
            $listorder = M('message');
            foreach($data as $k => $v){
                $arr['itemid'] = $k;
                $arr['listorder'] = $v;
                $result += $listorder->save($arr);
            }
            if($result){
                $this->success("修改成功".$result."条数据",U('message/index'));
            }else{
                $this->error("修改失败");
            }
        }
    }
    public function update($itemid){
        $link = M('message');
        $list = $link->where("itemid=".$itemid)->find();
        $this->assign('list',$list);
        if(I('post.')){
            $data = I('post.');
            $data['ip'] = get_client_ip();
            if($data){
                $result = $link->save($data);
                if($result){
                    $this->success("编辑成功",U('message/index'));
                }else{
                    $this->error("编辑失败");
                }
            }
        }else{
            $this->display('add');
        }
    }
    public function delete($itemid){
        $link = M('message');
        $result = $link->delete($itemid);
        if($result){
            $this->success("世界那么大,它出去看看了",U('message/index'),3);
        }else{
            $this->error("删除失败");
        }
    }

}